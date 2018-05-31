<?php namespace App\Http\Controllers\Admin;


class HomeController
{
    public function view()
    {
        view('admin.home');
    }

    public function login()
    {
        view('admin.login');
    }
}