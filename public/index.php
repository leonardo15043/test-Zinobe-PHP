<?php

use League\Plates\Engine;

require __DIR__.'/../vendor/autoload.php';

$template = new Engine(__DIR__.'/../src/views');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();

require __DIR__.'/../config/database.php';
require __DIR__.'/../config/routes.php';

