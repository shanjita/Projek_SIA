@extends('master')
@section('judul', 'Data Barang')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{url('products/create')}}" class="btn btn-success">Tambah Data Barang</a><hr/>
<table id="data_products" class="table table-bordered table-striped">
<thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <!--<th>Harga</th>-->
            <th>Jumlah</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->nama}}</td>
            <!--<td>{{$value->harga}}</td>-->
            <td>{{$value->jumlah}}</td>
            <td>{{$value->categori}}</td>
            <td><a href="{{url('products/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a> | 
            <a href="{{url('products/delete/'.$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</i></a></td>
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
    $("#data_products").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection
