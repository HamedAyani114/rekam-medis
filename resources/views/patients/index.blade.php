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
        <div>
        <br>
        <h1>Patients</h1>
        <br>
            {{-- button add patiens --}}
        <a href="{{route('patient.create')}}" class="btn btn-primary">Add Patient</a>
        <table class="table" border="1">
            <tr>
                <th>Id Pasien</th>
                <th>No Bpjs</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
            </tr>
            @foreach($patients as $patient)
            <tr style="text-align: center">
                <td>{{$patient->id_pasien}}</td>
                <td>{{$patient->no_bpjs}}</td>
                <td>{{$patient->nama}}</td>
                <td>{{$patient->jenis_kelamin}}</td>
                <td>{{$patient->tgl_lahir}}</td>
                <td>{{$patient->tempat_lahir}}</td>
                <td>{{$patient->alamat}}</td>
                <td>{{$patient->no_hp}}</td>
                <td>{{$patient->berat_badan}}</td>
                <td>{{$patient->tinggi_badan}}</td>
               </tr>
            @endforeach
    
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

</div>