<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function registration()
    {
        return view('registration');
    }
    public function logindone()
    {
        return view('logindone');
    }
}
