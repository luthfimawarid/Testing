@extends('pamer.main1')
{{-- @section('title', $title) --}}
@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/pancong.css')}}">
@endsection
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> 
    <div class="deskripsi">
      @foreach ($pancong as $pcg)
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
                    <button class="outline-btn">Matang</button>
                    <button class="outline-btn">Setengah Matang</button>
                </div>
            </div>
        </div>
      @endforeach
    </div>
    <div class="bungkus4">
      <a href="/user" class="back">Kembali</a>
    </div>

    <!-- Modal -->
   <!-- Add this modal structure at the end of your HTML body -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class=" modal-content">
      <div class="potop modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pilih Topping</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pobo modal-body">
    <!-- Add your topping options here -->
    <div class="topping-option">
        <label><input type="checkbox" value="Oreo"> Oreo</label>
    </div>
    <div class="topping-option">
        <label><input type="checkbox" value="Milo"> Milo</label>
    </div>
    <div class="topping-option">
        <label><input type="checkbox" value="Keju"> Keju</label>
    </div>
    <div class="topping-option">
        <label><input type="checkbox" value="Susu"> Susu</label>
    </div>
    <div class="topping-option">
      <label><input type="checkbox" value="Red Velvet"> Red Velvet</label>
    </div>
    <div class="topping-option">
        <label><input type="checkbox" value="Kacang Almond"> Kacang Almond</label>
    </div>
    <div class="topping-option">
        <label><input type="checkbox" value="Meises"> Meises</label>
    </div>
    <div class="topping-option">
        <label><input type="checkbox" value="Choco Chips"> Choco Chips</label>
    </div>
    <!-- Add more topping options as needed -->
</div>

      <div class="potop modal-footer">
        <a href="/deskripsimenu" type="button" class="btn btn-primary" onclick="tambahKeKeranjang()">Kembali</a>
        {{-- <a href="/keranjang" type="button" class="btn btn-primary" onclick="tambahKeKeranjang()">Setengah Matang</a> --}}
      </div>
    </div>
  </div>
</div>

    <script src="js/script.js"></script>
<!-- Add these scripts before your custom script -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  function showToppingModal() {
    $('#myModal').modal('show');
  }

  function tambahKeKeranjang() {
    var selectedToppings = [];
    $('.topping-option input:checked').each(function() {
      selectedToppings.push($(this).val());
    });

    console.log('Selected Toppings:', selectedToppings);

    $('#myModal').modal('hide');
  }
</script>


@endsection

