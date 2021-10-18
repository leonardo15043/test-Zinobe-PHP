<?php

require __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();

require __DIR__.'/../config/database.php';
require __DIR__.'/../config/routes.php';
