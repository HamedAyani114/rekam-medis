@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
        <br>
        <h1>Patients</h1>
        <br>
            {{-- button add patiens --}}
            <a href="{{route('poli.create')}}" class="btn btn-primary">add data</a>
        
        <table class="table" border="1">
            <tr>
                <th>Id Poli</th>
                <th>Nama Poli</th>
                
            </tr>
            @foreach($polies as $poli)
            <tr style="text-align: center">
                <td>{{$poli->id_poli}}</td>
                <td>{{$poli->nama_poli}}</td>
                
               </tr>
            @endforeach
    
        </table>
    </div>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

</div>