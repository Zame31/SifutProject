<!DOCTYPE HTML>
<html>
<head>
  <title>Sifut</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="E-Learning Website" />
  <meta name="keywords" content="learning, website" />
  <meta name="author" content="Zamzam Nurzaman" />
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/style_user.css">
  <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,300,100italic,100,300italic,500,500italic,700,900,900italic,700italic%7COswald:300,300,700" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300,300italic,300italic,700,700italic' rel='stylesheet' type='text/css'>
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
</head>
<body>

<?php
   session_start();
 date_default_timezone_set('Asia/Jakarta');
  include "../../main/connection.php";



    $nama       = $_POST["nama"];
    $alamat       = $_POST["alamat"];
    $telepon            = $_POST["telepon"];
    $email            = $_POST["email"];
    $username            = $_POST["username"];
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

    $tampil_admin = mysql_query("SELECT *
                               FROM pelanggan,member
                               WHERE tanggal_daftar='$tanggal' and pelanggan.id_pelanggan=member.id_pelanggan ");

  while ($tampil=mysql_fetch_array($tampil_admin)){

echo "
    <div class='container'>
          <div class='align'>
            <div class='tiket'>
              <div class='tiket-title'>
                <span> Selamat, Anda Telah Terdaftar</span>
                <span class='waktu'></span>
              </div>
              <div class='row tiket-body'>
                <div class='col-lg-5'>Tanggal Daftar</div>
                <div class='col-lg-7'>$tanggal</div>
                <div class='col-lg-5'>Nama Lengkap</div>
                <div class='col-lg-7'>$tampil[nama]</div>
                 <div class='col-lg-5'>Alamat</div>
                <div class='col-lg-7'>$tampil[alamat]</div>
                <div class='col-lg-5'>Telepon</div>
                <div class='col-lg-7'>$tampil[no_telp]</div>
                <div class='col-lg-5'>Username</div>
                <div class='col-lg-7'>$tampil[username]</div>
                <div class='col-lg-5'>Password</div>
                <div class='col-lg-7'>*******************</div>
                <a type='button' class='btn btn-default tiket-button' href='../../index.php'>Kembali</a>
              </div>
            </div>
          </div>

        </div>
    ";
}
?>
