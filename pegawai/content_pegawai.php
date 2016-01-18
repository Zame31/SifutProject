<?php
include "../main/connection.php";

 if ($_GET['module']=='beranda'){
 		echo "<h3 align='center'>Selamat datang dan Selamat Bekerja</h3>";
 	   
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
 elseif ($_GET['module']=='data_pegawai'){
          include "module_pegawai/data_pegawai.php";
      }
  