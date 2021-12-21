@extends('master')
@section('judul', 'Form Customer')
@section('content')
<form role="form" action="{{($action!='customer.store') ? url($action): route($action) }}" method="POST">
{{ csrf_field()}}
<input type="hidden" name=id value="{{($action!='customer.store') ? $customer->id:''}}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama customer</label>
                    <input type="text" class="form-control" name="nama_customer" value="{{($action!='customer.store') ? $customer->nama_customer:''}}" placeholder="ex: Arvand Adriatna">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{($action!='customer.store') ? $customer->alamat:''}}" placeholder="ex: Jl.Kartika indah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kontak</label>
                    <input type="text" class="form-control" name="kontak" value="{{($action!='customer.store') ? $customer->kontak:''}}" placeholder="ex: 08....">
                  </div>                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <input type="submit" class="btn btn-success" value="{{($action!='customer.store') ? 'Update' : 'Simpan'}}"><br>
                </div>
              </form>

@endsection