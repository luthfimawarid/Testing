<?php

namespace App\Http\Controllers;
use App\Models\registrasi;
use Illuminate\Http\Request;


class registrasiController extends Controller
{
    public function registrasi()
     {
        return view('login.registrasi');
    }
    public function registrasipost(Request $request)
    {
        $registrasi = new Registrasi();

        // $registrasi->id = $request->id;
        $registrasi->username = $request->username;
        $registrasi->password = $request->password;
        $registrasi->nomor_tlp = $request->nomor_tlp;
        $registrasi->alamat = $request->alamat;
        $registrasi->email = $request->email;
        

        $registrasi->save();

       
    }
}
