<?php

namespace App\Http\Controllers;

use App\Models\admins;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = admins::all();
        return view("admin.isi.pesanan.index", compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = new admins();
        return view('admin.isi.pesanan.tambah', compact('admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = new admins();
        $admin->id = $request->id;
        $admin->nama = $request->nama;
        $admin->pesanan = $request->pesanan;
        $admin->harga = $request->harga;
        $admin->jumlah = $request->jumlah;
        $admin->total = $request->total;
        $admin->save();

        return redirect('/admins');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = admins::find($id);
        return view('admin.isi.pesanan.edit', compact('admin'));
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
        $admin = admins::find($id);
        $admin->id = $request->id;
        $admin->nama = $request->nama;
        $admin->pesanan = $request->pesanan;
        $admin->harga = $request->harga;
        $admin->jumlah = $request->jumlah;
        $admin->total = $request->total;
        $admin->save();

        return redirect('/admins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = admins::find($id);
        $admin->delete();

        return redirect('/admins');
    }
}
