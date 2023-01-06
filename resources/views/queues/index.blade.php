@extends('layouts.app')

@section('content')
<div class="container">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Pasien</th>
                <th>Nama Poli</th>
                <th>Status</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($queues as $queue)
            <tr>
                <td>{{ $queue->id_antrian }}</td>
                <td>{{ $queue->id_pasien }}</td>
                <td>{{ $queue->id_poli }}</td>
                <td>{{ $queue->status }}</td>
                <td>
                    {{-- <a href="{{ route('queues.show', $queue->name) }}" class="btn btn-primary">Show</a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
