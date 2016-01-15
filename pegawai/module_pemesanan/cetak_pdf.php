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
	$strhtml = '<div class="title">SIFUT</div>
					<div class="stat">Jl. Kemana Saja Hatiku Senang - Bandung</div>
					<div class="sub-title">LAPORAN DATA PEMESANAN</div>
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
							<td>: Petugas</td>
						</tr>
					</table><br>';
	$strhtml .= "<table class='table'>
					<tr>
			          <th>No</th>
			          <th>Kode Pesan</th>
			          <th>Tanggal Pesan</th>
			          <th>Status Pemesan</th>
			          <th>Id Lapang</th>
			          <th>Id Waktu</th>
			          <th>Tarif</th>
			          <th>Status</th>
			          <th>Id Pelanggan</th>



			          
			        </tr>";
	$no = 0;
	$tampil_mahasiswa = mysql_query("SELECT * FROM pemesanan ORDER BY kode_pesan");
	while ($tampil=mysql_fetch_array($tampil_mahasiswa)){
	$no++;
	$angka = $tampil[tarif];
      $jumlah_desimal ="0";
      $pemisah_desimal =",";
      $pemisah_ribuan =".";

	$strhtml .= "<tr><td>$no</td>
			         <td>$tampil[kode_pesan]</td>
			         <td>$tampil[tanggal_pesan]</td>
			         <td>$tampil[status_pemesan]</td>
			         <td>$tampil[id_lapang]</td>
			         <td>$tampil[id_waktu]</td>
			         <td>Rp. ".number_format($angka, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."</td>
			         <td>$tampil[status]</td>
			         <td>$tampil[id_pelanggan]</td>
			         
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
