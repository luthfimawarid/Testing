@extends('admin.dashboard.main')

@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/hipesadmin.css')}}">
@endsection
@section('content')

    
<h2>Riwayat Pesanan</h2>

<table class="table table-warning table-striped">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama Pelanggan</th>
        <th scope="col">Tanggal Pesanan</th>
        <th scope="col">Total Harga</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    {{-- <tbody>
      @foreach($admin as $adm)
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $adm->nama }}</td>
        <td>{{ $adm->pesanan }}</td>
        <td>{{ $adm->harga }}</td>
        <td>{{ $adm->jumlah }}</td>
        <td>{{ $adm->total }}</td>
        <td><input type="checkbox" class="konfirm"></td>
      </tr>
      @endforeach
    </tbody> --}}
  </table>
    <!-- Data dari database atau sumber lainnya -->

</body>
</html>

@endsection