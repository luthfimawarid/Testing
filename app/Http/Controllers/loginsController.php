<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginsController extends Controller
{
    public function login()
    {
        return view('login.home');
    }

    public function loginpost(Request $request)
    {
        $login = new Login();

        // $registrasi->id = $request->id;
        $login->username = $request->username;
        $login->password = $request->password;
        $login->alamat = $request->alamat;
        $login->email = $request->email;
        

        $login->save();

       
    }
}
