<?php
include "../../main/format_hari_ini.php";
include "../../main/connection.php";

$strhtml = '<div class="title">ZENWALK DISTRO</div>
				<div class="stat">Jl. Titimplik no.29 Kec. Coblong, Dipati Ukur</div>
				<div class="sub-title">LAPORAN DATA CUSTOMER</div>
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
					
				</table><br>';
$strhtml .= "<table class='table'>
				<tr>
				    <th>No</th>
				    <th>Waktu Daftar</th>
				    <th>Kode Customer</th>
				    <th>No KTP/Identitas</th>
				    <th>Nama</th>
				    <th>Alamat</th>
				    <th>Kota</th>
				    <th>Username</th>
		        </tr>";
	$no = 0;
	$tampil_admin = mysql_query("SELECT customer.tgl_daftar,customer.kode_customer,
										person.no_ktp,person.nama,person.jalan,person.kota,person.username 
								 FROM customer,person 
								 WHERE customer.no_ktp=person.no_ktp");
	while ($tampil=mysql_fetch_array($tampil_admin)){
	$no++;
	$strhtml .= "<tr> <td>$no</td>
					 <td>$tampil[tgl_daftar]</td>
					 <td>$tampil[kode_customer]</td>
					 <td>$tampil[no_ktp]</td>
					 <td>$tampil[nama]</td>
					 <td>$tampil[jalan]</td>
					 <td>$tampil[kota]</td>
					 <td>$tampil[username]</td>
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
