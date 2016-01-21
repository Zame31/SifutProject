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
    <link href="../../assets/fonts/myfonts.css" rel="stylesheet" type="text/css">
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
</head>
<body>

<?php
    include "../../main/connection.php";
     include "../../main/upload.php";


    $kode_pesan           = $_POST["kode_pesan"];
    $tanggal              = $_POST["tanggal"];
    $bank                 = $_POST["bank"];
    $nominal              = $_POST["nominal"];
    $ada = null;

    $lokasi_file    = $_FILES['bukti']['tmp_name'];
    $tipe_file      = $_FILES['bukti']['type'];
    $nama_file      = $_FILES['bukti']['name'];
    $direktori_file = "bukti/$nama_file";
    $formatgambar = array("image/jpg", "image/jpeg");
    //validasi kode pesan
    $tampilkan_pesan = mysql_query(" select kode_pesan from pemesanan");
    while ($tampil_pesan=mysql_fetch_array($tampilkan_pesan)){
        if ($kode_pesan == $tampil_pesan['kode_pesan']) {
          $ada = "y";
        }
    }

    if(!in_array($tipe_file, $formatgambar)) { // jika $tipe_file, $formatgambar tidak sama
    echo "
       <div class='container'>
             <div class='align'>
               <div class='tiket'>
                 <div class='tiket-title'>
                   <span> Konfirmasi Pembayaran Gagal, Format Gambar bukti Transfer tidak sesuai</span>

                   <span class='waktu'></span>
                 </div>
                 <div class='row tiket-body'>
                     <a type='button' class='btn btn-default tiket-button' href='../../index.php'>Kembali</a>
                 </div>
               </div>
             </div>
           </div>
       ";

    }

    elseif ($ada == "y") {

    UploadImage($nama_file);
    $sql    = "INSERT INTO pembayaran values ('','$kode_pesan','$tanggal','$bank','$nominal','$nama_file')";
    $kueri = mysql_query($sql);

    mysql_query("UPDATE pemesanan SET status = 'Sudah konfirmasi'
                 WHERE kode_pesan = '$kode_pesan'");

   $tampilkan = mysql_query(" SELECT DATE_FORMAT(waktu_awal, '%H:%i') as waktu_awal,
                                    DATE_FORMAT(waktu_akhir, '%H:%i') as waktu_akhir,
                                    pembayaran.kode_pesan,tanggal_transfer,bank,nominal,bukti,
                                    pelanggan.nama as nama_pelanggan,
                                    lapang.nama as nama_lapang
                                FROM pembayaran,pemesanan,pelanggan,lapang,waktu
                                WHERE
                        				pembayaran.kode_pesan = pemesanan.kode_pesan and
                        				pemesanan.id_pelanggan = pelanggan.id_pelanggan and
                                pemesanan.id_lapang = lapang.id_lapang and
                                pemesanan.id_waktu = waktu.id_waktu and
                        				pembayaran.kode_pesan = '$kode_pesan'


                                  ");

   while ($tampil=mysql_fetch_array($tampilkan)){

       $date = date($tampil["tanggal_transfer"]);
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 2);
        $tgl   = substr($date, 8, 2);

        $tanggal_tran = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
   echo "
       <div class='container'>
             <div class='align'>
               <div class='tiket'>
                 <div class='tiket-title'>
                   <span> Konfirmasi Pembayaran Berhasil</span>
                   <span class='waktu'></span>
                 </div>
                 <div class='row tiket-body'>

                 <div class='col-lg-5'>Kode Pemesanan</div>
                 <div class='col-lg-7'>: $tampil[kode_pesan]</div>
                   <div class='col-lg-5'>Tanggal Transfer</div>
                   <div class='col-lg-7'>: $tanggal_tran</div>
                   <div class='col-lg-5'>Bank</div>
                   <div class='col-lg-7'>: $tampil[bank]</div>
                    <div class='col-lg-5'>Jumlah Transfer</div>
                   <div class='col-lg-7'>: $tampil[nominal]</div>
                   <div class='col-lg-5'>Nama Pemesan</div>
                  <div class='col-lg-7'>: $tampil[nama_pelanggan]</div>
                  <div class='col-lg-5'>Lapang yang dipesan</div>
                 <div class='col-lg-7'>: $tampil[nama_lapang]</div>
                 <div class='col-lg-5'>Waktu</div>
                <div class='col-lg-7'>: $tampil[waktu_awal] - $tampil[waktu_akhir]</div>
                <div class='col-lg-5'>Bukti Transfer</div>
                <div class='col-lg-7'>: <img src='bukti/medium_$tampil[bukti]'></div>
                     <a type='button' class='btn btn-default tiket-button' href='../../index.php'>Kembali</a>
                 </div>
               </div>
             </div>
           </div>
       ";
 }

 }else {
   echo "
       <div class='container'>
             <div class='align'>
               <div class='tiket'>
                 <div class='tiket-title'>
                   <span> Konfirmasi Pembayaran Gagal</span>

                   <span class='waktu'></span>
                 </div>
                 <div class='row tiket-body'>
                     <a type='button' class='btn btn-default tiket-button' href='../../index.php'>Kembali</a>
                 </div>
               </div>
             </div>
           </div>
       ";
 }
   ?>
