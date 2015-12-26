<?php
session_start();
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
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/css/style_user.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

      <!-- jQuery -->
    <script src="../../assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
   </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand page-scroll" href="member.php">Sifut  </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.html"></a>
                    </li>
                    <li class="active">
                        <a href="../member.php">Beranda</a>
                    </li>
                    <li >
                        <a href="pesan_lapang_member/lapang.php">Lapang</a>
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

    <section class="member" id="member">
        <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <span class="title-member">
                    <?php
                        $myuser = $_SESSION['username'];
                        $mypass = $_SESSION['password'];
                        $mykode = $_SESSION['kode'];
                        echo "Selamat Datang, $myuser !";
                    ?>

                    <span class="sub-title-member">selamat menikmati fasilitas yang kami sediakan</span>

                </span>
            </div>
            <div class="col-lg-5">
                <!--<div class="langganan">Langganan aktif sampai dengan : 02 Desember 2016</div>
                <div class="no-langganan">Tidak Berlangganan</div>-->
            </div>
        </div>
        <div class="fitur">
            <div class="row">
                <div class="col-md-2">
                    <a href="pesan_lapang_member/lapang.php" class="f-fitur">
                        <i class="fa fa-user"></i>
                        <span class="title-fitur">Pesan Lapang</span>
                    </a>
                </div>
                <div class="col-md-2">
                    <a data-toggle="modal" href="#pembayaran" class="f-fitur">
                        <i class="fa fa-user"></i>
                        <span class="title-fitur">Konfirmasi Pembayaran</span>
                    </a>
                </div>
                <!--<div class="col-md-2">
                    <a data-toggle="modal" href="#langganan" class="f-fitur">
                        <i class="fa fa-user"></i>
                        <span class="title-fitur">Berlangganan</span>
                    </a>
                </div>-->
            </div>
        </div>
        </div>
    </section>
    <div class="sm-modal modal fade" id="pembayaran" role="dialog">
      <div class="modal-dialog dialog-size">
        <div class="modal-content content-size">
         <form method="post" action="pembayaran.php" onSubmit="return validasi(this)" class="form-horizontal">
            <div class="modal-header color-head">
              <i class="fa fa-user"></i>
            </div>
            <div class="modal-body body-conf">
                <div class="head">Konfirmasi Pembayaran</div>
                <div class="desc">apabila sudah melakukan pembayaran, silahkan konfirmasi disini</div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="noorder" placeholder="Nomer Order">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="kode_customer" placeholder="Kode Customer">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="no_rek" placeholder="Nomer Rekening">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="jumlah_uang" placeholder="Jumlah Uang yg DiTransfer">
                  </div>
                </div>

            </div>
            <div class="modal-footer">
              <button class="button-foot" type="submit">Konfirmasi</button>
              <button class="button-foot" data-dismiss= "modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="sm-modal modal fade" id="langganan" role="dialog">
      <div class="modal-dialog dialog-size">
        <div class="modal-content content-size">
         <form method="post" action="pembayaran.php" onSubmit="return validasi(this)" class="form-horizontal">
            <div class="modal-header color-head">
              <i class="fa fa-user"></i>
            </div>
            <div class="modal-body body-conf">
                <div class="head">Belangganan</div>
                <div class="desc">apabila sudah melakukan pembayaran, silahkan konfirmasi disini</div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="noorder" placeholder="Nomer Order">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="kode_customer" placeholder="Kode Customer">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="no_rek" placeholder="Nomer Rekening">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="jumlah_uang" placeholder="Jumlah Uang yg DiTransfer">
                  </div>
                </div>

            </div>
            <div class="modal-footer">
              <button class="button-foot" type="submit">Konfirmasi</button>
              <button class="button-foot" data-dismiss= "modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>