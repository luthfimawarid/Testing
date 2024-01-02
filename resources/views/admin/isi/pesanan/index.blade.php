@extends('admin.dashboard.main')

@section('content')

<table class="table table-warning table-striped">
  <thead>
    <tr>
      <th scope="col">Id_pesanan</th>
      <th scope="col">Username</th>
      <th scope="col">Nama_menu</th>
      <th scope="col">Kematangan</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datapesanan as $adm)
    <tr>
      <td>{{ $adm->id_pesanan }}</td>
      <td>{{ $adm->username }}</td>
      <td>{{ $adm->nama_menu }}</td>
      <td>{{ $adm->kematangan }}</td>
      <td>{{ $adm->harga_produk }}</td>
      <td>{{ $adm->kuantitas }}</td>
      <td>{{ $adm->status }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{-- <a href="admins/create" class="btn btn-outline-dark">TAMBAH</a> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
@endsection
