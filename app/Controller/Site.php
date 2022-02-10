<?php

namespace Controller;

use Src\Request;
use Model\Post;
use Model\Employee;
use Src\View;
use Model\User;
use Src\Auth\Auth;

class Site
{
    public function index(): string
    {
        return new View('site.index');
    }
    public function employees(): string
    {
        $employees = Employee::all();
        return (new View())->render('site.employees', ['employees' => $employees]);
    }

    public function add_employees(Request $request): string
    {
        if ($request->method === 'POST' && Employee::create($request->all())) {
            app()->route->redirect('/employees');
        }
        return new View('site.add_employees');
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/index');
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
            app()->route->redirect('/index');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/index');
    }

}

