
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIFUT - Sistem Informasi Futsal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="E-Learning Website" />
  <meta name="keywords" content="website" />
  <meta name="author" content="Zamzam Nurzaman" />
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <!--<link rel="stylesheet" href="assets/css/fonts.css">-->
  <link rel="stylesheet" href="../assets/css/style_pegawai.css">
  <link href="../assets/css/DT_bootstrap.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
  <link href="../assets/fonts/myfonts.css" rel="stylesheet" type="text/css">
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="../assets/js/dataTables.bootstrap.min.js"></script>
  <script src="../assets/js/DT_bootstrap.js"></script>
</head>
<body id="pegawai">
  <div class="container-fluid">
    <ul class="nav nav-pills nav-stacked side-nav">


      <div class="title"><span class="blue">Sifut TFC</span></div>

     <?php include "nav_pegawai.php"; ?>
    </ul>
  <!--CONTENT-->
  <section>
    <?php include "content_pegawai.php"; ?>
  </section>
  </div>


</body>
</html>
