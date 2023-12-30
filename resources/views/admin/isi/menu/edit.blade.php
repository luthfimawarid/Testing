<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Edit data</title>
</head>
<body>
<form action="{{ url('pancongs/'.$pancong->id_menu) }}" method="post">
    @method('PATCH')
    @csrf
    <div class="mb-3">
        <label for="exampleinputid" class="form-label">Id</label>
        <input type="text" class="form-control" id="exampleinputid" name="id" value="{{ $pancong->id_menu }}">
    </div> 
    <div class="mb-3">
        <label for="exampleinputnama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleinputnama" name="nama" value="{{ $pancong->nama }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputharga" class="form-label">Harga</label>
        <input type="text" class="form-control" id="exampleInputharga" name="harga" value="{{ $pancong->harga }}">
    </div>
    <div class="mb-3">
        <label for="exampleinputdeskripsi" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="exampleinputdeskripsi" name="deskripsi" value="{{ $pancong->deskripsi }}">
    </div> 
    <div class="mb-3">
        <label for="exampleinputfoto" class="form-label">Foto</label>
        <input type="file" class="form-control" id="exampleinputfoto" name="foto" value="{{ $pancong->foto }}">
    </div>
    {{-- <div class="mb-3">
        <label for="exampleInputtotal" class="form-label">Password</label>
        <input type="text" class="form-control" id="exampleInputtotal" name="total" value="{{ $pancong->total }}">
    </div> --}}
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>



