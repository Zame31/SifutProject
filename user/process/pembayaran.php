<!DOCTYPE html>
<html>
<head>
  <title>Konfirmasi Pembayaran Voucher Member</title>
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
    $id_member = $_SESSION['id_member'];

    date_default_timezone_set('Asia/Jakarta');
    include "../../main/connection.php";

    $kode = $_POST["kode"];
    $tanggal = $_POST["tanggal"];
    $bank = $_POST["bank"];
    $jumlah_uang = $_POST["jumlah_uang"];


    $check = mysql_query("select * from voucher WHERE kode_voucher = '$kode'");

    if($check){
        $result = mysql_fetch_array($check);
        //echo $kode." ".$result['tarif'];
        //die();
        if($result['tarif'] == $jumlah_uang){
            $date = strtotime($tanggal);
            $limit = date('Y-m-d', strtotime('+1 month', $date));

            $sql    = mysql_query("INSERT INTO konfirmasi_voucher values ('','$kode', '$tanggal','$bank','$jumlah_uang')");
            $batas = mysql_query("update member set langganan='$limit',kuota_main=0 WHERE id_member='$id_member'");

            $tampil_admin = mysql_query("SELECT *
                               FROM pelanggan JOIN member USING (id_pelanggan) JOIN voucher USING (id_member) JOIN konfirmasi_voucher USING (kode_voucher)
                               WHERE kode_voucher = '$kode' ");

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
                            <div class='col-lg-4'>Nama Member</div>
                            <div class='col-lg-8'>$tampil[nama]</div>
                            <div class='col-lg-4'>Tanggal Transfer</div>
                            <div class='col-lg-8'>$tampil[tanggal_transfer]</div>
                            <div class='col-lg-4'>kode Voucher</div>
                            <div class='col-lg-8'>$kode</div>
                            <div class='col-lg-4'>Jumlah Uang</div>
                            <div class='col-lg-8'>$tampil[nominal]</div>
                        </div>
                    </div>
                </div>
                <a type='button' class='btn btn-default tiket-button' href='../member/member.php'>Kembali</a>
            </div>";
            }
        } else {
            ?>
            <script>
                alert('Maaf. data yang anda masukkan tidak sesuai.');
                parent.location.href='../member/member.php';
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert('Maaf. kode voucher yang anda masukkan tidak sesuai.');
            parent.location.href='../member/member.php';
        </script>
        <?php
    }
?>

