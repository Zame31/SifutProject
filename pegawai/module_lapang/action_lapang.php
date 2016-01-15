<?php
session_start();
include "../../main/connection.php";

$module=$_GET['module'];
$act=$_GET['act'];



//UPDATE lapang
if ($module=='data_lapang' AND $act=='update_lapang'){
    mysql_query("UPDATE lapang SET
                                    nama   = '$_POST[nama]',
                                    aktif  = '$_POST[aktif]'
                                    WHERE    id_lapang   = '$_POST[id]'");
  
  header('location:../pegawai.php?module='.$module);
}

//DELETE lapang
elseif ($module=='data_lapang' AND $act=='hapuslapang'){
  mysql_query("DELETE FROM lapang WHERE id_lapang = '$_GET[id]'");
  header('location:../pegawai.php?module='.$module);
}

//EXPORT KE EXCEL
elseif ($module=='data_lapang' AND $act=='export'){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_lapang.xls");
  include "cetak_excel.php";
}

//TAMBAH lapang
else {
  $id_lapang      = $_POST["id_lapang"];
  $nama           = $_POST["nama"];
  $aktif          = $_POST["aktif"];
  
                                  
  $sql    = "INSERT INTO lapang(id_lapang,nama,aktif)
              values ('$id_lapang','$nama','$aktif')";
  $kueri = mysql_query($sql);
  header('location:../pegawai.php?module=data_lapang');
}
?>

