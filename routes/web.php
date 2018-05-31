<?php

$app->map('/', 'Site\HomeController@view');
$app->map('admin/home', 'Admin\HomeController@view');
$app->map('admin/login', 'Admin\AuthController@login');