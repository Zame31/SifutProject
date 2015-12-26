<?php
    session_start();
    $myuser = $_SESSION['username'];
    $mypass = $_SESSION['password'];
    $myid = $_SESSION['id_pelanggan'];

    include "../../../main/connection.php";
    include "../../../main/format_hari_ini.php";

    $tgl_skr = date('Y-m-d');
    $date = date($tgl_skr);

    //Format Tanggal
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
    $tanggal = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;

    //Format Hari
    $day = date('D', strtotime($date));
    $dayList = array(
        'Sun' => 'Minggu',
        'Mon' => 'Senin',
        'Tue' => 'Selasa',
        'Wed' => 'Rabu',
        'Thu' => 'Kamis',
        'Fri' => 'Jumat',
        'Sat' => 'Sabtu'
    );

 //Kondisi Untuk Harga
 if ($dayList[$day]== 'Jumat' or $dayList[$day]== 'Sabtu' or $dayList[$day]== 'Minggu') {
     $status_hari ='weekend';
 } else {
   $status_hari = 'normal';
 }

//Query
 $tampilkan = mysql_query("SELECT DATE_FORMAT(waktu_awal, '%H:%i') as waktu_awal,
                                  DATE_FORMAT(waktu_akhir, '%H:%i') as waktu_akhir,
                                  group_concat(DISTINCT tanggal_pesan) as 'booked',
                                  group_concat(DISTINCT id_lapang) as 'lapang',
	                                waktu_tarif.id_waktu,waktu_tarif.id_tarif,tarif.harga
                                  FROM waktu
                                  LEFT JOIN pemesanan
                                  ON waktu.id_waktu = pemesanan.id_waktu and
                                     pemesanan.tanggal_pesan = '$tgl_skr' /*pencarian tanggal*/
                                  JOIN waktu_tarif
                                  ON waktu.id_waktu = waktu_tarif.id_waktu and
                                    waktu_tarif.status = '$status_hari'
                                  JOIN tarif
                                  ON waktu_tarif.id_tarif = tarif.id_tarif
                                  GROUP by waktu_awal
                                ");

$tampilkan_member = mysql_query("SELECT username,alamat,no_telp
                                 FROM member,pelanggan
                                 WHERE username = '$myuser' AND pelanggan.id_pelanggan=member.id_pelanggan");

$view_limit = mysql_query("select kuota_main from member WHERE id_pelanggan='$myid'");
$limit = mysql_fetch_array($view_limit);
$count_limit = 8 - $limit['kuota_main'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sifut - Sistem Informasi Futsal</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../../assets/css/style_user.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <script src="../../../assets/js/jquery.min.js"></script>
    <script src="../../../assets/js/bootstrap.min.js"></script>

</head>

<body id="lapang" class="index">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="../../index.php">Sifut  </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.html"></a>
                    </li>
                    <li>
                        <a href="../member.php">Beranda</a>
                    </li>
                    <li class="active">
                        <a href="../member.php">Lapang</a>
                    </li>
                    <li>
                        <a href="../../../index.php">Logout Member</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section id="lapang">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Ketersediaan Lapang</h2>
                    <h3 class="section-subheading text-muted">Lapang yang tersedia pada tanggal <span class="color"> <?php echo "$hari, $tanggal"; ?></span></h3>
                </div>
            </div>

            <?php
                $mydate = date('Y-m-d');
                 $mydateplus = date('Y-m-d', strtotime("+7 days"));
            ?>

            <div class="tgl">
                <h5>Pilih Tanggal :</h5>
                 <form action="cari_lapang.php" method="post">
                    <div class="input-group search">
                        <input name="cari" type="date" class="form-control" >
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                  </form>
            </div>


            <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tab-mar-top" id="example">
              <thead>
                  <tr>
                    <th>Waktu</th>
                    <th>Harga</th>
                    <th>Tersedia</th>
                    <th>Lapang 1</th>
                    <th>Lapang 2</th>
                  </tr>
                </thead>
              <tbody>
              <?php

                $tgl = date('Y-m-d');

                while ($tampil_member=mysql_fetch_array($tampilkan_member)){
                  $myalamat = $tampil_member['alamat'];
                  $mytelepon = $tampil_member['no_telp'];
                }

                while ($tampil=mysql_fetch_array($tampilkan)){
                    //<td><span class='sudah_pesan'>Sudah Dipesan</span></td>
                   include "../../../main/format_uang.php";
                    echo "
                        <tr>
                          <td>$tampil[waktu_awal] - $tampil[waktu_akhir]</td>
                          <td>Rp. ".number_format($angka, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);

                          $dipesan = $tampil['booked'];
                        echo
                        "</td>
                          <td>  2 Lapang </td>
                    	";

                        	if ($tampil['lapang'] == 'LP01') {

                        		echo "<td><span class='sudah_pesan'>Sudah Dipesan</span></td>
                        			    <td><a type='button' href='#pesan2$tampil[id_waktu]$tampil[id_tarif]' data-toggle='modal' class='pesan'>Pesan</a></td>";
                        	}
                        	elseif
                        	 ($tampil['lapang'] == 'LP02') {

                        		echo "<td><a type='button' href='#pesan1$tampil[id_waktu]$tampil[id_tarif]' data-toggle='modal' class='pesan'>Pesan</a></td>
                        			  <td><span class='sudah_pesan'>Sudah Dipesan</span></td>";
                        	}
                          elseif
                        	 ($tampil['lapang'] == 'LP01,LP02' or $tampil['lapang'] == 'LP02,LP01') {

                        		echo "<td><span class='sudah_pesan'>Sudah Dipesan</span></td>
                        			    <td><span class='sudah_pesan'>Sudah Dipesan</span></td>";
                        	}
                        	else {
                        		echo "
              									<td><a type='button' href='#pesan1$tampil[id_waktu]$tampil[id_tarif]' data-toggle='modal' class='pesan'>Pesan</a></td>
              									<td><a type='button' href='#pesan2$tampil[id_waktu]$tampil[id_tarif]' data-toggle='modal' class='pesan'>Pesan</a></td>
                        			";
                        	}




                    	echo "

                        </tr>


                        <div class='modal fade' id='pesan1$tampil[id_waktu]$tampil[id_tarif]'  role='dialog'>
                          <div class='modal-dialog dialog-size'>
                            <div class='modal-content content-size'>
                              <form class='form-horizontal' method='POST' action='pesan_lapang.php'>
                                <div class='modal-header color-head'>
                                  <i class='fa fa-user'></i><p> Pesan Lapang</p>
                                </div>
                                <div class='modal-body  body-conf'>
                                  <input type='hidden' name='waktu_awal' value='$tampil[waktu_awal]'>
                                  <input type='hidden' name='waktu_akhir' value='$tampil[waktu_akhir]'>
                                  <input type='hidden' name='lapang' value='LP01'>
                                  <input type='hidden' name='tarif' value='$tampil[harga]'>
                                  <input type='hidden' name='id_waktu' value='$tampil[id_waktu]'>
                                  <input type='hidden' name='tanggal' value='$tgl'>
                                  <input type='hidden' name='nama_pemesan' value='$myuser'>
                                  <input type='hidden' name='alamat' value='$myalamat'>
                                  <input type='hidden' name='no_telp' value='$mytelepon'>
                                  <input type='hidden' name='id_pelanggan' value='$myid'>

                                  <div class='form-group'>
                                    <div class='col-lg-12'>
                                      <input name='tanggal' type='text' class='form-control form-color form-margin' value='$tanggal' disabled>
                                    </div>
                                  </div>
                                  <div class='form-group'>
                                    <div class='col-lg-12'>
                                      <input type='text' class='form-control form-color form-margin' value='$tampil[waktu_awal] - $tampil[waktu_akhir]' disabled>
                                    </div>
                                  </div>
                                  <div class='form-group'>
                                    <div class='col-lg-12'>
                                    <input type='text' class='form-control form-color form-margin' name='tarif' value='Rp. ".number_format($angka, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);
                                    echo
                                    "' disabled>
                                    </div>
                                  </div>
                                  <div class='form-group'>
                                    <div class='col-lg-12'>
                                      <input type='text' class='form-control form-color form-margin' name='lapang' value='Lapang 1' disabled>
                                    </div>
                                  </div>
                                  <div class='form-group'>
                                    <div class='col-lg-12'>
                                      <input type='text' class='form-control form-color form-margin' name='nama_pemesan' value='$myuser' disabled>
                                    </div>
                                  </div>
                                  <div class='form-group'>
                                    <div class='col-lg-12'>
                                      <input type='text' class='form-control form-color form-margin' name='nama_pemesan' value='Sisa main $count_limit Jam ' disabled>
                                    </div>
                                  </div>


                                </div>

                                <div class='modal-footer footer-conf'>
                                  <button class='button-foot-pesan' data-dismiss= 'modal'>Close</button>
                                  <button class='button-foot-pesan' type='submit'>Pesan</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>

                        <div class='modal fade' id='pesan2$tampil[id_waktu]$tampil[id_tarif]'  role='dialog'>
                          <div class='modal-dialog dialog-size'>
                            <div class='modal-content content-size'>
                              <form class='form-horizontal' method='POST' action='pesan_lapang.php'>
                                <div class='modal-header color-head'>
                                  <i class='fa fa-user'></i><p> Pesan Lapang</p>
                                </div>
                                <div class='modal-body  body-conf'>
                                  <input type='hidden' name='waktu_awal' value='$tampil[waktu_awal]'>
                                  <input type='hidden' name='waktu_akhir' value='$tampil[waktu_akhir]'>
                                  <input type='hidden' name='lapang' value='LP02'>
                                  <input type='hidden' name='tarif' value='$tampil[harga]'>
                                  <input type='hidden' name='id_waktu' value='$tampil[id_waktu]'>
                                  <input type='hidden' name='tanggal' value='$tgl'>
                                  <input type='hidden' name='nama_pemesan' value='$myuser'>
                                  <input type='hidden' name='alamat' value='$myalamat'>
                                  <input type='hidden' name='no_telp' value='$mytelepon'>
                                  <input type='hidden' name='id_pelanggan' value='$myid'>

                                  <div class='form-group'>
                                    <div class='col-lg-12'>
                                      <input name='tanggal' type='text' class='form-control form-color form-margin' value='$tanggal' disabled>
                                    </div>
                                  </div>
                                  <div class='form-group'>
                                    <div class='col-lg-12'>
                                      <input type='text' class='form-control form-color form-margin' value='$tampil[waktu_awal] - $tampil[waktu_akhir]' disabled>
                                    </div>
                                  </div>
                                  <div class='form-group'>
                                    <div class='col-lg-12'>
                                    <input type='text' class='form-control form-color form-margin' name='tarif' value='Rp. ".number_format($angka, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);
                                    echo
                                    "' disabled>
                                    </div>
                                  </div>
                                  <div class='form-group'>
                                    <div class='col-lg-12'>
                                      <input type='text' class='form-control form-color form-margin' name='lapang' value='Lapang 2' disabled>
                                    </div>
                                  </div>
                                  <div class='form-group'>
                                    <div class='col-lg-12'>
                                      <input type='text' class='form-control form-color form-margin' name='nama_pemesan' value='$myuser' disabled>
                                    </div>
                                  </div>


                                </div>

                                <div class='modal-footer footer-conf'>
                                  <button class='button-foot-pesan' data-dismiss= 'modal'>Close</button>
                                  <button class='button-foot-pesan' type='submit'>Pesan</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>



                        ";
                        }
                    ?>





        </div>
    </section>



   <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/js/agency.js"></script>
</body>
