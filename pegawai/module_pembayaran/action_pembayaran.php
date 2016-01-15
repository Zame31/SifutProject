<?php
session_start();
include "../../main/connection.php";

$module=$_GET['module'];
$act=$_GET['act'];



//UPDATE pembayaran
if ($module=='data_pembayaran' AND $act=='update_pembayaran'){
    mysql_query("UPDATE pembayaran SET
                                    kode_pesan         = '$_POST[kode_pesan]',
                                    tanggal_transfer   = '$_POST[tanggal_transfer]',
                                    bank               = '$_POST[bank]',
                                    nominal            = '$_POST[nominal]'
                           WHERE    id_pembayaran      = '$_POST[id]'");
  
  header('location:../pegawai.php?module='.$module);
}

//DELETE pembayaran
elseif ($module=='data_pembayaran' AND $act=='hapuspembayaran'){
  mysql_query("DELETE FROM pembayaran WHERE id_pembayaran = '$_GET[id]'");
  header('location:../pegawai.php?module='.$module);
}

//EXPORT KE EXCEL
elseif ($module=='data_pembayaran' AND $act=='export'){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_pembayaran.xls");
  include "cetak_excel.php";
}

//TAMBAH pembayaran
else {
 
  $kode_pesan        = $_POST["kode_pesan"];
  $tanggal_transfer  = $_POST["tanggal_transfer"];
  $bank              = $_POST["bank"];
  $nominal           = $_POST["nominal"];
  
                                  
  $sql    = "INSERT INTO pembayaran(id_pembayaran,kode_pesan,tanggal_transfer,bank,nominal)
              values ('','$kode_pesan','$tanggal_transfer','$bank','$nominal')";
  $kueri = mysql_query($sql);
  header('location:../pegawai.php?module=data_pembayaran');
}
?>

