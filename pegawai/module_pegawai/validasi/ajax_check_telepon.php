<?php
include('connection.php');//Include The Database Connection File
  if(isset($_POST['telp'])){//If a telp has been submitted
    $telp = mysql_real_escape_string($_POST['telp']);//Some clean up :)
    $check_for_telp = mysql_query("SELECT telp FROM admin WHERE telp='$telp'");//Query to check if telp is available or not

      if(mysql_num_rows($check_for_telp))
      {
        echo '1';//If there is a  record match in the Database - Not Available
      }
      else
      {
        echo '0';//No Record Found - Username is available
      }
  }

?>
