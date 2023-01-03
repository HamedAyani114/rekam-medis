<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RS</title>
    <link rel="stylesheet" href="../css/mod67.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    {{-- navbar --}}
    @include('template.navbar')
    {{-- end --}}
    <div class="row ms-1 p-3">
        <div class="col-sm-6">
            <h2>Rekam Medis</h2>
        </div>
    </div>

    {{-- Table --}}
    {{-- <div class="row ms-1 p-3">
        @foreach ($kirim as $post)
        <div class="col-sm-6 p-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$post->nama}}</h5>
                    <p class="card-text">{{$post->nim}}</p>
                    <p class="card-text">{{$post->alamat}}</p>
                    <p class="card-text">{{$post->email}}</p>
                    <a href="{{url('mahasiswa/'.$post->id.'/edit')}}" class="btn btn-primary">update</a>
                    <form action="{{url('mahasiswa/'.$post->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger form-check-inline" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach --}}

        {{-- <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">update</a>
              <a href="#" class="btn btn-primary">delete</a>
            </div>
          </div>
        </div> --}}
      </div>
    {{-- end Table --}}



    
    {{-- footer --}}
    <footer>
        @include('template.footer')
    </footer>
    {{--end footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>