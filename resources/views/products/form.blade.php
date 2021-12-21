@extends('master')
@section('judul', 'Form Products')
@section('content')
<form role="form" action="{{($action!='products.store') ? url($action): route($action) }}" method="POST">
{{ csrf_field()}}
<input type="hidden" name=id value="{{($action!='products.store') ? $products->id:''}}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Produk</label>
                    <input type="text" class="form-control" name="nama" value="{{($action!='products.store') ? $products->nama:''}}" placeholder="ex: aqua">
                  </div>
                  <!--<div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="text" class="form-control" name="harga" value="{{($action!='products.store') ? $products->harga:''}}" placeholder="ex: 5000">
                  </div>-->
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" value="{{($action!='products.store') ? $products->jumlah:''}}" placeholder="ex: 5 pcs">
                  </div>      
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Kategori</label>
                    <input type="text" class="form-control" name="categori" value="{{($action!='products.store') ? $products->categori:''}}" placeholder="ex: minuman">
                  </div>               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <input type="submit" class="btn btn-success" value="{{($action!='products.store') ? 'Update' : 'Simpan'}}"><br>
                </div>
              </form>

@endsection