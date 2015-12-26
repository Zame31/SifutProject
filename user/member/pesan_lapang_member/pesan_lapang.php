<!DOCTYPE HTML>
<html>
<head>
    <title>Sifut</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="E-Learning Website" />
    <meta name="keywords" content="learning, website" />
    <meta name="author" content="Zamzam Nurzaman" />
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/style_user.css">
    <link rel="stylesheet" href="../../../assets/vendor/font-awesome/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,300,100italic,100,300italic,500,500italic,700,900,900italic,700italic%7COswald:300,300,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300,300italic,300italic,700,700italic' rel='stylesheet' type='text/css'>
    <script src="../../../assets/js/jquery.min.js"></script>
    <script src="../../../assets/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    include "../../../main/connection.php";
    date_default_timezone_set('Asia/Jakarta');
    session_start();

    $date = $_POST["tanggal"];
    $nama_pemesan = $_POST["nama_pemesan"];
    $status_pemesan = 'member';
    $id_lapang = $_POST["lapang"];
    $id_waktu = $_POST["id_waktu"];
    $tarif = $_POST["tarif"];
    $status = 'menunggu Konfirmasi';
    $alamat = $_POST["alamat"];
    $no_telp = $_POST["no_telp"];
    $waktu_awal = $_POST["waktu_awal"];
    $waktu_akhir = $_POST["waktu_akhir"];
    $id_pelanggan = $_POST['id_pelanggan'];

    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
    $tanggal_pesan = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;

    if ($id_lapang == 'LP01') {
        $nama_lapang = 'Lapang Sintetis 1';
    } else {
      $nama_lapang = 'Lapang Sintetis 2';
    }
    $tanggal_skr = date('Y-m-d h:i:s');

    $view_limit = mysql_query("select * from member WHERE id_pelanggan='$id_pelanggan'");
    if($view_limit){
        $limit = mysql_fetch_array($view_limit);
        $count_limit = $limit['kuota_main'] + 1;
    }

    if($count_limit <= 2){
        $update_limit = mysql_query("update member set kuota_main='$count_limit' WHERE id_pelanggan='$id_pelanggan'");

        $sql    = "INSERT INTO pemesanan values ('','$date','$status_pemesan','$id_lapang','$id_waktu','$tarif','$status','$id_pelanggan')";
        $kueri = mysql_query($sql);

        $_SESSION['nama_pemesan'] = $nama_pemesan;
    } else {
        ?>
        <div class='modal-dialog dialog-size'>
            <div class='modal-content content-size'>
                <div class='modal-header color-warning'>
                    <i class='fa fa-warning'></i><p> Warning</p>
                </div>
                <div class='modal-body body-conf'>
                    <div class='form-group'>
                        <div class='col-lg-12'>
                            Maaf batas voucher waktu bermain anda telah habis untuk 1 bulan.
                            <b>Silakan melakukan pembayaran</b>
                        </div>
                    </div>
                </div>
                <div class='modal-footer footer-conf'>
                    <a href="lapang.php"><button class='btn btn-warning'>Kembali</button></a>
                </div>
            </div>
        </div>
        <?php
    }


  $tampilkan = mysql_query(" SELECT * FROM pemesanan JOIN pelanggan USING (id_pelanggan)
                            WHERE id_lapang='$id_lapang' AND tanggal_pesan='$date' AND id_waktu='$id_waktu' AND id_pelanggan='$id_pelanggan'");

  while ($tampil=mysql_fetch_array($tampilkan)){

    $_SESSION['kode_pesan'] = $tampil['kode_pesan'];
  echo "
      <div class='container'>
            <div class='align'>
              <div class='tiket'>
                <div class='tiket-title'>
                  <span> Selamat, Pemesanan Lapang Berhasil</span>
                  <span class='waktu'></span>
                </div>
                <div class='row tiket-body'>

                <div class='col-lg-5'>Kode Pemesanan</div>
                <div class='col-lg-7'>: $tampil[kode_pesan]</div>
                  <div class='col-lg-5'>Tanggal Memesan</div>
                  <div class='col-lg-7'>: $tanggal_skr</div>
                  <div class='col-lg-5'>Nama Lengkap</div>
                  <div class='col-lg-7'>: $nama_pemesan</div>
                   <div class='col-lg-5'>Alamat</div>
                  <div class='col-lg-7'>: $alamat</div>
                  <div class='col-lg-5'>Telepon</div>
                  <div class='col-lg-7'>: $no_telp</div>
                  <div class='col-lg-5'>Tanggal Pesan Lapang</div>
                  <div class='col-lg-7'>: $tanggal_pesan</div>
                  <div class='col-lg-5'>Nama Lapang</div>
                  <div class='col-lg-7'>: $nama_lapang</div>
                  <div class='col-lg-5'>Waktu</div>
                  <div class='col-lg-7'>: $waktu_awal - $waktu_akhir</div>
                  <div class='col-lg-5'>Tarif</div>
                  <div class='col-lg-7'>: $tarif</div>
                  <div class='col-lg-5'>Silahkan Transfer ke</div>
                  <div class='col-lg-7'>: (BNI) 090834002222</div>
                    <div class='alert-pesan'>Simpan Kode Pemesanan anda karna akan digunakan untuk KONFIRMASI PEMBAYARAN </div>
                    <a type='button' class='btn btn-default tiket-button' href='lapang.php'>Kembali</a>
                    <a type='button' class='btn btn-default tiket-button' href='cetak_bukti_pesan.php' target='_blank'>Cetak Bukti</a>
                </div>

              </div>

            </div>

          </div>
      ";
}
  ?>
