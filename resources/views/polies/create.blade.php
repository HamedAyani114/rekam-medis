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
    @include('template.navbar')
    <div class="container">

        <div class="row">
            <div class="col-6">
                <form action="{{route('polies.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Id Poli</label>
                        <input type="text" class="form-control" name="id_poli" id="" placeholder="Id Poli">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Poli</label>
                        <input type="text" class="form-control" name="nama_poli" id="" placeholder="Nama Poli">
                    </div>
                    
                  <button type="submit">Submit</button>
                  
                  
                </form>
            </div>
        </div>
    </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
    </html>