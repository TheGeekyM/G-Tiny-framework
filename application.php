#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/helpers.php';

use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands
$application->add(new \App\Commands\CVParser());

$application->run();