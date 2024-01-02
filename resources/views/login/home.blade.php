@extends('login.main')
{{-- @section('title', $title) --}}
@section('content')
    {{-- <h1>{{ $login }}</h1> --}}
    <link rel="stylesheet" href="css/login.css">

    <div class="bungkus justify-content-center">
        <div class="card-body">
            <form action="{{ route('loginIndex')}}" method="POST" class="row justify-content-center mt-2">
                @csrf
                <h3 class="login justify-content-center">Login</h3>
                <div class="col-md-11">
                    <label for="inputusername" class="form-label mt-3">Nama Lengkap</label>
                    <input type="username" class="form-control" id="inputusername" name="name" placeholder="masukan username anda">
                </div>
                <div class="col-11">
                    <label for="inputemail" class="form-label mt-3">Email</label>
                    <input type="text" class="form-control" id="inputemail" name="email" placeholder="masukan email anda">
                </div>
                <div class="col-md-11">
                    <label for="inputPassword" class="form-label mt-3">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="masukan password anda">
                </div>
                <div class="text-center ">
                    <p>Belum punya akun? <a href="/register">Daftar disini</a></p>
                </div>
                {{-- <div class="lupas mt-1">
                    <p>Lupa password?<a href="/resetpassword">Klik disini</a></p>
                </div> --}}
                <div class="col-11 text-center">
                    <button type="submit" class="btn btn-dark mt-5 mb-2">Masuk</button>
                </div>
                {{-- <div class="text-center ">
                    <p>Belum punya akun? <a href="/register">Daftar disini</a></p>
                </div> --}}
            @endsection
            </form>
        </div>
    </div>

