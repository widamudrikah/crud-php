<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Data Buah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <div class="container text-center mt-5">
    <h1 class="text-center mb-5">Form Edit Buah</h1>


    <form action="{{ route('buah.update', $buah->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama buah</label>
        <input name="nama" value="{{ $buah->nama }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Harga Buah</label>
        <input name="harga" value="{{ $buah->harga }}" type="number" class="form-control" id="exampleInputPassword1">
      </div>

      <button type="submit" class="btn btn-warning">Simpan Data</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>