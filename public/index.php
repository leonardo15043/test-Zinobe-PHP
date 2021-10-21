<?php

use League\Plates\Engine;

require __DIR__.'/../vendor/autoload.php';
//Ruta donde se encuentran todas las vistas de la aplicacion para el uso de plantillas
$template = new Engine(__DIR__.'/../src/views');
//configuracion de variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();

require __DIR__.'/../config/database.php';
require __DIR__.'/../config/routes.php';

