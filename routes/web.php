<?php

use Src\Route;

Route::add('GET', '/', [Controller\Site::class, 'index']);
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/employees', [Controller\Site::class, 'employees'])
    ->middleware('auth');
Route::add('GET', '/sort_employees', [Controller\Site::class, 'sort_employees'])
    ->middleware('auth');
Route::add('GET', '/employees_sort', [Controller\Site::class, 'employees_sort'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_employees', [Controller\Site::class, 'add_employees'])
    ->middleware('admin');
