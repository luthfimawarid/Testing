@extends('menu_keranjang.main')
@section('title', $title)
@section('content')
    <h1>{{ $title }}</h1>
    <div class="container px-4 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <h4 class="heading">Shopping Chart</h4>
            </div>
            <div class="col-7">
                <div class="row text-right">
                    <div class="col-4">
                        <h6 class="mt-2">Format</h6>
                    </div>
                    <div class="col-4">
                        <h6 class="mt-2">Jumlah</h6>
                    </div>
                    <div class="col-4">
                        <h6 class="mt-2">Harga</h6>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row d-flex justify-content-center border-top">
            <div class="col-5">
                <div class="row d-flex">
                    <div class="book">
                        <img src="https://i.imgur.com/2DsA49b.jpg" class="book-img">
                    </div>
                    <div class="my-auto flex-column d-flex pad-left">
                        <h6 class="mob-text">Pancong Lumer</h6>
                    </div>
                </div>
            </div>
            <div class="my-auto col-7">
                <div class="row text-right">
                    <div class="col-4">
                        <p class="mob-text">Cokelat</p>
                    </div>
                    <div class="col-4">
                        <div class="row d-flex justify-content-end px-3">
                            <p class="mb-0" id="cnt1">1</p>
                            <div class="d-flex flex-column plus-minus">
                                <span class="vsm-text plus">+</span>
                                <span class="vsm-text minus">-</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <h6 class="mob-text">10000</h6>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row d-flex justify-content-center border-top">
            <div class="col-5">
                <div class="row d-flex">
                    <div class="book">
                        <img src="https://i.imgur.com/Oj1iQUX.jpg" class="book-img">
                    </div>
                    <div class="my-auto flex-column d-flex pad-left">
                        <h6 class="mob-text">Pancong Lumer</h6>
                    </div>
                </div>
            </div>
            <div class="my-auto col-7">
                <div class="row text-right">
                    <div class="col-4">
                        <p class="mob-text">Strawberry + Redvelvet</p>
                    </div>
                    <div class="col-4">
                        <div class="row d-flex justify-content-end px-3">
                            <p class="mb-0" id="cnt2">1</p>
                            <div class="d-flex flex-column plus-minus">
                                <span class="vsm-text plus">+</span>
                                <span class="vsm-text minus">-</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <h6 class="mob-text">12000</h6>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-3 radio-group">
                            <div class="row d-flex px-3 radio">
                                <img class="pay" src="https://i.imgur.com/WIAP9Ku.jpg">
                                <p class="my-auto">BRI</p>
                            </div>
                            <div class="row d-flex px-3 radio gray">
                                <img class="pay" src="https://i.imgur.com/OdxcctP.jpg">
                                <p class="my-auto">BCA</p>
                            </div>
                            <div class="row d-flex px-3 radio gray mb-3">
                                <img class="pay" src="https://i.imgur.com/cMk1MtK.jpg">
                                <p class="my-auto">DANA</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="row px-2">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">Nama Lengkap</label>
                                    <input type="text" id="nama" name="nama" placeholder="masukkan nama lengkap">
                                </div>
                            </div>
                            <div class="row px-2">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">Tanggal</label>
                                    <input type="text" id="tgl" name="tgl" placeholder="MM/YYYY">
                                </div>
                            </div>
                            <div class="row px-2">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">Password</label>
                                    <input type="text" id="pass" name="pass" placeholder="***">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="row d-flex justify-content-between px-4">
                                <p class="mb-1 text-left">Subtotal</p>
                                <h6 class="mb-1 text-right">22000</h6>
                            </div>
                            <div class="row d-flex justify-content-between px-4" id="tax">
                                <p class="mb-1 text-left">Total (tax included)</p>
                                <h6 class="mb-1 text-right">22000</h6>
                            </div>
                            <button class="btn-block btn-blue">
                                <span>
                                    <span id="checkout">Checkout</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
