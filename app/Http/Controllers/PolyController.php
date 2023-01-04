<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poly;

class PolyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $polies=Poly::all();
        return view('polies.index', compact('polies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('polies.create');
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
        // $datapoli=new Poly();
        // $datapoli->id_poli=$request->id_poli;
        // $datapoli->nama_poli=$request->nama_poli;
        // $datapoli->save();

        $validatedData=$request->validate([
            // 'id_poli' => 'required',
            'nama_poli' => 'required',
        ]);
        $polyCount=Poly::count()+1;
        if($polyCount<10){
            $code='0'.$polyCount;
        }else{
            $code=''.$polyCount;
        }
        $validatedData['id_poli']='POL'.$code;
        Poly::create($validatedData);
        return redirect()->route('poli.index')->with('success', 'Data Poli Berhasil Ditambahkan');
        
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
