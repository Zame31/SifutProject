<?php
include "../../main/format_hari_ini.php";
include "../../main/connection.php";

$strhtml = '<div class="title">ZENWALK DISTRO</div>
				<div class="stat">Jl. Titimplik no.29 Kec. Coblong, Dipati Ukur</div>
				<div class="sub-title">LAPORAN DATA ORDER</div>
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
				    <th>Tanggal Order</th>
				    <th>No Order</th>
				    <th>Total Harga</th>
				    <th>Status</th>
				    <th>Kode Customer</th>
				    
		        </tr>";
	$no = 0;
	$tampil_admin = mysql_query("SELECT *
								 FROM order_barang 
								 ");
	while ($tampil=mysql_fetch_array($tampil_admin)){
	$no++;
	$strhtml .= "<tr> <td>$no</td>
					 <td>$tampil[tgl_order]</td>
					 <td>$tampil[noorder]</td>
					 <td>$tampil[total_harga]</td>
					 <td>$tampil[status]</td>
					 <td>$tampil[kode_customer]</td>
					 
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
