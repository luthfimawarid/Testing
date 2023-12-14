@extends('login.main')
{{-- @section('title', $title) --}}
@section('content')
    {{-- <h1>{{ $login }}</h1> --}}
    <link rel="stylesheet" href="css/login.css">

    <div class="bungkus justify-content-center">
        <div class="card-body">
            <form action="{{ route('lominIndex')}}" method="POST" class="row justify-content-center mt-2">
                <h3 class="login justify-content-center">Login Admin</h3>
                <div class="col-11">
                    <label for="inputemail" class="form-label mt-3">Email</label>
                    <input type="text" class="form-control" id="inputemail" name="name" placeholder="masukan email anda">
                </div>
                <div class="col-md-11">
                    <label for="inputPassword" class="form-label mt-3">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="masukan password anda">
                </div>
                <div class="lupas mt-1">
                    <p>Lupa password?<a href="/resetpassword">Klik disini</a></p>
                </div>
                <div class="col-11 text-center">
                    <button type="submit" class="btn btn-dark mt-5 mb-2">Masuk</button>
                </div>
            </form>
        </div>
    </div>
    @endsection

