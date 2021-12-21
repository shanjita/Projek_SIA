<?php

namespace App\Http\Controllers;

use App\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensis=Absensi::all();
        $data['absensi']=$absensis;
        return view('Absensi.indexabsen', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action']='absensi.store';
        return view('Absensi.formabsen', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $absensi= new Absensi();
        $absensi->id_absensi=$request->id_absensi;
        $absensi->id_karyawan=$request->id_karyawan;
        $absensi->nama=$request->nama;
        $absensi->department=$request->department;
        $absensi->jabatan=$request->jabatan;
        $absensi->tanggal=$request->tanggal;
        $absensi->absensi=$request->absensi;


        $absensi->save();

        return redirect('absensi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit($id_absensi= "")
    {
        $absensi=Absensi::find($id_absensi);
        $data['absensi']=$absensi;
        $data['action']='absensi/update';
        return view('Absensi.formabsen', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $absensi =Absensi::find($request->id_absensi);
        $absensi->id_absensi=$request->id_absensi;
        $absensi->id_karyawan=$request->id_karyawan;
        $absensi->nama=$request->nama;
        $absensi->department=$request->department;
        $absensi->jabatan=$request->jabatan;
        $absensi->tanggal=$request->tanggal;
        $absensi->absensi=$request->absensi;

        $absensi->save();

        return redirect('/absensi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        //
    }
    public function delete($id_absensi){
        $absensi=Absensi::find($id_absensi);
        $absensi->delete();

        return redirect('/absensi');
    }
}
