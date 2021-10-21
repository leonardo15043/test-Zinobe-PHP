<?php

use Core\Providers\Route;

Route::path('/', 'LoginController::index()', false);
Route::path('login', 'LoginController::index()', false);
Route::path('register', 'LoginController::register()', false);

Route::path('home', 'SiteController::index()', true);
Route::path('destroy', 'LoginController::destroySession()', true);