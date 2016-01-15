<?php
session_start();
include "../../main/connection.php";

$module=$_GET['module'];
$act=$_GET['act'];



//UPDATE pemesanan
if ($module=='data_pemesanan' AND $act=='update_pemesanan'){
    mysql_query("UPDATE pemesanan SET
                                    tanggal_pesan   = '$_POST[tanggal_pesan]',
                                    status_pemesan  = '$_POST[status_pemesan]',
                                    id_lapang       = '$_POST[id_lapang]',
                                    id_waktu        = '$_POST[id_waktu]',
                                    tarif           = '$_POST[tarif]',
                                    status          = '$_POST[status]',
                                    id_pelanggan    = '$_POST[id_pelanggan]'
                                    WHERE    kode_pesan   = '$_POST[id]'");
  
  header('location:../pegawai.php?module='.$module);
}

//DELETE pemesanan
elseif ($module=='data_pemesanan' AND $act=='hapuspemesanan'){
  mysql_query("DELETE FROM pemesanan WHERE kode_pesan = '$_GET[id]'");
  header('location:../pegawai.php?module='.$module);
}

//EXPORT KE EXCEL
elseif ($module=='data_pemesanan' AND $act=='export'){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_pemesanan.xls");
  include "cetak_excel.php";
}

//TAMBAH pemesanan
else {
  $kode_pesan         = $_POST["kode_pesan"];
  $tanggal_pesan      = $_POST["tanggal_pesan"];
  $status_pemesan     = $_POST["status_pemesan"];
  $id_lapang          = $_POST["id_lapang"];
  $id_waktu           = $_POST["id_waktu"];
  $tarif              = $_POST["tarif"];
  $status             = $_POST["status"];
  $id_pelanggan       = $_POST["id_pelanggan"];
  
                                  
  $sql    = "INSERT INTO pemesanan(kode_pesan,tanggal_pesan,status_pemesan,id_lapang,id_waktu,tarif,status,id_pelanggan)
              values ('$kode_pesan','$tanggal_pesan','$status_pemesan','$id_lapang','$id_waktu','$tarif','$status','$id_pelanggan')";
  $kueri = mysql_query($sql);
  header('location:../pegawai.php?module=data_pemesanan');
}
?>

