<?php
/**
 * Created by PhpStorm.
 * User: Doe
 * Date: 12/30/2015
 * Time: 10:14 AM
 */
date_default_timezone_set('Asia/Jakarta');
include "../../../main/connection.php";

$jenis = $_POST['jenis'];
$tarif = $_POST['tarif'];
$kode = $_POST['kode'];
$id_member = $_POST['id_member'];
$date = date('Y:m:d H:i:s');

$insert_voucher = mysql_query("insert into voucher VALUE ('$kode','$id_member','$jenis','$tarif','$date')");
if($insert_voucher) {
    header("location:../member.php");
} else {
    ?>
    <script>
        alert('Pemesanan voucher bermain gagal!');
        parent.location.href='../member.php';
    </script>
    <?php
}

