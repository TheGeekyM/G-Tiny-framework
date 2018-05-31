<?php

$loader = require 'vendor/autoload.php';
$loader->register();


// Include all files you want from listed directories
$directories = [ 'app/Exceptions', 'framework', 'app' ];

foreach ($directories as $directory) {
    foreach (glob($directory . "/*.php") as $file) {
        require_once $file;
    }
}

