@extends('master')
@section('judul','Data Absensi Karyawan')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{url('absensi/create')}}" class="btn btn-primary">Tambah Data Absensi</a><hr>
</br>
<table id="absensi" class="table table-bordered table-hover">
    <thead>
            <tr>
                 <th>No</th>
                 <th>NIK</th>
                 <th>Nama</th>
                 <th>Department</th>
                 <th>Jabatan</th>
                 <th>Tanggal</th>
                 <th>Absensi</th>
                 <th>Aksi</th>
            </tr>
    </thead>
    <tbody>
        @foreach($absensi as $key => $value)
            <tr>
                <td>{{$key +1}}</td>
                <td>{{$value->nik}}</td>
                <td>{{$value->nama}}</td>
                <td>{{$value->department}}</td>
                <td>{{$value->jabatan}}</td>
                <td>{{$value->tanggal}}</td>
                <td>{{$value->absensi}}</td>
                <td><a href="{{url('absensi/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a> |
                    <a href="{{url('absensi/delete/'.$value->id)}}"class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
    $("#absensi").DataTable({
      "responsive": true,
      "autoWidth": true,
    });
});
</script>
@endsection

