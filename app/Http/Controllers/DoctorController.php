<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\Poly;
use App\Models\Patient;
use App\Models\User;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // SELECT d.nama, p.nama_poli, d.no_hp, d.jenis_kelamin FROM doctors d INNER JOIN polies p USING(id_poli);
        $doctors = Doctor::join('polies', 'doctors.id_poli', '=', 'polies.id_poli')
            ->select('doctors.nama', 'polies.nama_poli', 'doctors.no_hp', 'doctors.jenis_kelamin')
            ->get();
        return view('doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('doctor.create');
        return view('doctor.create', [
            'pageTitle' => 'Tambah dokter',
            'doctors' => Doctor::latest()->limit(5)->pluck('nama', 'id_dokter'),
            'polies' => Poly::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required', 'max:100'],
            'email' => ['nullable', 'email:dns', 'unique:doctors', 'max:50'],
            'jenis_kelamin' => ['required'],
            'no_hp' => ['required', 'numeric', 'unique:doctors', 'max_digits:15'],
            'tgl_lahir' => ['nullable', 'date'],
            'id_poli' => ['required'],
            'tempat_lahir' => ['nullable', 'max:50'],
            'alamat' => ['nullable', 'max:255'],
            'username' => ['required', 'unique:users', 'max:255'],
            'password' => ['required', 'min:5']
        ]);

        // create doctor id
        $doctorCount = Doctor::count() + 1;
        if($doctorCount < 10) {
            $code = '00' . $doctorCount;
        }
        elseif($doctorCount < 100) {
            $code = '0' . $doctorCount;
        }else {
            $code = '';
        }

        $validatedData['id_dokter'] = 'DO' . $code;

        // create user first, and get the user id for doctor
        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'role' => 'dokter'
        ]);
        $user_id = User::where('username', $request->username)->pluck('id');
        $validatedData['id'] = $user_id[0];

        // store doctor data
        Doctor::create($validatedData);

        return redirect()->route('doctor.index')->with('success', 'Data berhasil ditambahkan');
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
