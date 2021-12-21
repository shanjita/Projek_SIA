@extends('master')
@section('judul','Beranda')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<div class="menu-content-container container-no-padding">
    <div class="contents-section-1">
        <div class="text-section-1">
           
            <span class="contents-text">
            <p align="justify">
Unilever  adalah perusahaan multinasional yang berkantor pusat di Rotterdam, Belanda (dengan nama Unilever N.V.) dan London, Inggris (dengan nama Unilever plc.) . Unilever memproduksi makanan, minuman, pembersih, dan juga perawatan tubuh. Unilever adalah produsen barang rumah tangga terbesar ketiga di dunia, jika didasarkan pada besarnya pendapatan pada tahun 2012, di belakang P&G dan Nestlé. Unilever juga merupakan produsen olesan makanan (seperti margarin) terbesar di dunia. 
Unilever adalah salah satu perusahaan paling tua di dunia yang masih beroperasi, dan saat ini menjual produknya ke lebih dari 190 negara.
</p>
            </span>
        </div>
    </div>
@endsection
@section('js')
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection


