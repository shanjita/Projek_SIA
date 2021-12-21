@extends('master')
@section('judul','Form Data Karyawan')
@section('content')
<form action="{{($action!='karyawanhrm.store') ? url($action):  route($action)  }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name=id_karyawan value="{{($action!='karyawanhrm.store') ? $karyawanhrm->id_karyawan : '' }}">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="NIK" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="NIK" name="id_karyawan" 
                      value="{{ ($action!='karyawanhrm.store') ? $karyawanhrm->id_karyawan : '' }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Nama Karyawan" class="col-sm-2 col-form-label">Nama Karyawan</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="Nama Karyawan"  name="nama" 
                      value="{{ ($action!='karyawanhrm.store') ? $karyawanhrm->nama : '' }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Gender" class="col-sm-2 col-form-label">Jenis Kelamin
                      <div class="input-group" name="gender" value="{{ ($action!='karyawanhrm.store') ? $karyawanhrm->gender : '' }}" >
											<strong><input type="radio" class="flat" name="gender" id="hadir" value="Perempuan {{ ($action!='karyawanhrm.store') ? $karyawanhrm->gender == 'Perempuan' : '' }}" /> Perempuan &nbsp;&nbsp;&nbsp;&nbsp;</strong>
											<strong><input type="radio" class="flat" name="gender"  id="terlambat" value="Laki-Laki {{ ($action!='karyawanhrm.store') ? $karyawanhrm->gender == 'Laki-Laki' : '' }}"/> Laki-Laki &nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
                  </div>
                  </div>
                  <div class="form-group row">
                  <label for="Department" class="col-sm-2 col-form-label">Department
                  <select multiple="multiple"  name="department" value="{{ ($action!='karyawanhrm.store') ? $karyawanhrm->department : '' }}">
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
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="Jabatan"  name="jabatan" 
                      value="{{ ($action!='karyawanhrm.store') ? $karyawanhrm->jabatan : '' }}">
                      </div>
                    </div>
                    <div class="form-group row">
                    <label for="NO HP" class="col-sm-2 col-form-label">NO HP</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="No HP"  name="nohp" 
                      value="{{ ($action!='karyawanhrm.store') ? $karyawanhrm->nohp : '' }}">
                      </div>
                    </div>
                    <div class="form-group row">
                    <label for="Email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="Email"  name="email" 
                      value="{{ ($action!='karyawanhrm.store') ? $karyawanhrm->email : '' }}">
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-success" value="{{ ($action!='karyawanhrm.store') ? 'Perbarui' : 'Tambah' }}">
                </div>
                <!-- /.card-footer -->
              </form>
@endsection
