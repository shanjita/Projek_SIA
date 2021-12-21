@extends('master')
@section('judul','Form Data gaji Karyawan')
@section('content')
<form action="{{($action!='gaji.store') ? url($action):  route($action)  }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name=id_gaji value="{{($action!='gaji.store') ? $gaji->id_gaji : '' }}">
                <div class="card-body">
                <div class="form-group row">
                    <label for="kodegaji" class="col-sm-2 col-form-label">Kode Gaji</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="Kode Gaji"  name="id_gaji" 
                      value="{{ ($action!='gaji.store') ? $gaji->id_gaji : '' }}">
                    </div>
                    </div>
                  <div class="form-group row">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="NIK" name="id_karyawan" 
                      value="{{ ($action!='gaji.store') ? $gaji->id_karyawan : '' }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Karyawan</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="Nama Karyawan"  name="nama" 
                      value="{{ ($action!='gaji.store') ? $gaji->nama : '' }}">
                    </div>
                    </div>
                  <div class="form-group row">
                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="Jabatan"  name="jabatan" 
                      value="{{ ($action!='gaji.store') ? $gaji->jabatan : '' }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gaji" class="col-sm-2 col-form-label">Gaji</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="Gaji"  name="gaji" 
                      value="{{ ($action!='gaji.store') ? $gaji->gaji : '' }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status Gaji</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="Status Gaji"  name="status" 
                      value="{{ ($action!='gaji.store') ? $gaji->status : '' }}">
                    </div>
                    </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-success" value="{{ ($action!='gaji.store') ? 'Perbarui' : 'Tambah' }}">
                </div>
                <!-- /.card-footer -->
              </form>
@endsection
