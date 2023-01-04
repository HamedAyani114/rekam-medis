@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-6">
                <form action="{{route('poli.store')}}" method="post">
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
    @endsection
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
    </html>