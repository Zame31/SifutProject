<?php
date_default_timezone_set('Asia/Jakarta');

//Array Hari
$array_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu");
$hari = $array_hari[date("N")];
//Format Tanggal
$tanggal = date ("j");
//Array Bulan
$array_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
$bulan = $array_bulan[date("n")];
//Format Tahun
$tahun = date("Y");

 

include "../../main/connection.php";
	$strhtml = '<div class="title">SIFUT : TUBAGUS FUTSAL CLUB (TFC)</div>
                    <div class="stat">Jln.Tubagus Ismail 5/ No.17 Dago, Bandung</div>
					<div class="sub-title">LAPORAN DATA MEMBER</div>
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
							<td>: PETUGAS</td>
						</tr>
					</table><br>';
	$strhtml .= "<table class='table'>
					<tr>
			          <th>No</th>
			          <th>ID Pelanggan</th>
			          <th>ID Member</th>
			          <th>Nama</th>
			          <th>Alamat</th>
			          <th>No Telp</th>
			          <th>Email</th>
			          <th>Username</th>
			          <th>Aktif</th>
			          <th>Tanggal Daftar</th>
			          <th>Langganan</th>
			          <th>Kuota Main</th>
			          
			        </tr>";
	$no = 0;
	$tampil_mahasiswa = mysql_query("SELECT * FROM member,Pelanggan ORDER BY id_member");
	while ($tampil=mysql_fetch_array($tampil_mahasiswa)){
	$no++;
	$strhtml .= "<tr><td>$no</td>
			         <td>$tampil[id_pelanggan]</td>
			         <td>$tampil[id_member]</td>
			         <td>$tampil[nama]</td>
			         <td>$tampil[alamat]</td>
			         <td>$tampil[no_telp]</td>
			         <td>$tampil[email]</td>
			         <td>$tampil[username]</td>
			         <td>$tampil[aktif]</td>
			         <td>$tampil[tanggal_daftar]</td>
			         <td>$tampil[langganan]</td>
			         <td>$tampil[kuota_main]</td>
			         
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
$mpdf = new mPDF('utf-8',array(330,216));

//$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($stylesheet1,1);
$mpdf->WriteHTML($stylesheet2,1);
$mpdf->WriteHTML($strhtml);
$mpdf->cacheTables = true;
//$mpdf->Output('files/' . $fileName. '.pdf','D');
$mpdf->Output();
