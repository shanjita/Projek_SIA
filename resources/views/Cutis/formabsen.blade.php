@extends('master')
@section('judul','Form Data Absensi Karyawan')
@section('content')
<form action="{{($action!='absensi.store') ? url($action):  route($action)  }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name=id value="{{($action!='absensi.store') ? $absensi->id : '' }}">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="NIK" name="nik" 
                      value="{{ ($action!='absensi.store') ? $absensi->nik : '' }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Nama Karyawan" class="col-sm-2 col-form-label">Nama Karyawan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nama Karyawan"  name="nama" 
                      value="{{ ($action!='absensi.store') ? $absensi->nama : '' }}">
                    </div>
                    </div>
                  <div class="form-group row">
                  <label for="Department" class="col-sm-2 col-form-label">Department
                  <select multiple="multiple"  name="department" value="{{ ($action!='absensi.store') ? $absensi->department : '' }}">
													<optgroup label="-----PILIHAN DEPARTMENT-----">
													<option>Department Inventory</option>
                          <option>Department Financial Resource</option>
                          <option>Department Purchasing</option>
                          <option>Department Human Resource</option>
                          </optgroup>
												</select></label>
                  </div>
                  <div class="form-group row">
                    <label for="Jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Jabatan"  name="jabatan" 
                      value="{{ ($action!='absensi.store') ? $absensi->jabatan : '' }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" placeholder="Tanggal"  name="tanggal" 
                      value="{{ ($action!='absensi.store') ? $absensi->tanggal : '' }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Absensi" class="col-sm-2 col-form-label">Absensi</label>
                      <div class="input-group" name="absensi" value="{{ ($action!='absensi.store') ? $absensi->absensi : '' }}" >
											<strong><input type="radio" class="flat" name="absensi" id="hadir" value="Hadir {{ ($action!='absensi.store') ? $absensi->gender == 'Hadir' : '' }}" /> Hadir &nbsp;&nbsp;&nbsp;&nbsp;</strong>
											<strong><input type="radio" class="flat" name="absensi" id="terlambat" value="Terlambat {{ ($action!='absensi.store') ? $absensi->status == 'Terlambat' : '' }}"/> Terlambat &nbsp;&nbsp;&nbsp;&nbsp;</strong>
                      <strong><input type="radio" class="flat" name="absensi" id="izin" value="Izin {{ ($action!='absensi.store') ? $absensi->status == 'Izin' : '' }}"/> Izin &nbsp;&nbsp;&nbsp;&nbsp;</strong>
                      <strong><input type="radio" class="flat" name="absensi" id="tidakhadir" value="Tidak Hadir {{ ($action!='absensi.store') ? $absensi->status == 'Tidak Hadir' : '' }}"/> Tidak Hadir &nbsp;&nbsp;&nbsp;&nbsp;</strong>
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-success" value="{{ ($action!='absensi.store') ? 'Update' : 'Tambah' }}">
                </div>
                <!-- /.card-footer -->
              </form>
@endsection
