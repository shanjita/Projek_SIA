@extends('master')
@section('judul', 'Form Product Masuk')
@section('content')
<form role="form" action="{{($action!='product_masuk.store') ? url($action): route($action) }}" method="POST">
{{ csrf_field()}}
<input type="hidden" name=id value="{{($action!='product_masuk.store') ? $product_masuk->id:''}}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Kategori</label>
                    <input type="text" class="form-control" name="categories_id" value="{{($action!='product_masuk.store') ? $product_masuk->categories_id:''}}" placeholder="ex: 1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Id Pemasok</label>
                    <input type="text" class="form-control" name="suppliers_id" value="{{($action!='product_masuk.store') ? $product_masuk->suppliers_id:''}}" placeholder="ex: 5">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" value="{{($action!='product_masuk.store') ? $product_masuk->jumlah:''}}" placeholder="ex: 5 pcs">
                  </div>      
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Tanggal</label>
                    <input type="text" class="form-control" name="tanggal" value="{{($action!='product_masuk.store') ? $product_masuk->tanggal:''}}" placeholder="ex: 2021/17/01">
                  </div>               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <input type="submit" class="btn btn-success" value="{{($action!='product_masuk.store') ? 'Update' : 'Simpan'}}"><br>
                </div>
              </form>

@endsection