<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resetpasswordController extends Controller
{
    public function resetpassword()
    {
        return view('resetpassword');
    }
}
