@extends('pamer.main')
@section('title', $title)
@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
@endsection
@section('content')
    <h1>{{ $rasa }}</h1>
    <div class="img-container">
        <img src="img/Group 46.png" alt="" class="img mt-5">
        <div class="text1">
            <p name="#aboutus">Menu 2 Rasa</p>
        </div>
    </div>
    <div class="bungkus1">
      @foreach($pancong2 as $pcg2)
        <div class="menu">
          <img src="img/menu.png" alt="">
          <div class="menubody">
            <p class="nama" >{{$pcg2->menu}}</p>
            <p class="harga">{{$pcg2->harga}}</p>
            <a href="/deskripsimenu/{{$pcg2->id}}" class="read">Read More</a>
          </div>
        </div>
      @endforeach
    </div>



<div class="bungkus4">
  <a href="/user" class="back">Kembali</a>
</div>

@endsection