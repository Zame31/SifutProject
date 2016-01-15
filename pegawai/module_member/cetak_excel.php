<style type="text/css">
  .title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 0px;
  text-align: center;
}
.stat {
  font-size: 14px;
    padding-bottom: 20px;
    
    text-align: center;
}
.sub-title {
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  margin-top: 50px;
}
.sub-stat {
  text-align: center;
  margin-bottom: 40px;
  font-size: 14px;
  font-weight: 100;
}
td {
  padding-bottom: 10px;
}

</style>
<?php
include "../../main/format_hari_ini.php";

echo '
<div class="title">SIFUT </div>
          <div class="stat">Jl. Kemana Saja Hatiku Senang - Bandung</div>
          <hr size="2">
          <div class="sub-title">LAPORAN DATA MEMBER</div>
          <div class="sub-stat">TAHUN 2015/2016</div>
          <br>
          Tanggal Dicetak : '.$hari . ", ".$tanggal." ".$bulan." ".$tahun.'
          <br>
          Pukul : '.date("h:i:sa").'
          <br>
          Oleh : Petugas
          
            <br>
'
?>
<br>
<br>
<table border="1">
  <?php include "table/table_header.php"; ?>
  </tr>
      </thead>
      <tbody border="1">
<?php
	include "../../main/connection.php";
	$tampilkan = mysql_query("SELECT * FROM member ORDER BY id_member");        
    $no=1;
    while ($tampil=mysql_fetch_array($tampilkan)){
       include "table/table_body.php";
        $no++;
    }
  echo "
        </tr>
        </tbody>
        </table>
        </div>";
?>