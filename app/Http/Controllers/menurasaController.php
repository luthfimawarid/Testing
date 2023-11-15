<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menurasaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {

    }
}
