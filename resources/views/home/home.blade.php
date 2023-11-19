@extends('pamer.main')
@section('title', $title)
@section('content')
    <h1>{{ $home }}</h1>

<div class="content-container d-grid">
    <div class="row">
        <div class="text-container g-col-4">
            <img src="/img/Group 47.png" alt="" class="mt-5" height="100" width="350">
            <p>Ini adalah contoh teks yang dapat Anda masukkan di sini. Sesuaikan dengan kebutuhan Anda.</p>
        </div>
        <div class="image g-col-4">
            <img src="https://via.placeholder.com/200" alt="Gambar Contoh">
        </div>
    </div>
</div>
<div class="grid text-center">
  <div class="g-col-4">.g-col-4</div>
  <div class="g-col-4">.g-col-4</div>
  <div class="g-col-4">.g-col-4</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
@endsection