@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Data Pasien</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('patient.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="no_bpjs">No BPJS <small>(Optional)</small></label>
                        <input type="number" class="form-control @error('no_bpjs') is-invalid @enderror" id="no_bpjs"
                            placeholder="No BPJS" name="no_bpjs" value="{{ old('no_bpjs') }}">
                        @error('no_bpjs')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            placeholder="Nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin"
                            name="jenis_kelamin">
                            <option value="">Pilih jenis kelamin</option>
                            <option value="pria" {{ old('jenis_kelamin') == 'pria' ? 'selected' : '' }}>Pria</option>
                            <option value="wanita" {{ old('jenis_kelamin') == 'wanita' ? 'selected' : '' }}>Wanita
                            </option>
                        </select>
                        @error('jenis_kelamin')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir"
                            name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                        @error('tgl_lahir')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                            id="tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir"
                            value="{{ old('tempat_lahir') }}">
                        @error('tempat_lahir')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Hp</label>
                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp"
                            placeholder="No Hp" name="no_hp" value="{{ old('no_hp') }}">
                        @error('no_hp')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror"
                            rows="3" placeholder="Alamat" name="alamat">{{ old('alamat') }}</textarea>
                        @error('alamat')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="berat_badan">Berat Badan (kg)</label>
                                <input type="number" class="form-control @error('berat_badan') is-invalid @enderror"
                                    id="berat_badan" placeholder="Berat Badan" name="berat_badan">
                                @error('berat_badan')
                                <p class="invalid-feedback">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="tinggi_badan">Tinggi Badan (cm)</label>
                                <input type="number" class="form-control @error('tinggi_badan') is-invalid @enderror"
                                    id="tinggi_badan" placeholder="Tinggi Badan" name="tinggi_badan">
                                @error('tinggi_badan')
                                <p class="invalid-feedback">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>

    {{-- <div class="col-md-4">
        <div class="card collapsed-card">
            <div class="card-header">
                <h3 class="card-title">Terakhir Ditambah</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th>Nama</th>
                            <th style="width: 40px">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $id => $patient)
                            <tr>
                                <td>{{ $id }}</td>
                                <td>{{ $patient }}</td>
                                <td>
                                    <a href="{{ route('pasien.show', $id) }}"><span class="badge bg-info">Detail</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div> --}}
</div>
@endsection


{{-- <!DOCTYPE html>
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
</html> --}}