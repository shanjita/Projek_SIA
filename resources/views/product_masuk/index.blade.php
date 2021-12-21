@extends('master')
@section('judul', 'Data Barang Masuk')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{url('product_masuk/create')}}" class="btn btn-success">Tambah Data Barang Masuk</a><hr/>
<table id="data_product_masuk" class="table table-bordered table-striped">
<thead>
        <tr>
            <th>No.</th>
            <th>Id Kategori</th>
            <th>Id Pemasok</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($product_masuk as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->categories_id}}</td>
            <td>{{$value->suppliers_id}}</td>
            <td>{{$value->jumlah}}</td>
            <td>{{$value->tanggal}}</td>
            <td><a href="{{url('product_masuk/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a> | 
            <a href="{{url('product_masuk/delete/'.$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</i></a></td>
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
    $("#data_product_masuk").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection
