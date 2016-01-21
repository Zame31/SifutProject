<?php
include "../../main/format_hari_ini.php";
include "../../main/connection.php";

$strhtml = '<div class="title">SEMINAR KAMPUS</div>
				<div class="stat">Jl. Kemana Saja Hatiku Senang - Bandung</div>
				<div class="sub-title">LAPORAN DATA pegawai</div>
				<div class="sub-stat">TAHUN 2015/2016</div>
				<table>
					<tr>
						<td width=150px>Tanggal Dicetak</td>
						<td>: '.$hari . ", ".$tanggal." ".$bulan." ".$tahun.'</td>
					</tr>
					<tr>
						<td>Pukul</td>
						<td>: '.date("h:i:sa").'</td>
					</tr>
					<tr>
						<td>Oleh</td>
						<td>: pegawai</td>
					</tr>
				</table><br>';
$strhtml .= "<table class='table'>
				<tr>
		          <th>No</th>
		          <th>Username</th>
		          <th>Nama Lengkap</th>
		          <th>Alamat</th>
		          <th>E-Mail</th>
		          <th>Telp/HP</th>
		          <th>Blokir</th>
		        </tr>";
	$no = 0;
	$tampil_pegawai = mysql_query("SELECT * FROM pegawai ORDER BY username");
	while ($tampil=mysql_fetch_array($tampil_pegawai)){
	$no++;
	$strhtml .= "<tr><td>$no</td>
			         <td>$tampil[username]</td>
			         <td>$tampil[nama_lengkap]</td>
			         <td>$tampil[alamat]</td>
			         <td>$tampil[email]</td>
			         <td>$tampil[telp]</td>
			         <td align=center>$tampil[blokir]</td>
		        </tr>";
	}
	$strhtml .= "</table>";

// Panggil mPdf
require('../../assets/vendor/mpdf/mpdf.php');
$stylesheet1 = file_get_contents('../../assets/css/bootstrap.min.css');
$stylesheet2 = file_get_contents('../../assets/css/cetak.css');
//$fileName = 'reportPdf--' . date('d-m-Y') . '-' . date('h.i.s');

//$mpdf = new mPDF('utf-8', 'A4', 0, '', 10, 10, 5, 1, 1, 1, '');
//$mpdf = new mPDF('utf-8','A4-L');
$mpdf = new mPDF('utf-8',array(330,216)); //ukuran Kertas F4

//$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($stylesheet1,1);
$mpdf->WriteHTML($stylesheet2,1);
$mpdf->WriteHTML($strhtml);
$mpdf->cacheTables = true;
//$mpdf->Output('files/' . $fileName. '.pdf','D');
$mpdf->Output();