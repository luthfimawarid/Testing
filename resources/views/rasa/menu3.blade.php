@extends('pamer.main')
@section('title', $title)
@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
@endsection
@section('content')
    <h1>{{ $rasa }}</h1>
<div class="utama">
    <div class="img-container">
        <img src="img/Group 46.png" alt="" class="img mt-5">
        <div class="text1">
            <p name="#aboutus">Menu 3 Rasa</p>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd700" fill-opacity="0.3" d="M0,96L48,117.3C96,139,192,181,288,186.7C384,192,480,160,576,138.7C672,117,768,107,864,133.3C960,160,1056,224,1152,208C1248,192,1344,96,1392,48L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <div class="bungkus1">
        @foreach ($pancong3 as $pcg3)
        <div class="menu" style="width: 15rem; height:20rem; flex-shrink: 0">
          <img src="{{ asset('img/' . $pcg3->foto) }}" alt="{{ $pcg3->menu }}">
           <div class="menubody">
           <p class="nama">{{$pcg3->menu}}</p>
           <p class="harga">{{$pcg3->harga}}</p>
           <a href="/pancongs3/{{$pcg3->id}}/" class="read">Readmore</a>
           </div>
        </div>
    @endforeach
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd700" fill-opacity="0.3" d="M0,96L48,117.3C96,139,192,181,288,186.7C384,192,480,160,576,138.7C672,117,768,107,864,133.3C960,160,1056,224,1152,208C1248,192,1344,96,1392,48L1440,0L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>


    <div class="bungkus4">
        <a href="/user" class="back">Kembali</a>
    </div>
</div>
@endsection