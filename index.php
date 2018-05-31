<?php

use Symfony\Component\HttpFoundation\Request;

$loader = require 'vendor/autoload.php';
$loader->register();

require 'framework/Core.php';

$app = new Framework\Core();

// Include all files you want from listed directories
$directories = [ 'framework/', 'app/', 'routes/', 'app/Providers/' ];

foreach ($directories as $directory) {
    foreach (glob($directory . "*.php") as $file) {
        require_once $file;
    }
}

$response = $app->handle(Request::createFromGlobals());