@extends('master')
@section('judul', 'Data Transaksi')
@section('content')
<form role="form" action="{{($action!='transaksi.store') ? url($action):  route($action)  }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name=id value="{{($action!='transaksi.store') ? $transaksi->id : '' }}">
                <div class="card-body">                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" class="form-control" placeholder="ex : Buavita"
                    name="nama_barang" value="{{ ($action!='transaksi.store') ? $transaksi->nama_barang : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="">Harga Barang</label>
                    <input type="text" class="form-control" placeholder="ex : Rp. 5000"
                    name="harga_barang" value="{{ ($action!='transaksi.store') ? $transaksi->harga_barang : '' }}">
                  </div>   
                  <div class="form-group">
                    <label for="">Jumlah Barang</label>
                    <input type="text" class="form-control" placeholder="ex : 1"
                    name="jumlah_barang" value="{{ ($action!='transaksi.store') ? $transaksi->jumlah_barang : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="">Nama Supplier</label>
                    <input type="text" class="form-control" placeholder="ex : Indah"
                    name="nama_supplier" value="{{ ($action!='transaksi.store') ? $transaksi->nama_supplier : '' }}">
                  </div>      
                  <div class="form-group">
                    <label for="">Pembayaran</label>
                    <input type="text" class="form-control" placeholder="ex : Cash"
                    name="pembayaran" value="{{ ($action!='transaksi.store') ? $transaksi->pembayaran : '' }}">
                  </div>                
                </div>
                <div class="card-footer">
                <input type="submit" class="btn btn-success" value="{{ ($action!='transaksi.store') ? 'Update' : 'Update' }}">        
                </div>
              </form>

              @endsection