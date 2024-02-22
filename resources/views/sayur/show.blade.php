<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>detail Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container mt-5">

    <h1 class="text-center mb-4">Detail data</h1>

    <div class="text-end mb-4">
        <a href="{{ route('sayur.index') }}" class="btn btn-primary">ke index</a>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <table class="table table-borderless table-hover">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $sayur->nama }}</td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>{{ $sayur->harga }}</td>
                </tr>
            </table>
        </div>
    </div>

    

    

  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>