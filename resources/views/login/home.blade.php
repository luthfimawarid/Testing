@extends('menu_login.main')
@section('title', $title)
@section('content')
    <h1>{{ $login }}</h1>
    <link rel="stylesheet" href="css/login.css">

        <div class="bungkus justify-content-center">
            <div class="card-body">
              <form class="row justify-content-center mt-2">
                <h3 class="login justify-content-center">Login</h3>
                <div class="col-md-11">
                  <label for="inputusername" class="form-label mt-3">Username</label>
                  <input type="username" class="form-control" id="inputusername">
                </div>
                <div class="col-md-11">
                  <label for="inputPassword" class="form-label mt-3">Password</label>
                  <input type="password" class="form-control" id="inputPassword">
                </div>
                <div class="col-11">
                  <label for="inputemail" class="form-label mt-3">Email</label>
                  <input type="text" class="form-control" id="inputemail" placeholder="masukan email anda">
                </div>
                <div class="col-11 text-center">
                  <button type="submit" class="btn btn-dark m-5">Daftar</button>
                </div>
              </form>
            </div>
        </div>
    @endsection