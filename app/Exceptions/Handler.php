<?php

use Whoops\Handler\PrettyPageHandler;
use Whoops\Handler\JsonResponseHandler;

$run     = new Whoops\Run;
$handler = new PrettyPageHandler;


// Add some custom tables with relevant info about your application,
// that could prove useful in the error page:
$handler->addDataTable('Killer App Details', [
    "G-Tiny Author" => 'Mohamed Emad | Software Engineer',
    "G-Tiny Email"  => 'thegeekym@gmail.com',
]);

// Set the title of the error page:
$handler->setPageTitle("Whoops! There was a problem.");

$run->pushHandler($handler);

// Add a special handler to deal with AJAX requests with an
// equally-informative JSON response. Since this handler is
// first in the stack, it will be executed before the error
// page handler, and will have a chance to decide if anything
// needs to be done.
if (Whoops\Util\Misc::isAjaxRequest()) {
    $run->pushHandler(new JsonResponseHandler);
}

// Register the handler with PHP, and you're set!
$run->register();