<!--NAVIGATOR-->
<?php
if ($_GET['module']=='beranda'){
    echo '
          <li role="presentation" class="active space-top"><a href="pegawai.php?module=beranda">Home</a></li>
          <li role="presentation"><a href="?module=data_lapang">Data Lapang</a></li>
          <li role="presentation"><a href="?module=data_member">Data Member</a></li>
          <li role="presentation"><a href="?module=data_pembayaran">Data Pembayaran</a></li>
          <li role="presentation"><a href="?module=data_pemesanan">Data Pemesanan</a></li>
        
          ';
         
      }
 elseif ($_GET['module']=='data_lapang'){
         echo '
              <li role="presentation" class="space-top"><a href="pegawai.php?module=beranda">Home</a></li>
              <li role="presentation" class="active"><a href="?module=data_lapang">Data Lapang</a></li>
              <li role="presentation"><a href="?module=data_member">Data Member</a></li>
              <li role="presentation"><a href="?module=data_pembayaran">Data Pembayaran</a></li>
              <li role="presentation"><a href="?module=data_pemesanan">Data Pemesanan</a></li>
             
          ';
      }
  elseif ($_GET['module']=='data_member'){
         echo '
              <li role="presentation" class="space-top"><a href="pegawai.php?module=beranda">Home</a></li>
              <li role="presentation"><a href="?module=data_lapang">Data Lapang</a></li>
              <li role="presentation" class="active"><a href="?module=data_member">Data Member</a></li>
              <li role="presentation"><a href="?module=data_pembayaran">Data Pembayaran</a></li>
              <li role="presentation"><a href="?module=data_pemesanan">Data Pemesanan</a></li>
             
          ';
      }
  elseif ($_GET['module']=='data_pembayaran'){
         echo '
              <li role="presentation" class="space-top"><a href="pegawai.php?module=beranda">Home</a></li>
              <li role="presentation"><a href="?module=data_lapang">Data Lapang</a></li>
              <li role="presentation"><a href="?module=data_member">Data Member</a></li>
              <li role="presentation" class="active"><a href="?module=data_pembayaran">Data Pembayaran</a></li>            
              <li role="presentation"><a href="?module=data_pemesanan">Data Pemesanan</a></li>
          ';
      }
  elseif ($_GET['module']=='data_pemesanan'){
         echo '
              <li role="presentation" class="space-top"><a href="pegawai.php?module=beranda">Home</a></li>
              <li role="presentation"><a href="?module=data_lapang">Data Lapang</a></li>
              <li role="presentation"><a href="?module=data_member">Data Member</a></li>
              <li role="presentation"><a href="?module=data_pembayaran">Data Pembayaran</a></li>
              <li role="presentation" class="active"><a href="?module=data_pemesanan">Data Pemesanan</a></li>
             
          ';
      }
?>


      