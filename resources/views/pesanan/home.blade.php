@extends('pamer.main1')
@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/pesanan.css')}}">
@endsection
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> 
    <div class="pesanan shadow rounded" style="background-color: rgb(255, 239, 120)">
     @foreach ($datapesanan1 as $item)
      <div class="row rounded" style="background-color: rgb(255, 228, 91);">
          <div class="col-md-2 p-3">
              <img src="/img/menu.png" alt="" width="100%" height="110px">
          </div>
          <div class="col-md mt-3">
              <p><b>{{$item->nama_menu}}</b></p>
              <p>{{$item->kuantitas}}</p>
              <p>{{$item->kematangan}}</p>
          </div>
          <div class="price col-md-3 mt-3">
              <p><b>{{$item->harga_produk}}</b></p>
              <p><b><i>{{$item->status}}</i></b></p>
          </div>
      </div>
      @endforeach
     @foreach ($datapesanan2 as $item)
      <div class="row rounded" style="background-color: rgb(255, 228, 91);">
          <div class="col-md-2 p-3">
              <img src="/img/menu.png" alt="" width="100%" height="110px">
          </div>
          <div class="col-md mt-3">
              <p><b>{{$item->nama_menu}}</b></p>
              <p>{{$item->kuantitas}}</p>
              <p>{{$item->kematangan}}</p>
          </div>
          <div class="price col-md-3 mt-3">
              <p><b>{{$item->harga_produk}}</b></p>
              <p><b><i>{{$item->status}}</i></b></p>
          </div>
      </div>
      @endforeach
     @foreach ($datapesanan3 as $item)
      <div class="row rounded" style="background-color: rgb(255, 228, 91);">
          <div class="col-md-2 p-3">
              <img src="/img/menu.png" alt="" width="100%" height="110px">
          </div>
          <div class="col-md mt-3">
              <p><b>{{$item->nama_menu}}</b></p>
              <p>{{$item->kuantitas}}</p>
              <p>{{$item->kematangan}}</p>
          </div>
          <div class="price col-md-3 mt-3">
              <p><b>{{$item->harga_produk}}</b></p>
              <p><b><i>{{$item->status}}</i></b></p>
          </div>
      </div>
      @endforeach
    </div>
      
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection