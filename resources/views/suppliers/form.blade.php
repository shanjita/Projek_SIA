@extends('master')
@section('judul', 'Data Suppliers')
@section('content')
<form role="form" action="{{($action!='suppliers.store') ? url($action):  route($action)  }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name=id value="{{($action!='suppliers.store') ? $suppliers->id : '' }}">
                <div class="card-body">                
                
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" placeholder="ex : Tepung Terigu"
                    name="nama" value="{{ ($action!='suppliers.store') ? $suppliers->nama : '' }}">
                  </div>                
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" placeholder="ex : Pekanbaru"
                    name="alamat" value="{{ ($action!='suppliers.store') ? $suppliers->alamat : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="ex : tepung@gmail.com"
                    name="email" value="{{ ($action!='suppliers.store') ? $suppliers->email : '' }}">
                  </div> 
                  <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" class="form-control" placeholder="ex : 082288389173"
                    name="telepon" value="{{ ($action!='suppliers.store') ? $suppliers->telepon : '' }}">
                  </div>      
                </div>
                <div class="card-footer">
                <input type="submit" class="btn btn-success" value="{{ ($action!='suppliers.store') ? 'Update' : 'Simpan' }}">        
                </div>
              </form>

              @endsection