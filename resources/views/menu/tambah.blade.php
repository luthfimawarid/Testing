<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Tambah data</title>
</head>
<body>
<form action="{{ url('/pancongs') }}" method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="no" aria-describedby="emailHelp">
  </div> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id_menu</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="id_menu" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="id_nama">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="id_harga">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="id_deskripsi">
  </div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
 -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Tambah data</title>
</head>
<body>
<form action="{{ url('/pancongs') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Id_Menu</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="id_menu">
    </div>
    <div class="mb-3 ms-2">
        <label for="exampleinputphoto" class="form-label">Photo</label>
        <input type="file" class="form-control" id="exampleinputphoto" name="photo">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="nama">
    </div>
    <div class="mb-3">
        <label for="exampleinputid" class="form-label">Harga</label>
        <input type="teks" class="form-control" id="exampleinputid" name="harga">
    </div> 
    <div class="mb-3">
        <label for="exampleinputid" class="form-label">Deskripsi</label>
        <input type="teks" class="form-control" id="exampleinputid" name="deskripsi">
    </div> 
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>






