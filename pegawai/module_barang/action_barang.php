<?php
session_start();
include "../../main/connection.php";
include "../../main/upload.php";

$module=$_GET['module'];
$act=$_GET['act'];

//UPDATE barang
if ($module=='data_barang' AND $act=='update_barang'){
   //GAMBAR
  $lokasi_file    = $_FILES['gambar']['tmp_name'];
  $tipe_file      = $_FILES['gambar']['type'];
  $nama_file      = $_FILES['gambar']['name'];
  $direktori_file = "../pic/pic_barang/$nama_file";
   UploadImage($nama_file);

  if(empty($nama_file)){
    mysql_query("UPDATE barang SET 
                                  
                                    namabarang       = '$_POST[namabarang]',
                                    harga            = '$_POST[harga]',
                                    stok             = '$_POST[stok]',
                                    gambar         = '$_POST[gambar_def]'    
                           WHERE    kodebarang   = '$_POST[id]'");
  }
  else {
     mysql_query("UPDATE barang SET 
                                    namabarang       = '$_POST[namabarang]',
                                    harga            = '$_POST[harga]',
                                    stok             = '$_POST[stok]',
                                    gambar         = '$nama_file'    
                           WHERE    kodebarang   = '$_POST[id]'");

  }
  header('location:../pegawai.php?module='.$module);
}

//DELETE barang
elseif ($module=='data_barang' AND $act=='hapusbarang'){
  mysql_query("DELETE FROM barang WHERE kodebarang = '$_GET[id]'");
  header('location:../pegawai.php?module='.$module);
}

//TAMBAH barang
else {
  $kodebarang       = $_POST["kodebarang"];
  $namabarang       = $_POST["namabarang"];
  $harga            = $_POST["harga"];
  $stok             = $_POST["stok"];

  //GAMBAR
  $lokasi_file    = $_FILES['gambar']['tmp_name'];
  $tipe_file      = $_FILES['gambar']['type'];
  $nama_file      = $_FILES['gambar']['name'];
  $direktori_file = "../pic/pic_barang/$nama_file";

if($tipe_file != "image/jpeg" AND $tipe_file != "image/png" AND
     $tipe_file != "image/jpg"){
          echo "<script>window.alert('Tipe File tidak di ijinkan.');
          window.location=(href='../pegawai.php?module=data_barang')</script>";
      }else{
                UploadImage($nama_file);    
                       
  $sql    = "INSERT INTO barang(kodebarang,namabarang,harga,stok,gambar) 
              values ('$kodebarang','$namabarang','$harga','$stok','$nama_file')";
  $kueri = mysql_query($sql);
}
  header('location:../pegawai.php?module=data_barang');
}
?>

