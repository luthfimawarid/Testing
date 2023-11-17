 @extends('menu_register.main')
@section('title', $title)
@section('content')
    <h1>{{ $register }}</h1>
    <link rel="stylesheet" href="css/register.css">

    <div class="bungkus justify-content-center">
        <div class="card-body">
            <form class="row justify-content-center mt-2">
                <h3 class="register justify-content-center">Register</h3>
                <div class="col-md-11">
                    <label for="inputusername" class="form-label mt-3">Username</label>
                    <input type="text" class="form-control" id="inputusername">
                </div>
                <div class="col-md-11">
                    <label for="inputPassword" class="form-label mt-3">Password</label>
                    <input type="password" class="form-control" id="inputPassword">
                </div>
                <div class="col-md-11">
                    <label for="inputnomor_tlp" class="form-label mt-3">Nomor Telepon</label>
                    <input type="nomor_tlp" class="form-control" id="inputnomor_tlp">
                </div>
                <div class="col-md-11">
                    <label for="inputalamat" class="form-label mt-3">Alamat</label>
                    <input type="alamat" class="form-control" id="inputalamat">
                </div>
                <div class="col-md-11">
                    <label for="inputEmail" class="form-label mt-3">Email</label>
                    <input type="email" class="form-control" id="inputEmail">
                </div>
                <div class="col-11 text-center">
                    <button type="submit" class="btn btn-dark m-5">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
