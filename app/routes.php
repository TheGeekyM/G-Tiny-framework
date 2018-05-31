<?php


$router->group(['namespace' => 'App\Http\Controllers\Site'] , function() use ($router){
    $router->get('/', 'HomeController@view');
});
$router->get('admin/home', 'Admin\HomeController@view');
$router->get('admin/login', 'Admin\AuthController@login');