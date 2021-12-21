<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        $data['products'] = $products;
        return view('products.index', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'products.store';
        return view('products.form', $data);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Products;
        $products->nama = $request->nama;

        $products->jumlah = $request->jumlah;
        $products->categori = $request->categori;
        $products->save();
        return redirect('/products');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id="")
    {
        $products = Products::find($id);
        $data['products'] = $products;
        $data['action'] = 'products/update';
        return view('products.form', $data);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $products = products::find($request->id);
        $products->nama = $request->nama;

        $products->jumlah = $request->jumlah;
        $products->categori = $request->categori;
        $products->save();

        return redirect('/products');
        
    }
    public function delete($id){
        $products = Products::find($id);
        $products->delete();
        return redirect('/products');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}