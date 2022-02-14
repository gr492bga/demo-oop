<?php

namespace Controller;



use Model\Subdivision;
use Src\Request;
use Model\Employee;
use Model\Composition;
use Src\View;
use Model\User;
use Src\Auth\Auth;
use Src\Validator\Validator;

class Site
{
    public function index(): string
    {
        return new View('site.index');
    }

    public function employees_sort(Request $request): string{

        $compositions = Composition::all();
        $employees = Employee::where('id_composition', $request->id_composition ?? 0)->get();

        return (new View())->render('site.employees_sort', ['employees' => $employees,'compositions'=>$compositions]);

    }
    public function sort_employees(Request $request): string{

        $subdivisions = Subdivision::all();
        $employees = Employee::where('id_subdivision', $request->id_subdivision ?? 0)->get();

        return (new View())->render('site.sort_employees', ['employees' => $employees,'subdivisions'=>$subdivisions]);
    }

    public function employees(Request $request): string
    {

        $employees = Employee::all();

        return (new View())->render('site.employees', ['employees' => $employees]);
    }

    public function add_employees(Request $request): string
    {
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'surname' => ['required'],
                'patronymic' => ['required'],
                'date' => ['required'],
                'address' => ['required'],
                'gender' => ['required'],
                'id_position' => ['required'],
                'id_subdivision' => ['required']
            ], [
                'required' => 'Поле  пусто',
            ]);

            if ($validator->fails()) {
                return new View('site.add_employees',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }
        }
        if ($request->method === 'POST' && Employee::create($request->all())) {
            app()->route->redirect('/employees');
        }
        return new View('site.add_employees');
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'login' => ['required', 'unique:users,login'],
                'password' => ['required']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if($validator->fails()){
                return new View('site.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            if (User::create($request->all())) {
                app()->route->redirect('/login');
            }
        }
        return new View('site.signup');
    }


    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/');
    }

}

