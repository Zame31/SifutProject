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
  <meta name="keywords" content="learning, website" />
  <meta name="author" content="Zamzam Nurzaman" />
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style_pegawai.css">
  <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,900,900italic,700italic%7COswald:400,300,700" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
</head>
<body class="loginadm2">
  <div class="container">
    <div class="form-login">
      <div class="row">
        <div class="col-md-5">
          <div class="title-login">
            Sistem Informasi Futsal<span class="blue"> Tubagus Futsal Club</span>
            <span class="sub">Ver 1.0</span>
          </div>
        </div>
        <div class="col-md-7">
          <form method="post" action="../main/check_login.php" onSubmit="return validasi(this)">
            <i href="#" class="fa fa-user"></i><input class="form-control" type="text" placeholder="username" name="username" required>
             <i href="#" class="fa fa-lock"></i><input class="form-control" type="password" placeholder="password" name="password" required>

             <button type="submit" class="button">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
