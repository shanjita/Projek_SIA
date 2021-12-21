@extends('master')
@section('judul', 'Laporan Keuangan')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<table class="table users-table table-condensed table-hover" >
                                                <?php
                                                    $query = mysqli_query($con, "SELECT sum(harga_jual) as jual FROM penjualan");
                                                    while ($row = mysqli_fetch_array($query)) {
                                                        $jual=$row['jual']; 
                                                    }
                                                    $query = mysqli_query($con, "SELECT sum(harga_awal) as beli FROM pembelian");
                                                    while ($row = mysqli_fetch_array($query)) {
                                                        $beli=$row['beli']; 
                                                    }
                                                    
                                                    $query = mysqli_query($con, "SELECT sum(harga) as pengeluaran FROM pengeluaran");
                                                    while ($row = mysqli_fetch_array($query)) {
                                                        $pengeluaran=$row['pengeluaran']; 
                                                    }
                                                    
                                                    $query = mysqli_query($con, "SELECT sum(debit) as beban FROM account where id_jenis=6");
                                                    while ($row = mysqli_fetch_array($query)) { 
                                                        $beban=$row['beban']; 
                                                    }

                                                     $query = mysqli_query($con, "SELECT max(harga) as luar FROM beban");
                                                    while ($row = mysqli_fetch_array($query)) {
                                                        $luar=$row['luar']; 
                                                    } 
                                                    
                                                    $query = mysqli_query($con, "SELECT min(harga) as luar1 FROM beban");
                                                    while ($row = mysqli_fetch_array($query)) {
                                                        $luar1=$row['luar1']; 
                                                    }

                                                    $beli=$beli;
                                                    $luar=$luar;
                                                    $luar1=$luar1;
                                                    $hasil = $beli + $luar + $luar1;
                                                        
                                                    $cos=$jual-$hasil;
                                                    $total=$cos; 
                                                    
                                                        ?>

                                                    <tr>
                                                        <td class="visible-lg" colspan="2"><b>Pendapatan</b></td>                                                             
                                                    </tr>
                                                    <tr>
                                                        <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Penjualan" ?><br><br></td>
                                                        <td><?php print "Rp ".$jual; ?></td>
                                                                                                                        
                                                    </tr>
                                                      <tr>
                                                        <td class="visible-lg"><b>Total Pendapatan</b></td>                                                             
                                                        <td class="visible-lg"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Rp ".$jual; ?></b></td>                                                             
                                                    </tr>
                                                    <tr>
                                                        <td class="visible-lg" colspan="2"><b>Harga Pokok Penjualan</b></td>                                                             
                                                    </tr>
                                                    <tr>
                                                        <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Pembelian" ?><br><br></td>
                                                        <td><?php print "Rp ".$beli; ?></td>
                                                                                                                        
                                                    </tr>
                                                    <tr>
                                                        <td class="visible-lg" colspan="2"><b>Beban</b></td>                                                             
                                                    </tr>
                                                    <tr>
                                                        <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Beban Sewa" ?></td>
                                                        <td><?php print "Rp ".$luar; ?><br><br></td>  
                                                        </tr>
                                                   
                                                    <tr>
                                                        <br> 
                                                        <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Beban Listrik" ?></td>
                                                        <td><?php print "Rp ".$luar1; ?><br><br></td>  <br>                                                           
                                                    </tr>

                                                        <td class="visible-lg"><b>Total Pengeluaran</b></td>                                                             
                                                        <td class="visible-lg"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
                                                        $beli=$beli;
                                                        $luar=$luar;
                                                        $luar1=$luar1;
                                                        $hasil = $beli + $luar + $luar1;
                                                        
                                                        print "Rp ".$hasil; ?></b></td>                    
                                                    </tr>

                                                    <tr>
                                                        <td class="visible-lg"><b>Laba Rugi</b></td>
                                                        <td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Rp ".$cos ?><b></td>                                                                
                                                    </tr>
                                                    <tr>
                                                     <?php 
                                                    if ($total < 0) {
                                                    ?>
                                                        <td><H3>Kerugian</h3></td>
                                                        <td class="visible-lg"><br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Rp ".$total; ?></b></td>
                                                    <?php } else { ?>
                                                        <td><h3>Keuntungan</h3></td>
                                                        <td class="visible-lg"><br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Rp ".$total; ?></b></td>
                                                       <?php } ?>
                                                        </b>
                                                    </tr>
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
    $("#data_pegawai").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection
