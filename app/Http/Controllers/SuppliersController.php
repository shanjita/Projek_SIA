<?php

namespace App\Http\Controllers;

use App\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplierss = Suppliers::all();
        $data['suppliers'] = $supplierss;
        return view('suppliers.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'suppliers.store';
        return view('suppliers.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suppliers = new Suppliers;
        $suppliers->id = $request->id;
        $suppliers->nama = $request->nama;
        $suppliers->alamat = $request->alamat;
        $suppliers->email = $request->email;
        $suppliers->telepon = $request->telepon;
        $suppliers->save();

        return redirect('/suppliers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function show(Suppliers $suppliers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function edit($id = "")
    {
        $suppliers = Suppliers::find($id);
        $data['suppliers'] = $suppliers;
        $data['action'] = 'suppliers/update';
        return view('suppliers.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $suppliers = Suppliers::find($request->id);
        $suppliers->id = $request->id;
        $suppliers->nama = $request->nama;
        $suppliers->alamat = $request->alamat;
        $suppliers->email = $request->email;
        $suppliers->telepon = $request->telepon;
        $suppliers->save();
        return redirect('/suppliers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suppliers $suppliers)
    {
        //
    } 

    public function delete($id)
    {
        $suppliers = Suppliers::find($id);
        $suppliers->delete();
        return redirect('/suppliers');
    }
}