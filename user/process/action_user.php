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

    $kodebarang       = $_POST["kodebarang"];
    $namabarang       = $_POST["namabarang"];
    $harga            = $_POST["harga"];
    $jumlah            = $_POST["jumlah"];
    $total_harga      = $harga * $jumlah; 
    $kode_customer    = $mykode;

    $tanggal_order = date('Y-m-d h:i:s');
                   
    $sql    = "INSERT INTO order_barang(tgl_order,total_harga,status,kode_customer) 
                values ('$tanggal_order', '$total_harga', 'Menunggu Konfirmasi','$mykode')";
    $kueri = mysql_query($sql);

   
   
   $tampil_admin = mysql_query("SELECT noorder
                               FROM order_barang 
                               WHERE tgl_order='$tanggal_order' ");
  
    while ($tampil=mysql_fetch_array($tampil_admin)){

    echo "
       <div class='container'>
          <div class='align'>
            <div class='tiket'>
              <div class='tiket-title'>
                <span> Bukti Order</span>
                <span class='waktu'></span>
              </div>
              <div class='row tiket-body'>
                <div class='col-lg-4'>kode Customer</div>
                <div class='col-lg-8'>$mykode</div>
                <div class='col-lg-4'>Nomer Order</div>
                <div class='col-lg-8'>$tampil[noorder]</div>
                <div class='col-lg-4'>Tanggal Beli</div>
                <div class='col-lg-8'>$tanggal_order</div>
                <div class='col-lg-4'>Kode Barang</div>
                <div class='col-lg-8'>$kodebarang</div>
                <div class='col-lg-4'>Nama Barang</div>
                <div class='col-lg-8'>$namabarang</div>
                <div class='col-lg-4'>Nama Pembeli</div>
                <div class='col-lg-8'>$myuser</div>
                 <div class='col-lg-4'>Jumlah Beli</div>
                <div class='col-lg-8'>$jumlah</div>
                <div class='col-lg-4'>Harga</div>
                <div class='col-lg-8'>$harga</div>
                <div class='col-lg-4'>Total Bayar</div>
                <div class='col-lg-8'>$total_harga</div>
                <div class='col-lg-4'>Silahkan Transfer Ke</div>
                <div class='col-lg-8'>(BNI)0908200313</div>
              </div>    
            </div>    
          </div>
          <a type='button' class='btn btn-default tiket-button' href='barang.php'>Kembali</a>
        </div>
    ";
  }
  //header('location:../index.php');
?>

