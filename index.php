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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/style_user.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/fonts/myfonts.css" rel="stylesheet" type="text/css">

      <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Scroll -->
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
   </script>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
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
                <a class="navbar-brand scroll" href="#page-top">SIFUT TFC </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a  class="scroll" href="#services">Layanan</a>
                    </li>
                    <li>
                        <a  class="scroll" href="#portfolio">Fasilitas Lapang</a>
                    </li>
                    <li>
                        <a  class="scroll" href="#informasi">informasi</a>
                    </li>
                    <li>
                        <a  class="scroll" href="#kontak">Kontak</a>
                    </li>
                    <li>
                        <a data-toggle="modal" href="#pembayaran">Konfirmasi Pembayaran</a>
                    </li>
                    <li>
                        <a data-toggle="modal" href="#login">Login Member</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">Selamat Datang Di sifut tfc </div>
                <div class="intro-lead-in">mempermudahmu untuk memesan lapangan Futsal secaran online.</div>
                <a href="#daftar" class="page-scroll btn btn-xl" data-toggle="modal">Daftar Member</a>
                <a href="user/pesan_lapang/lapang.php" class="page-scroll btn btn-xl">Pesan Lapang</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Layanan</h2>
                    <h3 class="section-subheading text-muted">Kami menyediakan Beberapa layanan yang bisa kamu gunakan</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Pesan Lapangan Online</h4>
                    <p class="text-muted">Kamu bisa Memesan Lapangan Futsal Secara Online, Dimanapun Dan Kapanpun</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Jadwal Online</h4>
                    <p class="text-muted">Kamu Bisa Melihat Jadwal Futsal Secara Online tanpa harus datang ke tempat, melihat jadwal yang sudah dipesan dan yang bisa kamu pesan </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Member</h4>
                    <p class="text-muted">daftarlah menjadi member dan kamu akan mendapatkan banyak fasilitas tambahan seperti potongan harga dll.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Fasilitas Lapang</h2>
                    <h3 class="section-subheading text-muted">Fasilitas Lapangan yang kami sediakan</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="assets/img/8.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Lapang Sintetis</h4>
                        <p class="text-muted">Tersedia 2 Lapang Sintetis</p>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="assets/img/10.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Parkiran</h4>
                        <p class="text-muted">untuk mobil dan motor</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                       <img src="assets/img/9.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Mushola</h4>
                        <p class="text-muted">Untuk Pria dan Wanita</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- informasi Section -->
    <section id="informasi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Informasi Futsal</h2>
                    <h3 class="section-subheading text-muted">Informasi jadwal Buka, tarif pemesanan dan informasi event/acara</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <span class="head-info">Jadwal Buka</span>
                    <div class="content-info">
                        <div class="hari">Senin - Minggu</div>
                        <div class="waktu">08:00 - 22:00</div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <span class="head-info">Tarif Pemesanan</span>
                    <div class="content-info2">
                        <div class="hari">Senin - Kamis</div>
                        <div class="waktu">08:00 - 15:00</div>
                        <div class="harga">Rp. 130.000,00</div>
                    </div>
                    <div class="content-info2">
                        <div class="hari">Senin - Kamis</div>
                        <div class="waktu">15:00 - 22:00</div>
                        <div class="harga">Rp. 150.000,00</div>
                    </div>
                    <div class="content-info2">
                        <div class="hari">Jum'at - Minggu</div>
                        <div class="waktu">08:00 - 15:00</div>
                        <div class="harga">Rp. 150.000,00</div>
                    </div>
                    <div class="content-info2">
                        <div class="hari">Jum'at - Minggu</div>
                        <div class="waktu">15:00 - 22:00</div>
                        <div class="harga">Rp. 175.000,00</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <span class="head-info">Event/Acara</span>
                    <div class="content-info3">
                        <ul>
                            <li>Ada Turnament Futsal Pada Tanggal 5 - 10 Februari 2016</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Kontak Section -->
   <section id="kontak" class="bg-darkest-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kontak</h2>
                    <h3 class="section-subheading text-muted">Kamu Bisa Menghubungi kami melewati kontak yang kami sediakan</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Telepon/HP</h4>
                    <p class="text-muted">+6285722224444</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">E-Mail</h4>
                    <p class="text-muted">sifut@gmail.com </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Alamat</h4>
                    <p class="text-muted">Jl. Tubagus Ismail 5 no 17</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Sifut | Design by Zame</span>
                </div>
                <div class="col-md-4">

                </div>

            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details informasi your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Lapang Sintetis</h2>
                            <p class="item-intro text-muted">Tersedia 2 Lapang Sintetis</p>
                            <img class="img-responsive img-centered" src="assets/img/8.jpg" alt="">
                            <p>Tubagus Futsal Club Memiliki 2 Lapangan Futsal yang berumput sitentis,
                                dengan lampu penerangan yang baik. Sehingga kamu dapat bermain futsal dengan nyaman.
                                Lapangan sintetis berukuran 18M x 28M dengan lampu LED BRIDGELUX 500 watt yang tidak akan membuat pemain kepanasan.          <p>

                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Parkiran</h2>
                            <p class="item-intro text-muted">untuk mobil dan motor</p>
                            <img class="img-responsive img-centered" src="assets/img/10.jpg" alt="">
                            <p>Tubagus Futsal Club Memiliki parkiran yang luas, dapat menampung mobil dan motor dengan leluasa dan aman
                            <p>

                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Mushola</h2>
                            <p class="item-intro text-muted">untuk Pria dan Wanita</p>
                            <img class="img-responsive img-centered" src="assets/img/9.jpg" alt="">
                            <p>Tubagus Futsal Club Memiliki mushola untuk pria dan wanita, memfasilitasi umat muslim untuk beribadah
                            <p>

                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                            <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                            <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fasilitas -->
   <?php
        include "user/login.php";
        include "user/daftar_member/daftar_form.php";
        include "user/pembayaran/pembayaran_form.php";
   ?>







    <!-- Plugin JavaScript -->

    <script src="assets/js/classie.js"></script>
    <script src="assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/js/agency.js"></script>

</body>

</html>
