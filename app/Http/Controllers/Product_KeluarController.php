<?php

namespace App\Http\Controllers;

use App\Product_Keluar;
use Illuminate\Http\Request;

class Product_KeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_keluars = Product_Keluar::all();
        $data['product_keluar'] = $product_keluars;
        return view('product_keluar.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'product_keluar.store';
        return view('product_keluar.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_keluar = new Product_Keluar;
        $product_keluar->categories_id = $request->categories_id;
        $product_keluar->suppliers_id = $request->suppliers_id;
        $product_keluar->jumlah = $request->jumlah;
        $product_keluar->tanggal = $request->tanggal;
        $product_keluar->save();

        return redirect('/product_keluar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product_Keluar  $product_keluar
     * @return \Illuminate\Http\Response
     */
    public function show(Product_Keluar $product_keluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product_Keluar  $product_keluar
     * @return \Illuminate\Http\Response
     */
    public function edit($id = "")
    {
        $product_keluar = Product_Keluar::find($id);
        $data['product_keluar'] = $product_keluar;
        $data['action'] = 'product_keluar/update';
        return view('product_keluar.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product_Keluar  $product_keluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $product_keluar = Product_Keluar::find($request->id);
        $product_keluar->categories_id = $request->categories_id;
        $product_keluar->suppliers_id = $request->suppliers_id;
        $product_keluar->jumlah = $request->jumlah;
        $product_keluar->tanggal = $request->tanggal;
        $product_keluar->save();
        return redirect('/product_keluar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product_Keluar  $product_keluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_Keluar $product_keluar)
    {
        //
    } 

    public function delete($id)
    {
        $product_keluar = Product_Keluar::find($id);
        $product_keluar->delete();
        return redirect('/product_keluar');
    }
}