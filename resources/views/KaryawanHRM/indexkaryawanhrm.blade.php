@extends('master')
@section('judul','Data Karyawan')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{url('karyawanhrm/create')}}" class="btn btn-primary">Tambah Data Karyawan</a><hr>
</br>
<table id="karyawan" class="table table-bordered table-hover">
    <thead>
            <tr>
                 <th>No</th>
                 <th>NIK</th>
                 <th>Nama</th>
                 <th>Jenis Kelamin</th>
                 <th>Department</th>
                 <th>Jabatan</th>
                 <th>NO HP</th>
                 <th>Email</th>
                 <th>Aksi</th>
            </tr>
    </thead>
    <tbody>
        @foreach($karyawanhrm as $key => $value)
            <tr>
                <td>{{$key +1}}</td>
                <td>{{$value->id_karyawan}}</td>
                <td>{{$value->nama}}</td>
                <td>{{$value->gender}}</td>
                <td>{{$value->department}}</td>
                <td>{{$value->jabatan}}</td>
                <td>{{$value->nohp}}</td>
                <td>{{$value->email}}</td>
                <td><a href="{{url('karyawanhrm/'.$value->id_karyawan.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a> |
                    <a href="{{url('karyawanhrm/delete/'.$value->id_karyawan)}}"class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>   
            </tr>
            @endforeach
        </tbody>    
    </table>
    @endsection
    @section('js')
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<!-- AdminLTE App -->
<script>
  $(function () {
    $("#karyawan").DataTable({
      "responsive": true,
      "autoWidth": true,
    });
});
</script>
@endsection

