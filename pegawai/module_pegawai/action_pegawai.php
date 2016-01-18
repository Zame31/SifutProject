<?php
session_start();
include "../../main/connection.php";

$module=$_GET['module'];
$act=$_GET['act'];

//UPDATE ADMIN
if ($module=='data_pegawai' AND $act=='update_pegawai'){
  if (empty($_POST[password])) {
    mysql_query("UPDATE pegawai SET
                                  nama_lengkap   = '$_POST[nama_lengkap]',
                                  alamat         = '$_POST[alamat]',
                                  email          = '$_POST[email]',
                                  telp        	 = '$_POST[telp]',
                                  blokir         = '$_POST[blokir]'
                           WHERE  username     = '$_POST[id]'");
  }
  // Apabila password diubah
  else{
    $pass=md5($_POST[password]);
    mysql_query("UPDATE pegawai SET 
                                  password        = '$pass',
                                  nama_lengkap    = '$_POST[nama_lengkap]',
                                  alamat          = '$_POST[alamat]',
                                  email           = '$_POST[email]',
                                  telp            = '$_POST[telp]',
                                  blokir          = '$_POST[blokir]'
                           WHERE username       = '$_POST[id]'");
  }
  header('location:../pegawai.php?module='.$module);
}

//DELETE ADMIN
elseif ($module=='data_pegawai' AND $act=='hapuspegawai'){
  mysql_query("DELETE FROM pegawai WHERE username = '$_GET[id]'");
  header('location:../pegawai.php?module='.$module);
}
//EXPORT KE EXCEL
elseif ($module=='data_pegawai' AND $act=='export'){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_pegawai.xls");
  include "cetak_excel.php";
}
//TAMBAH ADMIN
else {
  $username       = $_POST["username"];
  $password       = md5($_POST[password]);
  $nama_lengkap   = $_POST["nama_lengkap"];
  $alamat         = $_POST["alamat"];
  $email          = $_POST["email"];
  $telp           = $_POST["telp"];
  $blokir         = $_POST["blokir"];

  $sql    = "INSERT INTO pegawai(username,password,nama_lengkap,alamat,email,telp,blokir)
              values ('$username','$password','$nama_lengkap','$alamat','$email','$telp','$blokir')";
  $kueri = mysql_query($sql);
  header('location:../pegawai.php?module=data_pegawai');
}
?>
