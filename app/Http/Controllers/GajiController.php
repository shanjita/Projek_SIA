<?php

namespace App\Http\Controllers;

use App\Gaji;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gajis=gaji::all();
        $data['gaji']=$gajis;
        return view('Gaji.indexgaji', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action']='gaji.store';
        return view('Gaji.formgaji', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gaji= new Gaji();
        $gaji->id_gaji=$request->id_gaji;
        $gaji->id_karyawan=$request->id_karyawan;
        $gaji->nama=$request->nama;
        $gaji->jabatan=$request->jabatan;
        $gaji->gaji=$request->gaji;
        $gaji->status=$request->status;

        $gaji->save();

        return redirect('gaji');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function show(Gaji $gaji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function edit($id_gaji= "")
    {
        $gaji=Gaji::find($id_gaji);
        $data['gaji']=$gaji;
        $data['action']='gaji/update';
        return view('Gaji.formgaji', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $gaji =Gaji::find($request->id_gaji);
        $gaji->id_gaji=$request->id_gaji;
        $gaji->id_karyawan=$request->id_karyawan;
        $gaji->nama=$request->nama;
        $gaji->jabatan=$request->jabatan;
        $gaji->gaji=$request->gaji;
        $gaji->status=$request->status;

        $gaji->save();

        return redirect('/gaji');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gaji $gaji)
    {
        //
    }
    public function delete($id_gaji){
        $gaji=Gaji::find($id_gaji);
        $gaji->delete();

        return redirect('/gaji');
    }
}
