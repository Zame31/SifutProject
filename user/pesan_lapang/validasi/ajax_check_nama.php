<?php
include('connection.php');//Include The Database Connection File
  if(isset($_POST['nama_pemesan'])){//If a nama_pemesan has been submitted
    $nama_pemesan = mysql_real_escape_string($_POST['nama_pemesan']);//Some clean up :)
    $check_for_nama_pemesan = mysql_query("SELECT nama FROM pelanggan WHERE nama='$nama_pemesan'");//Query to check if nama_pemesan is available or not

      if(mysql_num_rows($check_for_nama_pemesan))
      {
        echo '1';//If there is a  record match in the Database - Not Available
      }
      else
      {
        echo '0';//No Record Found - nama_pemesan is available
      }
  }

?>
