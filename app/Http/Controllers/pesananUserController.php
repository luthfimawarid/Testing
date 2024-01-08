<?php

namespace App\Http\Controllers;

use App\Models\checkout;
use App\Models\checkout2;
use App\Models\checkout3;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class pesananUserController extends Controller
{
    public function index(){
        // Mengambil ID user yang sedang login
        $userId = Auth::user()->id;

        // Mengambil data pesanan dari ketiga model
        $datapesanan1 = checkout::where('id_user', $userId)->get();
        $datapesanan2 = checkout2::where('id_user', $userId)->get();
        $datapesanan3 = checkout3::where('id_user', $userId)->get();

        // Menggabungkan data pesanan dari ketiga model ke dalam satu array
        $allDatapesanan = [
            'datapesanan1' => $datapesanan1,
            'datapesanan2' => $datapesanan2,
            'datapesanan3' => $datapesanan3,
        ];

        // Mengirim data pesanan ke view
        return view('pesanan.home', $allDatapesanan);
    }
}
