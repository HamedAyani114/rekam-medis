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
        <div>
        <br>
        <h1>Doctor</h1>
        <br>
            {{-- button add patiens --}}
        <a href="{{route('doctor.create')}}" class="btn btn-primary">Add Doctor</a>
        <table class="table" border="1">
            <tr>
                <th>Id doctor</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>No HP</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Photo</th>
            </tr>
            @foreach($doctors as $doctor)
            <tr style="text-align: center">
                <td>{{$doctor->id_dokter}}</td>
                <td>{{$doctor->nama}}</td>
                <td>{{$doctor->email}}</td>
                <td>{{$doctor->jenis_kelamin}}</td>
                <td>{{$doctor->no_hp}}</td>
                <td>{{$doctor->alamat}}</td>
                <td>{{$doctor->tgl_lahir}}</td>
                <td>{{$doctor->tempat_lahir}}</td>
                <td>{{$doctor->photo}}</td>
               </tr>
            @endforeach
    
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

</div>