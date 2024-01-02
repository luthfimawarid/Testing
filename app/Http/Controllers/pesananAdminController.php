<?php

namespace App\Http\Controllers;

use App\Models\checkout;
use Illuminate\Http\Request;

class pesananAdminController extends Controller
{
    public function index(){
        $datapesanan = checkout::all();
        return view('admin.isi.pesanan.index',compact('datapesanan'));
    }
}
