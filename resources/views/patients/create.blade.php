<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    @include('layouts.partials.navbar')

    @include('layouts.partials.sidebar')
    <div class="container">

        <div class="row">
            <div class="col-6">
                <form action="{{route('patient.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Id Pasien</label>
                        <input type="text" class="form-control" name="id_pasien" id="" placeholder="Id Pasien">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">nama</label>
                        <input type="text" class="form-control" name="nama" id="" placeholder="nama">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">no bpjs</label>
                        <input type="text" class="form-control" name="no_bpjs" id="" placeholder="no bpjs">
                    </div>
                    <div class="mb-3">
                    <select name="jenis kelamin" id="jenis kelamin">
                        <option value="pria">Pria</option>
                        <option value="wanita">wanita</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" id="" placeholder="Tanggal lahir">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tempat lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="" placeholder="Tempat lahir">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="" placeholder="Alamat">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">No HP</label>
                    <input type="text" class="form-control" name="no_hp" id="" placeholder="No HP">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Berat badan</label>
                    <input type="text" class="form-control" name="berat_badan" id="" placeholder="Berat badan">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tinggi badan</label>
                    <input type="text" class="form-control" name="tinggi badan" id="" placeholder="Tinggi badan">
                  </div>
                  <button class="btn btn-primary" type="submit">Submit</button>
                  
                  
                </form>
            </div>
        </div>
    </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
    </html>