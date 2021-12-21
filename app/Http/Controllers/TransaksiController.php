<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        $data['transaksi'] = $transaksis;
        return view ('transaksi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'transaksi.store';
        return view ('transaksi.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = new Transaksi;
        $transaksi->nama_barang = $request->nama_barang;
        $transaksi->harga_barang = $request->harga_barang;
        $transaksi->jumlah_barang = $request->jumlah_barang;
        $transaksi->nama_supplier = $request->nama_supplier;
        $transaksi->pembayaran = $request->pembayaran;
        $transaksi->save();
        return redirect('/transaksi');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id ="")
    {
        $transaksi = Transaksi::find($id);
        $data['transaksi'] = $transaksi;
        $data['action'] = 'transaksi/update';
        return view('transaksi.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $transaksi = Transaksi::find($request->id);
        $transaksi->nama_barang = $request->nama_barang;
        $transaksi->harga_barang = $request->harga_barang;
        $transaksi->jumlah_barang = $request->jumlah_barang;
        $transaksi->nama_supplier = $request->nama_supplier;
        $transaksi->pembayaran = $request->pembayaran;
        $transaksi->save();
        return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }

public function delete($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect('/transaksi');
    }
}