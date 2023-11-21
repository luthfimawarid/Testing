<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginsController extends Controller
{
    public function login()
    {
        return view('login');
    }
}
