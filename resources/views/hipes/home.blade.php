@extends('history.history')
@section('title', $title)
@section('content')
    <h1>{{ $history }}</h1>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> 
<div class="deskripsi">
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <img src="img/Group 52.png" alt="Group 52">
      </div>
      <div class="col text-start">
        <p>Chocolate chruncy</p>
        <i class="bi bi-dot">Oreo 2k</i>
        <i class="bi bi-dot">Milo 2k</i>
        <i class="bi bi-dot">Keju 2k</i>
        <i class="bi bi-dot">Meises 2k</i>
        <i class="bi bi-dot">Kacang 2k</i>
        <button class="outline-btn" onclick="changeColor(this)">Matang</button>
        <button class="outline-btn" onclick="changeColor(this)">Setengah Matang</button>
      </div>
    </div>
  </div>
</div>
<div class="bungkus4">
  <a href="/user" class="back">Kembali</a>
  <a href="/menu1" class="pesan">Pesan Sekarang</a>
</div>
<script src="js/script.js"></script>
@endsection