<!DOCTYPE html>
<html>
<head>
  <title>Seminar Kampus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="E-Learning Website" />
  <meta name="keywords" content="learning, website" />
  <meta name="author" content="Zamzam Nurzaman" />
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style_user.css">
  <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,300,100italic,100,300italic,500,500italic,700,900,900italic,700italic%7COswald:300,300,700" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300,300italic,300italic,700,700italic' rel='stylesheet' type='text/css'>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>

<?php
    session_start();

   $myuser = $_SESSION['username'];
   $mypass = $_SESSION['password'];
   $mykode = $_SESSION['kode'];


  date_default_timezone_set('Asia/Jakarta');
  include "../main/connection.php";

    $noorder          = $_POST["noorder"];
    $kode_customer    = $_POST["kode_customer"];
    $no_rek           = $_POST["no_rek"];
    $jumlah_uang      = $_POST["jumlah_uang"];
    $nofaktur = $kode_customer.$noorder;

    $tanggal_order = date('Y-m-d h:i:s');
                   
    $sql    = "INSERT INTO transaksi(nofaktur,tgl_transaksi,jumlah_uang,noorder,no_rek) 
                values ('$nofaktur', '$tanggal_order', '$jumlah_uang','$noorder','$no_rek')";
    $kueri = mysql_query($sql);

    

   
   $tampil_admin = mysql_query("SELECT *
                               FROM transaksi 
                               WHERE nofaktur= '$nofaktur' ");
  
    while ($tampil=mysql_fetch_array($tampil_admin)){

    echo "
       <div class='container'>
          <div class='align'>
            <div class='tiket'>
              <div class='tiket-title'>
                <span>Konfirmasi Berhasil</span>
                <span class='waktu'></span>
              </div>
              <div class='row tiket-body'>
                
                <div class='col-lg-4'>Tanggal Konfirmasi</div>
                <div class='col-lg-8'>$tampil[tgl_transaksi]</div>
                <div class='col-lg-4'>kode Customer</div>
                <div class='col-lg-8'>$kode_customer</div>
                <div class='col-lg-4'>Nomer Order</div>
                <div class='col-lg-8'>$tampil[noorder]</div>
                 <div class='col-lg-4'>Nomer Rekening</div>
                <div class='col-lg-8'>$tampil[no_rek]</div>
                <div class='col-lg-4'>Jumlah Uang</div>
                <div class='col-lg-8'>$tampil[jumlah_uang]</div>
               
              </div>    
            </div>    
          </div>
          <a type='button' class='btn btn-default tiket-button' href='../index.php'>Kembali</a>
        </div>
    ";
  }
  //header('location:../index.php');
?>

