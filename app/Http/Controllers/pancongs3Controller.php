<?php

namespace App\Http\Controllers;
use App\Models\pancongs3;
use Illuminate\Http\Request;

class pancongs3Controller extends Controller
{
    public function index()
    {
        $pancong3 = pancongs3::all();
        $title = "FlavourOfPamer";
        $slug = "home";
        $rasa = " ";
        return view("rasa.menu3", compact('pancong3','title','slug','rasa'));
    }
    
    public function indexTabel()
    {
        $pancong3 = pancongs3::all();
        return view('admin.isi.menu3.index', compact('pancong3'));
    }
         /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pancong3 = new pancongs3();
        return view('admin.isi.menu3.tambah', compact('pancong3'));
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
    
        $pancong3 = new pancongs3();
        $pancong3->id = $request->id;
        $pancong3->foto = $imageName;
        $pancong3->menu = $request->menu;
        $pancong3->harga = $request->harga;
        $pancong3->deskripsi = $request->deskripsi;
        $pancong3->save();
    
        return redirect('/tambahmenu3');
    }
        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pancong3 = pancongs3::find($id);
        return view('admin.isi.menu3.edit', compact('pancong3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pancong3 = pancongs3::find($id);
    
        $request->validate([
            'foto' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);
    
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($pancong3->foto) {
                $oldImagePath = public_path('img/' . $pancong3->foto);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Simpan foto baru
            $image = $request->file('foto');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
    
            // Update kolom foto di database
            $pancong3->foto = $imageName;
        }
    
        // Update kolom lainnya
        $pancong3->menu = $request->menu;
        $pancong3->harga = $request->harga;
        $pancong3->deskripsi = $request->deskripsi;
    
        // Simpan perubahan
        $pancong3->save();
    
        return redirect('/tambahmenu3');
    }
    public function destroy($id)
    {
        // Cek apakah data dengan ID yang diberikan ada di database
        $pancong3 = pancongs3::find($id);

     if ($pancong3) {
        // Jika data ditemukan, hapus
        $pancong3->delete();
        return redirect('/tambahmenu3')->with('success', 'Data berhasil dihapus');
     } else {
        // Jika data tidak ditemukan, berikan pesan atau lakukan penanganan yang sesuai
        return redirect('/tambahmenu3')->with('error', 'Data tidak ditemukan');
     }
    }
}
