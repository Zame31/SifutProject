<!--NAVIGATOR-->
<?php
if ($_GET['module']=='beranda'){
    echo '
          <li role="presentation" class="active space-top"><a href="pegawai.php?module=beranda">Home</a></li>
          <li role="presentation"><a href="?module=data_barang">Data Barang</a></li>
        
          ';
         
      }
 elseif ($_GET['module']=='data_barang'){
         echo '
              <li role="presentation" class="space-top"><a href="pegawai.php?module=beranda">Home</a></li>
              <li role="presentation" class="active"><a href="?module=data_barang">Data Barang</a></li>
             
          ';
      }
  
?>


      