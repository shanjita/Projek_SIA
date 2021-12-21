@extends('master')
@section('judul', 'Data Suppliers')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{url('suppliers/create')}}" class="btn btn-success">Tambah Data Suppliers</a><hr/>
<table id="data_suppliers" class="table table-bordered table-striped">
<thead>
        <tr>
        <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($suppliers as $key => $value)
        <tr>
        <td>{{$key+1}}</td>
            <td>{{$value->nama}}</td>
            <td>{{$value->alamat}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->telepon}}</td>
            <td><a href="{{url('suppliers/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a> | 
            <a href="{{url('suppliers/delete/'.$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</i></a></td>
        </tr>
        @endforeach
        </tbody>
</table>
@endsection
@section('js')
<!-- jQuery -->
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#data_suppliers").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection
