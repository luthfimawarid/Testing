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
        $request->validate([
            'foto' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);
    
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
        }
    
        $pancong = new pancongs();
        $pancong->id_menu = $request->id;
        $pancong->foto = $imageName;
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
        $pancong = pancongs::all();
        $title = "FlavourOfPamer";
        $slug = "home";
        $selectItem = pancongs::where('id_menu', $id_menu)->get();
        return view ('deskripsi.home', compact('selectItem'));
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
    
        $request->validate([
            'foto' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);
    
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($pancong->foto) {
                $oldImagePath = public_path('img/' . $pancong->foto);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Simpan foto baru
            $image = $request->file('foto');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
    
            // Update kolom foto di database
            $pancong->foto = $imageName;
        }
    
        // Update kolom lainnya
        $pancong->nama = $request->nama;
        $pancong->harga = $request->harga;
        $pancong->deskripsi = $request->deskripsi;
    
        // Simpan perubahan
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
