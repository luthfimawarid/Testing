@extends('admin.dashboard.main')

@section('content')

<table class="table table-warning table-striped">
  <thead>
    <h3>Data Customer</h3>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Username</th>
        {{-- <th scope="col">Password</th> --}}
        <th scope="col">Alamat</th>
        <th scope="col">Email</th>
        <th scope="col">Nomor_Tlp</th>
        {{-- <th scope="col">Edit</th> --}}
        <th scope="col">Hapus</th>
    </tr>
</thead>
<tbody>
    @foreach($customer as $user)
    <tr>
      <td>{{ $loop->index+1 }}</td>
        <td>{{ $user->name }}</td>
        {{-- <td>{{ $user->password }}</td> --}}
        <td>{{ $user->alamat }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->nomor_tlp }}</td>
        {{-- <td><a href="{{ url ('customer/'.$customer->id. '/edit')}}" class="btn btn-primary">EDIT</a></td> --}}
        <td>
            <form action="{{ url ('customers/'.$user->id)}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">HAPUS</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
{{-- <a href="customer/create" class="btn btn-success">TAMBAH</a> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@endsection