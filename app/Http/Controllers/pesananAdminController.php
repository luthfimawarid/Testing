<?php

namespace App\Http\Controllers;

use App\Models\checkout;
use App\Models\checkout2;
use App\Models\checkout3;
use App\Models\Notification;
use Illuminate\Http\Request;

class pesananAdminController extends Controller
{
    public function index()
    {
        // Mengambil data pesanan dari semua tabel
        $datapesanan1 = checkout::all();
        $datapesanan2 = checkout2::all();
        $datapesanan3 = checkout3::all();

        // Mengirimkan data pesanan ke halaman admin
        return view('admin.isi.pesanan.pesanan1', compact('datapesanan1', 'datapesanan2', 'datapesanan3'));
    }

    // AdminController.php
    public function konfirmasiPesanan($id_pesanan)
    {
        // Logika untuk mengkonfirmasi pesanan
        $datapesanan1 = checkout::find($id_pesanan);
        
        // Pastikan pesanan dengan ID yang diberikan ada
        if (!$datapesanan1) {
            // Handle jika pesanan tidak ditemukan, misalnya redirect atau memberikan pesan error
            return redirect('/order')->with('error', 'Pesanan tidak ditemukan');
        }
    
        // Simpan notifikasi ke tabel notifikasi
        $notif = new Notification();
        $notif->id_user = $datapesanan1->id_user;
        $notif->message = 'Pesanan berhasil dikonfirmasi untuk ID Pesanan ' . $id_pesanan;
        $notif->save();
    
        // Ubah status pesanan
        $datapesanan1->status = 'Dikonfirmasi';
        $datapesanan1->save();
    
        // Lanjutkan ID pesanan ke checkout2 dan checkout3
        $id_pesanan_lanjutan = $datapesanan1->id;
    
        // Proses untuk checkout2
        $datapesanan2 = checkout2::find($id_pesanan_lanjutan);
        if ($datapesanan2) {
            $datapesanan2->status = 'Dikonfirmasi';
            $datapesanan2->save();
        }
    
        // Proses untuk checkout3
        $datapesanan3 = checkout3::find($id_pesanan_lanjutan);
        if ($datapesanan3) {
            $datapesanan3->status = 'Dikonfirmasi';
            $datapesanan3->save();
        }
    
        // Kode lain yang mungkin diperlukan
    
        // Redirect atau kembali ke halaman admin
        return redirect('/order'); // Sesuaikan dengan rute halaman admin Anda
    }
    

}
