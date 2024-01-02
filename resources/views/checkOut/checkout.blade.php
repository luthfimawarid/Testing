@extends('pamer.main1')
@section('title', $title)
@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
@endsection
@section('content')
  <body class="bg-body-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="/img/Ellipse 29.png" alt="" width="72" height="72">
      <h2>Checkout form</h2>
      <p class="lead">Isilah form berikut untuk proses pemesanan</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-warning">Pesanan Anda</span>
          <span class="badge bg-warning rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Nama produk</h6>
              <small class="text-body-secondary">Coklat + Keju</small>
            </div>
            <span class="text-body-secondary">10.000</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <small class="text-body-secondary">Tiramisu Cruncy</small>
            </div>
            <span class="text-body-secondary">9.000</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
            <div class="text-success">
              <h6 class="my-0">Kode Promo</h6>
              <small>-</small>
            </div>
            <span class="text-success">-</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (Rp.)</span>
            <strong>19.000</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Kode Promo">
            <button type="submit" class="btn btn-secondary">Tukarkan</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        {{-- <h4 class="mb-3">Billing address</h4> --}}
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-12">
              <label for="namakamu" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="namakamu" placeholder="Masukkan nama anda" value="" required>
              <div class="invalid-feedback">
                Silahkan isi varian rasa terlebih dahulu..
              </div>
            </div>


            <div class="col-12">
              <label for="no hp" class="form-label"> No Hp</label>
              <input type="text" class="form-control" id="email" placeholder="Masukkan no Hp anda" required>
              <div class="invalid-feedback">
                Silahkan isi varian rasa terlebih dahulu.
              </div>
            </div>

            <div class="col-12">
              <label for="rasa" class="form-label">Varian Rasa</label>
              <select class="form-select" id="rasa" required>
                <option value="" selected disabled>Pilih rasa</option>
                <!-- Tambahkan opsi 1 rasa sesuai kebutuhan -->
                <option value="">---PAMER 1 RASA---</option>
                <option value="original">Original</option>
                <option value="cokelat">Cokelat</option>
                <option value="strawberry">Strawberry</option>
                <option value="green tea">Green Tea</option>
                <option value="bluebrry">Blueberry</option>
                <option value="vanilla">Vanilla</option>
                <option value="greentea crunchy">Greentea Crunhcy</option>
                <option value="cheese spread">Cheese Spread</option>
                <option value="cokelat crunchy">Cokelat Crunhcy</option>
                <option value="susu crunchy">Susu Crunhcy</option>
                <option value="tiramisu crunchy">Tiramisu Crunhcy</option>
                <!-- Tambahkan opsi 2 rasa sesuai kebutuhan -->
                <option value="">---PAMER 2 RASA---</option>
                <option value="susu+meses">Susu + Meses</option>
                <option value="susu+keju">Susu + Keju</option>
                <option value="strawberry+greentea">Strawberry + Greentea</option>
                <option value="cokelat+strawberry">Cokelat + Strawberry</option>
                <option value="cokelat+greentea">Cokelat + Greentea</option>
                <option value="cokelat+meses">Cokelat + Meses</option>
                <option value="cokelat+keju">Cokelat + Keju</option>
                <option value="cokelat+kacang">Cokelat + Kacang</option>
                <option value="cokelat+oreo">Cokelat + Oreo</option>
                <option value="cokelat+redvelvet">Cokelat + Red Velvet</option>
                <!-- Tambahkan opsi 3 rasa sesuai kebutuhan -->
                <option value="">---PAMER 3 RASA---</option>
                <option value="cokelat+keju+kacang">Cokelt + Keju + Kacang</option>
                <option value="cokelat+oreo+keju">Cokelat + Oreo + Keju</option>
                <option value="strawberry+keju+kacang">Strawberry + Keju + Kacang</option>
                <option value="strawberry+oreo+keju">Strawberry + Oreo + Keju</option>
                <option value="strawberry+keju+redvelvet">Strawberry + Keju + Red Velvet</option>
                <option value="spesial+pancong+pelangi">Spesial Pancong Pelangi</option>
              </select>
              <div class="invalid-feedback">
                Silahkan pilih varian rasa terlebih dahulu.
              </div>
            </div>

            <div class="col-12">
              <label for="topping" class="form-label">Topping</label>
              <select class="form-select" id="rasa" required>
                <option value="" selected disabled>Pilih topping</option>
                <!-- Tambahkan topping sesuai kebutuhan -->
                <option value="susu">Susu</option>
                <option value="meses">Meses</option>
                <option value="oreo">Oreo</option>
                <option value="redvelvet">Red Velvet</option>
                <option value="kacang">Kacang</option>
                <option value="keju">Keju</option>
                <option value="chocochips">Choco Chips</option>
                <option value="kacangalmond">Kacang Almond</option>
              </select>

            <div class="col-12">
              <label for="address2" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="address2" placeholder="Masukkan alamat lengkap anda" required>
            </div>
            

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-body-secondary">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <small class="text-body-secondary">Card number as displayed on card</small>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            {{-- <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div> --}}

          <hr class="my-4">

          <button class="w-100 btn btn-warning btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
  </main>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/checkout.js"></script></body>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
    
@endsection