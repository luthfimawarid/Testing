<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
   public function registerIndex()
   {
        return view('login.registrasi');
   }
   public function registerPost(Request $request)
   {
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->nomor_tlp = $request->nomor_tlp;
    $user->alamat = $request->alamat;
    $user->save();
    return back()->with('success', 'Register Successfully');
   }
   public function loginIndex()
   {
        return view('login.home');
   }
   public function lominIndex()
   {
        return view('login.lomin');
   }
   public function loginPost(Request $request)
   {
        $credetials = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/user')->with('success', 'Login berhasil');
        }
        return back()->with('error', 'Email or Password salah');
   }

   public function lominPost(Request $request) {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/dashboard')->with('success', 'Login berhasil');
        }
        return back()->with('error', 'Email or Password salah');
   }
   public function change_password(){
    return view('login.resetpassword');
   }
   
}
