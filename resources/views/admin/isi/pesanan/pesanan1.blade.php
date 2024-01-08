<!-- resources/views/admin/dashboard/main.blade.php -->
@extends('admin.dashboard.main')

@section('content')

<h1 class="border-bottom border-2 border-dark-subtle">Data Pesanan 1 Rasa</h1>
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
      <th scope="col">Aksi</th> <!-- Kolom tambahan untuk tombol konfirmasi -->
    </tr>
  </thead>
  <tbody>
    @foreach($datapesanan1 as $adm)
    <tr>
      <td>{{ $adm->id_pesanan }}</td>
      <td>{{ $adm->username }}</td>
      <td>{{ $adm->nama_menu }}</td>
      <td>{{ $adm->kematangan }}</td>
      <td>{{ $adm->harga_produk }}</td>
      <td>{{ $adm->kuantitas }}</td>
      <td>{{ $adm->status }}</td>
      <td>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#konfirmasiModal{{ $adm->id_pesanan }}">
          Konfirmasi
        </button>
      </td>
    </tr>

    <!-- Modal Konfirmasi -->
    <div class="modal fade" id="konfirmasiModal{{ $adm->id_pesanan }}" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="konfirmasiModalLabel">Konfirmasi Pesanan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Apakah Anda yakin ingin mengkonfirmasi pesanan ini?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <a href="{{ route('admin.konfirmasiPesanan', ['id_pesanan' => $adm->id_pesanan]) }}" class="btn btn-primary">Konfirmasi</a>
          </div>
        </div>
      </div>
    </div>

    @endforeach
  </tbody>
</table>

<h1 class="border-bottom border-2 border-dark-subtle">Data Pesanan 2 Rasa</h1>
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
      <th scope="col">Aksi</th> <!-- Kolom tambahan untuk tombol konfirmasi -->
    </tr>
  </thead>
  <tbody>
    @foreach($datapesanan2 as $adm)
    <tr>
      <td>{{ $adm->id_pesanan }}</td>
      <td>{{ $adm->username }}</td>
      <td>{{ $adm->nama_menu }}</td>
      <td>{{ $adm->kematangan }}</td>
      <td>{{ $adm->harga_produk }}</td>
      <td>{{ $adm->kuantitas }}</td>
      <td>{{ $adm->status }}</td>
      <td>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#konfirmasiModal{{ $adm->id_pesanan }}">
          Konfirmasi
        </button>
      </td>
    </tr>

    <!-- Modal Konfirmasi -->
    <div class="modal fade" id="konfirmasiModal{{ $adm->id_pesanan }}" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="konfirmasiModalLabel">Konfirmasi Pesanan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Apakah Anda yakin ingin mengkonfirmasi pesanan ini?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <a href="{{ route('admin.konfirmasiPesanan', ['id_pesanan' => $adm->id_pesanan]) }}" class="btn btn-primary">Konfirmasi</a>
          </div>
        </div>
      </div>
    </div>

    @endforeach
  </tbody>
</table>

<h1 class="border-bottom border-2 border-dark-subtle">Data Pesanan 3 Rasa</h1>
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
      <th scope="col">Aksi</th> <!-- Kolom tambahan untuk tombol konfirmasi -->
    </tr>
  </thead>
  <tbody>
    @foreach($datapesanan3 as $adm)
    <tr>
      <td>{{ $adm->id_pesanan }}</td>
      <td>{{ $adm->username }}</td>
      <td>{{ $adm->nama_menu }}</td>
      <td>{{ $adm->kematangan }}</td>
      <td>{{ $adm->harga_produk }}</td>
      <td>{{ $adm->kuantitas }}</td>
      <td>{{ $adm->status }}</td>
      <td>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#konfirmasiModal{{ $adm->id_pesanan }}">
          Konfirmasi
        </button>
      </td>
    </tr>

    <!-- Modal Konfirmasi -->
    <div class="modal fade" id="konfirmasiModal{{ $adm->id_pesanan }}" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="konfirmasiModalLabel">Konfirmasi Pesanan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Apakah Anda yakin ingin mengkonfirmasi pesanan ini?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <a href="{{ route('admin.konfirmasiPesanan', ['id_pesanan' => $adm->id_pesanan]) }}" class="btn btn-primary">Konfirmasi</a>
          </div>
        </div>
      </div>
    </div>

    @endforeach
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@endsection
