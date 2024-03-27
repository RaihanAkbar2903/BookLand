<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function item()
    {
        return view('item');
    }
    
    public function navbar()
    {
        return view('layouts/navbar');
    }

    public function carousel()
    {
        return view('layouts/carousel');
    }
    
}
