<?php namespace App\Http\Controllers\Admin;


class HomeController
{
    public function view()
    {
        return view('admin.home');
    }

    public function login()
    {
        return view('admin.login');
    }
}