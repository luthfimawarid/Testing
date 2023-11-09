<?php

namespace App\Http\Controllers;
use App\barangs;
use Illuminate\Http\Request;

class deskripsiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {

    }


}