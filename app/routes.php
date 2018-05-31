<?php

$router->group([ 'namespace' => 'App\Http\Controllers\Site' ], function () use ($router) {
    $router->get('/', 'HomeController@view');
});

$router->group([ 'namespace' => 'App\Http\Controllers\Admin' ], function () use ($router) {
    $router->get('admin/home', 'HomeController@view');
    $router->get('admin/login', 'AuthController@login');
});