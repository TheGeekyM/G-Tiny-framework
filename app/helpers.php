<?php

use Philo\Blade\Blade;

function view($markup)
{
    $views = __DIR__ . '/../resources/views';
    $cache = __DIR__ . '/../storage/cache';

    $blade = new Blade($views, $cache);
    echo $blade->view()->make($markup)->render();
}

function public_path($path)
{
    $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

    return $actual_link . '/public/' . $path;
}

