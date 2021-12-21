<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        $data['supplier'] = $suppliers;
        return view ('supplier.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'supplier.store';
        return view ('supplier.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = new Supplier;
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->lokasi = $request->lokasi;
        $supplier->nomor_telp = $request->nomor_telp;
        $supplier->barang_supplier = $request->barang_supplier;
        $supplier->email = $request->email;
        $supplier->save();
        return redirect('/supplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id ="")
    {
        $supplier = Supplier::find($id);
        $data['supplier'] = $supplier;
        $data['action'] = 'supplier/update';
        return view('supplier.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $supplier = Supplier::find($request->id);
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->lokasi = $request->lokasi;
        $supplier->nomor_telp = $request->nomor_telp;
        $supplier->barang_supplier = $request->barang_supplier;
        $supplier->email = $request->email;
        $supplier->save();
        return redirect('/supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
    }

    public function delete($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect('/supplier');
    }
}