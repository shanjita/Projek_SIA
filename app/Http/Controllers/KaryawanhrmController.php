<?php

namespace App\Http\Controllers;

use App\Karyawanhrm;
use Illuminate\Http\Request;

class KaryawanhrmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawanhrms=Karyawanhrm::all();
        $data['karyawanhrm']=$karyawanhrms;
        return view('KaryawanHRM.indexkaryawanhrm', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action']='karyawanhrm.store';
        return view('KaryawanHRM.formkaryawanhrm', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $karyawanhrm= new Karyawanhrm();
        $karyawanhrm->id_karyawan=$request->id_karyawan;
        $karyawanhrm->nama=$request->nama;
        $karyawanhrm->gender=$request->gender;
        $karyawanhrm->department=$request->department;
        $karyawanhrm->jabatan=$request->jabatan;
        // $karyawanhrm->gaji=$request->gaji;
        $karyawanhrm->nohp=$request->nohp;
        $karyawanhrm->email=$request->email;

        $karyawanhrm->save();

        return redirect('karyawanhrm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karyawanhrm  $karyawanhrm
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawanhrm $karyawanhrm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karyawanhrm  $karyawanhrm
     * @return \Illuminate\Http\Response
     */
    public function edit($id_karyawan="")
    {
        $karyawanhrm=Karyawanhrm::find($id_karyawan);
        $data['karyawanhrm']=$karyawanhrm;
        $data['action']='karyawanhrm/update';
        return view('KaryawanHRM.formkaryawanhrm', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawanhrm  $karyawanhrm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $karyawanhrm =Karyawanhrm::find($request->id_karyawan);
        // $karyawanhrm->id_karyawan=$request->id_karyawan;
        $karyawanhrm->nama=$request->nama;
        $karyawanhrm->gender=$request->gender;
        $karyawanhrm->department=$request->department;
        $karyawanhrm->jabatan=$request->jabatan;
        // $karyawanhrm->gaji=$request->gaji;
        $karyawanhrm->nohp=$request->nohp;
        $karyawanhrm->email=$request->email;

        $karyawanhrm->save();

        return redirect('/karyawanhrm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawanhrm  $karyawanhrm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawanhrm $karyawanhrm)
    {
        //
    }
    public function delete($id_karyawan){
        $karyawanhrm=Karyawanhrm::find($id_karyawan);
        $karyawanhrm->delete();

        return redirect('/karyawanhrm');
    }
}
