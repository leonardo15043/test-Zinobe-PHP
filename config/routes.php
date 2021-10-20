<?php

use Core\Providers\Route;

Route::path('/', 'UserController::index()');
Route::path('login', 'UserController::index()');
Route::path('register', 'UserController::register()');