<?php

use App\Autoloader;

define('ROOT', dirname(__DIR__));

require ROOT . DIRECTORY_SEPARATOR . 'Autoloader.php';
Autoloader::register();

require_once ROOT . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR . 'main.php';
