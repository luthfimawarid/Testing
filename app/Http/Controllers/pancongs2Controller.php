<?php

namespace App\Http\Controllers;
use App\Models\pancongs2;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class pancongs2Controller extends Controller
{
    public function index()
    {
        $pancong2 = pancongs2::all();
        $title = "FlavourOfPamer";
        $slug = "home";
        $rasa = " ";
        return view("rasa.menu2", compact('pancong2','title','slug','rasa'));
    }
    
    public function indexTabel()
    {
        $pancong2 = pancongs2::all();
        return view('admin.isi.menu2.index', compact('pancong2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pancong2 = new pancongs2();
        return view('admin.isi.menu2.tambah', compact('pancong2'));
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
    
        $pancong2 = new pancongs2();
        $pancong2->id_menu = $request->id;
        $pancong2->foto = $imageName;
        $pancong2->nama = $request->nama;
        $pancong2->harga = $request->harga;
        $pancong2->deskripsi = $request->deskripsi;
        $pancong2->save();
    
        return redirect('/tambahmenu2');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id_menu
     * @return \Illuminate\Http\Response
     */

    public function show($id_menu)
     {
        $pancong2 = pancongs2::all();
        $title = "FlavourOfPamer";
        $slug = "home";
        $selectItem2 = pancongs2::where('id_menu', $id_menu)->get();
        // dd($selectItem2);
        return view ('deskripsi.rasa2', compact('selectItem2'));
     }
     /**
     * Show the form for editing the specified resource.
     *
     * 
     * @param  int  $id_menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id_menu)
    {
        $pancong2 = pancongs2::find($id_menu);
        return view('admin.isi.menu2.edit', compact('pancong2'));
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
        $pancong2 = pancongs2::find($id_menu);
    
        $request->validate([
            'foto' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);
    
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($pancong2->foto) {
                $oldImagePath = public_path('img/' . $pancong2->foto);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Simpan foto baru
            $image = $request->file('foto');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
    
            // Update kolom foto di database
            $pancong2->foto = $imageName;
        }
    
        // Update kolom lainnya
        $pancong2->nama = $request->nama;
        $pancong2->harga = $request->harga;
        $pancong2->deskripsi = $request->deskripsi;
    
        // Simpan perubahan
        $pancong2->save();
    
        return redirect('/tambahmenu2');
    }
    
    public function destroy($id_menu)
    {
        // Cek apakah data dengan ID yang diberikan ada di database
        $pancong2 = pancongs2::find($id_menu);

     if ($pancong2) {
        // Jika data ditemukan, hapus
        $pancong2->delete();
        return redirect('/tambahmenu2')->with('success', 'Data berhasil dihapus');
     } else {
        // Jika data tidak ditemukan, berikan pesan atau lakukan penanganan yang sesuai
        return redirect('/tambahmenu2')->with('error', 'Data tidak ditemukan');
     }
    }   

}
