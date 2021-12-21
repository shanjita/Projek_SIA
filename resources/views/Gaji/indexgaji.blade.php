@extends('master')
@section('judul','Data Gaji Karyawan')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{url('gaji/create')}}" class="btn btn-primary">Tambah Data Gaji</a><hr>
</br>
<table id_gaji="gaji" class="table table-bordered table-hover">
    <thead>
            <tr>
                 <th>No</th>
                 <th>Kode Gaji</th>
                 <th>NIK</th>
                 <th>Nama</th>
                 <th>Jabatan</th>
                 <th>Gaji</th>
                 <th>Status Gaji</th>
                 <th>Aksi</th>
            </tr>
    </thead>
    <tbody>
        @foreach($gaji as $key => $value)
            <tr>
                <td>{{$key +1}}</td>
                <td>{{$value->id_gaji}}</td>
                <td>{{$value->id_karyawan}}</td>
                <td>{{$value->nama}}</td>
                <td>{{$value->jabatan}}</td>
                <td>{{$value->gaji}}</td>
                <td>{{$value->status}}</td>
                <td><a href="{{url('gaji/'.$value->id_gaji.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a> |
                    <a href="{{url('gaji/delete/'.$value->id_gaji)}}"class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
    $("#gaji").DataTable({
      "responsive": true,
      "autoWidth": true,
    });
});
</script>
@endsection

