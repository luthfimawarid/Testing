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
        // Validate the request to ensure it contains a file
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Handle file upload
        $fotoPath = $request->file('foto')->store('foto');
    
        // Create a new pancongs2 instance
        $pancong2 = new pancongs2();
        $pancong2->id = $request->id;
        $pancong2->menu = $request->menu;
        $pancong2->harga = $request->harga;
        $pancong2->detail = $request->detail;
    
        // Set the photo column in the database to the file path
        $pancong2->foto = $fotoPath;
    
        // Save the pancong2 instance to the database
        $pancong2->save();
    
        // Redirect to the pancongs index page
        return redirect('/tambahmenu2');
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pancong2 = pancongs2::find($id);
        return view('admin.isi.menu2.edit', compact('pancong2'));
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
        $pancong2 = pancongs2::find($id);
        $pancong2->menu = $request->menu;
        $pancong2->harga = $request->harga;
        $pancong2->detail = $request->detail;
        $pancong2->save();

        return redirect('/tambahmenu2');
    }
    
    public function destroy($id)
    {
        // Cek apakah data dengan ID yang diberikan ada di database
        $pancong2 = pancongs2::find($id);

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
