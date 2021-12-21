@extends('master')
@section('judul','Data Supplier')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{url('supplier/create')}}" class="btn btn-success">Tambah Supplier</a>
<table id="example1"  class="table table-bordered table-hover">
<thead>
        <tr>
            <th>id</th>
            <th>Nama Supplier</th>
            <th>Lokasi</th>
            <th>Nomor Telphone</th>
            <th>Barang Supplier</th>
            <th>Email</th>
            <th>Aksi<th>
        </tr>
    </thead>
    <tbody>
        @foreach($supplier as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->nama_supplier}}</td>
            <td>{{$value->lokasi}}</td>
            <td>{{$value->nomor_telp}}</td>
            <td>{{$value->barang_supplier}}</td>
            <td>{{$value->email}}</td>
            <td><a href="{{url('supplier/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a> | 
            <a href="{{url('supplier/delete/'.$value->id)}}"class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
        </tr>
        @endforeach
    </tbody>    
</table>
@endsection
@section('js')
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection