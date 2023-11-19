@extends('login.main')
@section('title', $title)
@section('content')
    <h1>{{ $login }}</h1>
    <link rel="stylesheet" href="css/register.css">


    <div class="bungkus justify-content-center">
        <div class="card-body">
            <form class="row justify-content-center mt-2">
                <h3 class="registrasi justify-content-center">Lupa Password</h3>
                <div class="col-md-11">
                    <label for="inputpasswordlama" class="form-label mt-3">Password Lama</label>
                    <input type="text" class="form-control" id="inputpasswordlama" placeholder="masukan password lama anda">
                </div>
                <div class="col-md-11">
                    <label for="inputPasswordbaru" class="form-label mt-3">Password Baru</label>
                    <input type="password" class="form-control" id="inputPasswordbaru" placeholder="masukan password baru anda">
                </div>
                <div class="col-md-11">
                    <label for="inputkonfirmasipassword" class="form-label mt-3">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="inputkonfirmasipassword" placeholder="konfirmasi password anda">
                </div>
                <div class="col-11 text-center">
                    <button type="submit" class="btn btn-dark m-5">Verifikasi</button>
                </div>
            </form>
        </div>
    </div>
@endsection
