<?php

namespace App\Http\Controllers;

use App\Product_Masuk;
use Illuminate\Http\Request;

class Product_MasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_masuks = Product_Masuk::all();
        $data['product_masuk'] = $product_masuks;
        return view('product_masuk.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'product_masuk.store';
        return view('product_masuk.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_masuk = new Product_Masuk;
        $product_masuk->categories_id = $request->categories_id;
        $product_masuk->suppliers_id = $request->suppliers_id;
        $product_masuk->jumlah = $request->jumlah;
        $product_masuk->tanggal = $request->tanggal;
        $product_masuk->save();

        return redirect('/product_masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product_Masuk  $product_masuk
     * @return \Illuminate\Http\Response
     */
    public function show(Product_Masuk $product_masuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product_Masuk  $product_masuk
     * @return \Illuminate\Http\Response
     */
    public function edit($id = "")
    {
        $product_masuk = Product_Masuk::find($id);
        $data['product_masuk'] = $product_masuk;
        $data['action'] = 'product_masuk/update';
        return view('product_masuk.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product_Masuk  $product_masuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $product_masuk = Product_Masuk::find($request->id);
        $product_masuk->categories_id = $request->categories_id;
        $product_masuk->suppliers_id = $request->suppliers_id;
        $product_masuk->jumlah = $request->jumlah;
        $product_masuk->tanggal = $request->tanggal;
        $product_masuk->save();
        return redirect('/product_masuk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product_Masuk  $product_masuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_Masuk $product_masuk)
    {
        //
    } 

    public function delete($id)
    {
        $product_masuk = Product_Masuk::find($id);
        $product_masuk->delete();
        return redirect('/product_masuk');
    }
}