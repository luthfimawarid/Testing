@extends('admin.dashboard.main')

@section('content')

<table class="table table-warning table-striped">
  <h3>Menu 2 Rasa</h3>
  <thead>
    <tr>
      <th scope="col">id_menu</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Foto</th>
      <th scope="col">Edit</th>
      <th scope="col">Hapus</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pancong2 as $pcg2)
    <tr>
      <td>{{ $loop->index+1 }}</td>
      <td>{{ $pcg2->nama }}</td>
      <td>{{ $pcg2->harga }}</td>
      <td>{{ $pcg2->deskripsi }}</td>
      <td><img src="{{ asset($pcg2->foto) }}" alt="foto" style="max-width: 100px;"></td>
      <td><a href="{{ url ('pancongs2/'.$pcg2->id_menu. '/edit')}}" class="btn btn-primary">EDIT</a></td>
      <td>
        <form action="{{ url ('pancongs2/'.$pcg2->id_menu)}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">HAPUS</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


<a href="pancongs2/create" class="btn btn-outline-dark" >TAMBAH</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@endsection

