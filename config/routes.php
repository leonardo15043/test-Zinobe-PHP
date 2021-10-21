<?php

use Core\Providers\Route;
/*
Estas son todas las rutas del sistema, se debe especificar la ruta ,
el controlador seguido del metodo y por ultimo un estado que especifica si debe estar logueado
*/
Route::path('/', 'LoginController::index()', false);
Route::path('login', 'LoginController::index()', false);
Route::path('register', 'LoginController::register()', false);

Route::path('home', 'SiteController::index()', true);
Route::path('destroy', 'LoginController::destroySession()', true);