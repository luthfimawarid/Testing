<?php

namespace App\Http\Controllers;

use App\Models\pancongs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class pancongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pancong = DB::table('pancongs')->get();
        // return view("menu.index", compact('pancong'));
        $pancong = pancongs::all();
        $title = "FlavourOfPamer";
        $slug = "home";
        $rasa = " ";
        return view("rasa.home", compact('pancong','title','slug','rasa'));
    }

    public function indexTabel()
    {
        $pancong = pancongs::all();
        return view('admin.isi.menu.index', compact('pancong'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pancong = new pancongs();
        return view('admin.isi.menu.tambah', compact('pancong'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pancong = new pancongs();
        $pancong->id_menu = $request->id_menu;
        $pancong->nama = $request->nama;
        $pancong->harga = $request->harga;
        $pancong->deskripsi = $request->deskripsi;
        $pancong->save();

        return redirect('/tambahmenu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_menu
     * @return \Illuminate\Http\Response
     */
    public function show($id_menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id_menu)
    {
        $pancong = pancongs::find($id_menu);
        return view('admin.isi.menu.edit', compact('pancong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_menu)
    {
        $pancong = pancongs::find($id_menu);
        $pancong->nama = $request->nama;
        $pancong->harga = $request->harga;
        $pancong->deskripsi = $request->deskripsi;
        $pancong->save();

        return redirect('/tambahmenu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_menu)
    {
        // Cek apakah data dengan ID yang diberikan ada di database
        $pancong = pancongs::find($id_menu);

     if ($pancong) {
        // Jika data ditemukan, hapus
        $pancong->delete();
        return redirect('/tambahmenu')->with('success', 'Data berhasil dihapus');
     } else {
        // Jika data tidak ditemukan, berikan pesan atau lakukan penanganan yang sesuai
        return redirect('/tambahmenu')->with('error', 'Data tidak ditemukan');
     }
    }
}
