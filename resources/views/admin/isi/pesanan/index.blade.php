@extends('admin.dashboard.main')

@section('content')

<table class="table table-warning table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Pesanan</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Total</th>
      <th scope="col">Edit</th>
      <th scope="col">Hapus</th>
    </tr>
  </thead>
  <tbody>
    @foreach($admin as $adm)
    <tr>
      <td>{{ $loop->index+1 }}</td>
      <td>{{ $adm->nama }}</td>
      <td>{{ $adm->pesanan }}</td>
      <td>{{ $adm->harga }}</td>
      <td>{{ $adm->jumlah }}</td>
      <td>{{ $adm->total }}</td>
      <td><a href="{{ url ('admins/'.$adm->id. '/edit')}}" class="btn btn-primary">EDIT</a></td>
      <td>
        <form action="{{ url ('admins/'.$adm->id)}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">HAPUS</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="admins/create" class="btn btn-outline-dark">TAMBAH</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
@endsection
