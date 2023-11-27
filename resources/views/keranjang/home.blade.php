@extends('menu_keranjang.main')
@section('title', $title)
@section('content')
    <h1>{{ $title }}</h1>

    <ul>
        @foreach($keranjang as $item)
            <li>{{ $item->nama_barang }} - {{ $item->jumlah_barang }}</li>
        @endforeach
    </ul>
@endsection
