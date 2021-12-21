<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', function () {
    return view('beranda');
});

Route::resource('products', 'ProductsController');
Route::get('products/delete/{id}', 'ProductsController@delete');
Route::post('products/update', 'ProductsController@update');

Route::resource('categories', 'CategoriesController');
Route::get('categories/delete/{id}', 'CategoriesController@delete');
Route::post('categories/update', 'CategoriesController@update');

Route::resource('suppliers', 'SuppliersController');
Route::get('suppliers/delete/{id}', 'SuppliersController@delete');
Route::post('suppliers/update', 'SuppliersController@update');

Route::resource('product_masuk', 'Product_MasukController');
Route::get('product_masuk/delete/{id}', 'Product_MasukController@delete');
Route::post('product_masuk/update', 'Product_MasukController@update');

Route::resource('product_keluar', 'Product_KeluarController');
Route::get('product_keluar/delete/{id}', 'Product_KeluarController@delete');
Route::post('product_keluar/update', 'Product_KeluarController@update');

Route::resource('transaksi', 'TransaksiController');
Route::get('transaksi/delete/{id}', 'TransaksiController@delete');
Route::post('transaksi/update', 'TransaksiController@update');

Route::resource('supplier', 'SupplierController');
Route::get('supplier/delete/{id}', 'SupplierController@delete');
Route::post('supplier/update', 'SupplierController@update');

Route::resource('absensi', 'absensiController');
Route::get('absensi/delete/{id}', 'absensiController@delete');
Route::post('absensi/update', 'absensiController@update');

Route::resource('karyawanhrm', 'karyawanhrmController');
Route::get('karyawanhrm/delete/{id}', 'karyawanhrmController@delete');
Route::post('karyawanhrm/update', 'karyawanhrmController@update');

Route::resource('gaji', 'gajiController');
Route::get('gaji/delete/{id}', 'gajiController@delete');
Route::post('gaji/update', 'gajiController@update');

Route::resource('cuti', 'cutiController');
Route::get('cuti/delete/{id}', 'cutiController@delete');
Route::post('cuti/update', 'cutiController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
