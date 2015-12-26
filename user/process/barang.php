

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ZenWalk Distro</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/style_user.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
      <!-- jQuery -->
    <script src="../assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>

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
                <a class="navbar-brand page-scroll" href="member.php">ZenWalk Distro  </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.html"></a>
                    </li>
                     <li>
                        <a href="member.php">Beranda</a>
                    </li>
                    <li>
                        <a href="../index.php">Logout Member</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<?php
    session_start();
    include "../main/connection.php"; 
    $tampilkan = mysql_query("SELECT * FROM barang ORDER BY kodebarang");
  ?>
  <section class="list-seminar" id="list-seminar">
    <div class="container">
      <div class="row">
      <?php 
         while ($tampil=mysql_fetch_array($tampilkan)){
         
      echo "  
        <div class='col-md-3'>
          <div class='seminar'>
            <img src='../pegawai/pic/pic_barang/$tampil[gambar]' class='img-size'/>
            <div class='info'>
              <span class='title'>$tampil[namabarang]</span>
              <table border='0'>
                <tr> 
                  <td>Harga </td>
                  <td> : $tampil[harga] </td>
                </tr>
                <tr> 
                  <td>Stok </td>
                  <td> : $tampil[stok] </td>
                </tr> 
              </table>
              
             
            </div>
            <div class='daftar'>
              <a type='button' class='btn btn-default' href='#detail$tampil[kodebarang]' data-toggle='modal'>Detail</a>
              <a type='button' class='btn btn-default' href='#beli$tampil[kodebarang]' data-toggle='modal'>Pesan Barang</a>
            </div>
          </div>
        </div>";
       
        echo "
          <div class='modal fade' id='detail$tampil[kodebarang]'  role='dialog'>
            <div class='modal-dialog'>
              <div class='modal-content'>
                 <img src='../pegawai/pic/pic_barang/$tampil[gambar]' class='img-responsive' />
              </div>
            </div>
          </div>
          
          <div class='modal fade' id='beli$tampil[kodebarang]' role='dialog'>
            <div class='modal-dialog'>
              <div class='modal-content'>
                <form class='form-horizontal' method='POST' action='action_user.php'>
                <div class='modal-header'>
                  <p> Beli Barang</p>
                </div>
                <div class='modal-body'>
                  <input type='hidden' name='kodebarang' value='$tampil[kodebarang]'>
                  <input type='hidden' name='namabarang' value='$tampil[namabarang]'>
                  <input type='hidden' name='harga' value='$tampil[harga]'>
                  <div class='form-group'>
                    <label class='col-lg-3 control-label'> Kode Barang</label>
                    <div class='col-lg-9'>
                      <input type='text' class='form-control' name='kodebarang' value='$tampil[kodebarang]' disabled>
                    </div>
                  </div>
                   <div class='form-group'>
                    <label class='col-lg-3 control-label'> Nama Barang</label>
                    <div class='col-lg-9'>
                      <input type='text' class='form-control' name='namabarang' value='$tampil[namabarang]' disabled>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-lg-3 control-label'> Harga</label>
                    <div class='col-lg-9'>
                      <input type='text' class='form-control' name='harga' value='$tampil[harga]' disabled>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-lg-3 control-label'> Jumlah Beli</label>
                    <div class='col-lg-9'>
                      <input type='text' class='form-control' name='jumlah' placeholder='Jumlah Beli'>
                    </div>
                  </div>
                  
                 
                </div>
                <div class='modal-footer'>
                  <button class='button-foot' data-dismiss= 'modal'>Close</button>
                  <button class='button-foot' type='submit'>Beli</button>
                </div>
                </form> 
              </div>
            </div>
          </div>
      
        ";
        }
       ?>
      </div>
    </div>
  </section>

  </body>