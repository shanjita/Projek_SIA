@extends('master')
@section('judul', 'Form Categories')
@section('content')
<form role="form" action="{{($action!='categories.store') ? url($action): route($action) }}" method="POST">
{{ csrf_field()}}
<input type="hidden" name=id value="{{($action!='categories.store') ? $categories->id:''}}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{($action!='categories.store') ? $categories->nama:''}}" placeholder="ex: Michellin">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <input type="submit" class="btn btn-success" value="{{($action!='categories.store') ? 'Update' : 'Simpan'}}"><br>
                </div>
              </form>

@endsection