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
        
        <table class="table" border="1">
            <tr>
                <th>Id Poli</th>
                <th>Nama Poli</th>
                
            </tr>
            @foreach($polies as $poli)
            <tr style="text-align: center">
                <td>{{$poli->id_poli}}</td>
                <td>{{$poli->no_bpjs}}</td>
                
               </tr>
            @endforeach
    
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

</div>