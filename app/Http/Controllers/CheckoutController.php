<?php

namespace App\Http\Controllers;

use App\Models\checkout;
use App\Models\pancongs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends Controller
{
    public function checkout(Request $request,$id){
        $user = Auth::user();
        $datamenu = pancongs::find($id);
        $checkout = new checkout;


        $checkout->id_user = $user->id;
        $checkout->username = $user->name;
        $checkout->id_menu = $datamenu->id_menu;
        $checkout->nama_menu = $datamenu->nama;
        $checkout->kematangan = $request->option;
        $checkout->harga_produk = $datamenu->harga * $request->kuantitas;
        $checkout->kuantitas = $request->kuantitas;
        $checkout->status = 'belum bayar';

        $checkout->save();

        return redirect('/user');

    }
}
