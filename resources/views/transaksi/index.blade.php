@extends('master')
@section('judul','Data Transaksi')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{url('transaksi/create')}}" class="btn btn-success">Tambah Transaksi</a>
<table id="example1"  class="table table-bordered table-hover">
<thead>
        <tr>
            <th>id</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Jumlah Barang</th>
            <th>Nama Supplier</th>
            <th>Pembayaran</th>
            <th>Aksi<th>
        </tr>
    </thead>
    <tbody>
        @foreach($transaksi as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->nama_barang}}</td>
            <td>{{$value->harga_barang}}</td>
            <td>{{$value->jumlah_barang}}</td>
            <td>{{$value->nama_supplier}}</td>
            <td>{{$value->pembayaran}}</td>
            <td><a href="{{url('transaksi/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a> | 
            <a href="{{url('transaksi/delete/'.$value->id)}}"class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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