@extends('master')
@section('judul', 'Data Supplier')
@section('content')
<form role="form" action="{{($action!='supplier.store') ? url($action):  route($action)  }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name=id value="{{($action!='supplier.store') ? $supplier->id : '' }}">
                <div class="card-body">                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Supplier</label>
                    <input type="text" class="form-control" placeholder="ex : Indah"
                    name="nama_supplier" value="{{ ($action!='supplier.store') ? $supplier->nama_supplier : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="">Lokasi</label>
                    <input type="text" class="form-control" placeholder="ex : Jl. Sudirman"
                    name="lokasi" value="{{ ($action!='supplier.store') ? $supplier->lokasi : '' }}">
                  </div> 
                  <div class="form-group">
                    <label for="">Nomor Telephone</label>
                    <input type="text" class="form-control" placeholder="ex : 1234"
                    name="nomor_telp" value="{{ ($action!='supplier.store') ? $supplier->nomor_telp : '' }}">
                  </div>   
                  <div class="form-group">
                    <label for="">Barang Supplier</label>
                    <input type="text" class="form-control" placeholder="ex : Buavita"
                    name="barang_supplier" value="{{ ($action!='supplier.store') ? $supplier->barang_supplier : '' }}">
                  </div>  
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="ex : indah@gmail.com"
                    name="email" value="{{ ($action!='supplier.store') ? $supplier->email : '' }}">
                  </div>                
                </div>
                <div class="card-footer">
                <input type="submit" class="btn btn-success" value="{{ ($action!='supplier.store') ? 'Update' : 'Update' }}">        
                </div>
              </form>

              @endsection