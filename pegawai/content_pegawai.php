<?php
include "../main/connection.php";

 if ($_GET['module']=='beranda'){
 		echo "<h3 align='center'>Selamat datang dan Selamat Bekerja</h3>";
 	?>
 	  <a type="button" class="btn btn-default" href="module_barang/cetak_pdf.php"><i class="fa fa-print">Print Data Barang</i></a>
 	  <a type="button" class="btn btn-default" href="module_barang/cetak_pdf_customer.php"><i class="fa fa-print">Print Data Customer</i></a>
 	  <a type="button" class="btn btn-default" href="module_barang/cetak_pdf_order.php"><i class="fa fa-print">Print Data Order</i></a>
 	<?php	   
      }
 elseif ($_GET['module']=='data_lapang'){
          include "module_lapang/data_lapang.php";
      }
 elseif ($_GET['module']=='data_member'){
          include "module_member/data_member.php";
      }
 elseif ($_GET['module']=='data_pembayaran'){
          include "module_pembayaran/data_pembayaran.php";
      }
 elseif ($_GET['module']=='data_pemesanan'){
          include "module_pemesanan/data_pemesanan.php";
      }
  