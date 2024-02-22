<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Buah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="container mt-5">
    <h1 class="mb-4">List Buah-Buahan</h1>
    @foreach($buah as $row)
        <div class="card  mb-3">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <span>{{ $row->nama }}</span>
                <div>
                  <a href="{{ route('buah.show', $row->id) }}" class="btn btn-success">
                  <i class="fa-solid fa-eye"></i>
                  </a>
                  <a href="{{ route('buah.edit', $row->id) }}" class="btn btn-primary">
                  <i class="fa-solid fa-pen"></i>
                  </a>
                  <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$row->id}}">
                  <i class="fa-solid fa-trash-can"></i>
                  </a>
                </div>
              </div>
            </div>
        </div>


<!-- Modal -->
<div class="modal fade" id="delete{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Yakin mau hapus data <strong style="color: red;">{{ $row->nama }}</strong> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="{{ route('buah.destroy', $row->id) }}" class="btn btn-danger">
        Delete
        </a>
      </div>
    </div>
  </div>
</div>
    @endforeach
        <a href="{{ route('buah.tambah') }}" class="btn btn-warning">Tambah Data</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>