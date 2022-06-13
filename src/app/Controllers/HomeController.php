<?php

namespace MarigoldBank\Controllers;

use MarigoldBank\App;

class HomeController
{

    public function index()
    {
        return App::view('home', ['title' => 'Marigold Bank']);
    }

    public function login()
    {
        return App::view('login');
    }

    public function form()
    {
        return App::view('register');
    }

    public function doForm()
    {
        return App::redirect('clients');
    }
    public function clientsList()
    {
        return App::view('clients');
       
    }
}
