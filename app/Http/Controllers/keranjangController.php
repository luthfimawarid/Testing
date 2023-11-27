<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class keranjangController extends Controller
{
    public function index()
{
    $keranjangItems = keranjang::all();
    return view('keranjang.home', ['keranjang' => $keranjangItems, 'title' => 'Halaman Keranjang']);
}
}
