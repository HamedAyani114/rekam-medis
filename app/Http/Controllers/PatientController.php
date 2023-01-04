<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('patients.create');
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
        // $datapasien=new Patient;
        // // create patients id
        //  $patientsCount = Patient::count() + 1;
        //  if ($patientsCount < 10) {
        //      $code = '00' . $patientsCount;
        //  } elseif ($patientsCount < 100) {
        //      $code = '0' . $patientsCount;
        //  } else {
        //      $code = '';
        //  }
 
        //  $datapasien->id_pasien = 'PA' . $code;
        // // $datapasien->id_pasien=$request->id_pasien;
        // $datapasien->no_bpjs=$request->no_bpjs;
        // $datapasien->nama=$request->nama;
        // $datapasien->jenis_kelamin=$request->jenis_kelamin;
        // $datapasien->tgl_lahir=$request->tgl_lahir;
        // $datapasien->tempat_lahir=$request->tempat_lahir;
        // $datapasien->alamat=$request->alamat;
        // $datapasien->no_hp=$request->no_hp;
        // $datapasien->berat_badan=$request->berat_badan;
        // $datapasien->tinggi_badan=$request->tinggi_badan;
        // // dd($datapasien);
        // $datapasien->save();
        // return redirect()->route('patient.index')->with('success', 'Data Pasien Berhasil Ditambahkan');


        $validatedData=$request->validate([
            'no_bpjs' => '',
            'nama' => 'required|max:100',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'tempat_lahir' => 'required|max:50',
            'alamat' => 'required|max:255',
            'no_hp' => 'required|min:8|max:13',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
        ]);
         // create patients id
         $patientsCount = Patient::count() + 1;
         if ($patientsCount < 10) {
             $code = '00' . $patientsCount;
         } elseif ($patientsCount < 100) {
             $code = '0' . $patientsCount;
         } else {
             $code = '';
         }
 
         $validatedData['id_pasien'] = 'PA' . $code;
        
        // dd($validatedData);
        Patient::create($validatedData);
        return redirect()->route('patient.index')->with('success', 'Patient created successfully.');
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
