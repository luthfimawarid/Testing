<?php

namespace App\Http\Controllers;
use App\barangs;
use App\Models\menu;
use Illuminate\Http\Request;

class deskripsiController extends Controller
{
  // DeskripsiController.php
// DeskripsiController.php
public function show($menu_id)
{
    $menu = menu::find($menu_id);

    if (!$menu) {
        abort(404); // Or handle not found in a way suitable for your application
    }

    return view('deskripsi.home', [
        'title' => $menu->title,
        'deskripsi' => $menu->deskripsi,
        'menu' => $menu,
    ]);
}



}