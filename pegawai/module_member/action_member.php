<?php
session_start();
include "../../main/connection.php";

$module=$_GET['module'];
$act=$_GET['act'];



//UPDATE member
if ($module=='data_member' AND $act=='update_member'){
  if (empty($_POST[password])) {
    mysql_query("UPDATE member SET username      = '$_POST[username]',
                                  id_pelanggan   = '$_POST[id_pelanggan]',
                                  aktif          = '$_POST[aktif]',
                                  tanggal_daftar = '$_POST[tanggal_daftar]',
                                  langganan      = '$_POST[langganan]',
                                  kuota_main     = '$_POST[kuota_main]'                  
                           WHERE  id_member      = '$_POST[id]'");

   mysql_query("UPDATE pelanggan SET 
                                  
                                  nama         = '$_POST[nama]',
                                  alamat       = '$_POST[alamat]',
                                  no_telp      = '$_POST[no_telp]',
                                  email        = '$_POST[email]'                  
                           WHERE  id_pelanggan = '$_POST[id]'");
  }
  // Apabila password diubah
  else{
    $pass=md5($_POST[password]);
    mysql_query("UPDATE member SET username       = '$_POST[username]',
                                  password        = '$pass',
                                  id_pelanggan    = '$_POST[id_pelanggan]',
                                  aktif           = '$_POST[aktif]',
                                  tanggal_daftar  = '$_POST[tanggal_daftar]',
                                  langganan       = '$_POST[langganan]',
                                  kuota_main      = '$_POST[kuota_main]'
                           WHERE id_member        = '$_POST[id]'");
   mysql_query("UPDATE pelanggan SET 
                                  
                                  nama         = '$_POST[nama]',
                                  alamat       = '$_POST[alamat]',
                                  no_telp      = '$_POST[no_telp]',
                                  email        = '$_POST[email]'                  
                           WHERE  id_pelanggan = '$_POST[id]'");
  }
  header('location:../pegawai.php?module='.$module);
}

//DELETE member
elseif ($module=='data_member' AND $act=='hapusmember'){
  mysql_query("DELETE FROM member WHERE id_member = '$_GET[id]'");
  header('location:../pegawai.php?module='.$module);
}

//EXPORT KE EXCEL
elseif ($module=='data_member' AND $act=='export'){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_member.xls");
  include "cetak_excel.php";
}

//TAMBAH member
else {
  
    $nama         = $_POST["nama"];
    $alamat       = $_POST["alamat"];
    $telepon      = $_POST["telepon"];
    $email        = $_POST["email"];
    $username     = $_POST["username"];
    $password       = md5($_POST["password"]);

    $tanggal = date('Y-m-d h:i:s');

    $sql2 = "insert into pelanggan value('','$nama','$alamat','$telepon','$email')";
    $kueri1 = mysql_query($sql2);
    $id_pelanggan  = mysql_insert_id();
  //  echo $id_pelanggan;
    //die();
    $id_member = "M".$id_pelanggan;
    $sql    = "INSERT INTO member(id_pelanggan,id_member,username,password,aktif,tanggal_daftar,langganan,kuota_main)
                values ('$id_pelanggan','$id_member','$username','$password','Y','$tanggal','',0)";

    $kueri2 = mysql_query($sql);
                                  
  /*$sql    = "INSERT INTO member(id_member,username,password,id_pelanggan,aktif,tanggal_daftar,langganan,kuota_main)
              values ('$id_member','$username','$password','$id_pelanggan','$aktif','$tanggal_daftar','$langganan','kuota_main')";
  $kueri = mysql_query($sql);*/
  header('location:../pegawai.php?module=data_member');
}
?>

