<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resetpasswordsController extends Controller
{
    public function resetpassword()
    {
        return view('resetpassword');
    }
}
