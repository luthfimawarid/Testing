<?php

namespace App\Http\Controllers;

use App\Models\checkout;
use App\Models\checkout2;
use App\Models\checkout3;
use App\Models\pancongs;
use App\Models\pancongs2;
use App\Models\pancongs3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends Controller
{
    
    public function checkout(Request $request,$id){

        if (!Auth::check()) {
            // Jika tidak, tampilkan pesan dan redirect ke halaman login
            session()->flash('message', 'Silahkan login terlebih dahulu.');
            return redirect('/login');
        }

        $user = Auth::user();
        $datamenu = pancongs::find($id);
        $checkout = new checkout;


        $checkout->id_user = $user->id;
        $checkout->username = $user->name;
        // $checkout->foto = $request->foto;
        $checkout->id_menu = $datamenu->id_menu;
        $checkout->nama_menu = $datamenu->nama;
        $checkout->kematangan = $request->option;
        $checkout->harga_produk = $datamenu->harga * $request->kuantitas;
        $checkout->kuantitas = $request->kuantitas;
        $checkout->status = 'belum bayar';

        // if ($request->hasFile('foto')) {
        //     $fotoPath = $request->file('foto')->store('public/foto');
        //     $checkout->foto = basename($fotoPath);
        // }
        $checkout->save();

        return redirect('/user');

    }

    public function checkout2(Request $request,$id){

        if (!Auth::check()) {
            // Jika tidak, tampilkan pesan dan redirect ke halaman login
            session()->flash('message', 'Silahkan login terlebih dahulu.');
            return redirect('/login');
        }

        $user = Auth::user();
        $datamenu2 = pancongs2::find($id);
        $checkout2 = new checkout2;


        $checkout2->id_user = $user->id;
        $checkout2->username = $user->name;
        // $checkout2->foto = $request->foto;
        $checkout2->id_menu = $datamenu2->id_menu;
        $checkout2->nama_menu = $datamenu2->nama;
        $checkout2->kematangan = $request->option;
        $checkout2->harga_produk = $datamenu2->harga * $request->kuantitas;
        $checkout2->kuantitas = $request->kuantitas;
        $checkout2->status = 'belum bayar';

        // if ($request->hasFile('foto')) {
        //     $fotoPath = $request->file('foto')->store('public/foto');
        //     $checkout2->foto = basename($fotoPath);
        // }
        $checkout2->save();

        return redirect('/user');

    }
    public function checkout3(Request $request,$id){

        if (!Auth::check()) {
            // Jika tidak, tampilkan pesan dan redirect ke halaman login
            session()->flash('message', 'Silahkan login terlebih dahulu.');
            return redirect('/login');
        }

        $user = Auth::user();
        $datamenu3 = pancongs3::find($id);
        $checkout3 = new checkout3;


        $checkout3->id_user = $user->id;
        $checkout3->username = $user->name;
        // $checkout3->foto = $request->foto;
        $checkout3->id_menu = $datamenu3->id_menu;
        $checkout3->nama_menu = $datamenu3->nama;
        $checkout3->kematangan = $request->option;
        $checkout3->harga_produk = $datamenu3->harga * $request->kuantitas;
        $checkout3->kuantitas = $request->kuantitas;
        $checkout3->status = 'belum bayar';

        // if ($request->hasFile('foto')) {
        //     $fotoPath = $request->file('foto')->store('public/foto');
        //     $checkout3->foto = basename($fotoPath);
        // }
        $checkout3->save();

        return redirect('/user');

    }
    
}
