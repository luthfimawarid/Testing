<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lominController extends Controller
{
    public function lomin()
    {
       return view('login.lomin');
   }
   public function lominpost(Request $request)
   {
       $lomin = new lomin();

       // $registrasi->id = $request->id;
       $lomin->username = $request->username;
       $lomin->password = $request->password;
       $lomin->email = $request->email;
       

       $lomin->save();

      
   }
}
