@extends('history.history')
@section('title', $title)
@section('content')
    <h1>{{ $history }}</h1>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> 
    <div class="history shadow rounded">
      <div class="row rounded" style="background-color: rgb(242, 210, 51);">
          <div class="col-md-2 p-3">
              <img src="/img/menu.png" alt="" width="100%">
          </div>
          <div class="col-md">
              <b>Coklat keju </b>
              <br>
              Jumlah : 2
              <br>
              Dipesan oleh : Luthfi Mawarid
          </div>
          <div class="price col-md-3">
              Harga :
          </div>
      </div>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection