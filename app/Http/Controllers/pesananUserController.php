<?php

namespace App\Http\Controllers;

use App\Models\checkout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class pesananUserController extends Controller
{
    public function index(){
        // Mengambil ID user yang sedang login
        $userId = Auth::user()->id;
    
        // Mengambil data checkout berdasarkan ID user
        $datapesanan = checkout::where('id_user', $userId)->get();
    
        return view('pesanan.home', compact('datapesanan'));
    }
}
