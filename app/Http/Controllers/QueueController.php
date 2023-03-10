<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Queue;
use App\Models\Patient;
use App\Models\Poly;

class QueueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $queues = Queue::all();

        if (auth()->user()->role === 'dokter') {
            $queues = Queue::where('id_poli', auth()->user()->doctor->id_poli)->get();
        }
        // dd($queues);

        return view('queues.index', [
            'pageTitle' => 'Data Antrian',
            'queues' => $queues,
            'patients' => Patient::latest()->pluck('nama', 'id_pasien'),
            'polies' => Poly::latest()->pluck('nama_poli', 'id_poli'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'id_pasien' => ['required', 'unique:queues', 'size:5'],
            'id_poli' => ['required', 'size:5'],
        ]);
        $validatedData['status'] = 0;
        // dd($validatedData);

        Queue::create($validatedData);

        return redirect()->back()
            ->with('success', 'Data berhasil ditambahkan ke antrian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
