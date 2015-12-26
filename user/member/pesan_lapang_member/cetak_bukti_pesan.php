<?php
session_start();
$kode_pesan = $_SESSION['kode_pesan'];
$nama_pemesan = $_SESSION['nama_pemesan'];


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



include "../../../main/connection.php";
	$strhtml = '<div class="title">TUBAGUS FUTSAL CLUB</div>
					<div class="stat">Jl. Tubagus Ismail V No. 17 Bandung</div>
					<div class="sub-title">BUKTI SEWA LAPANG</div>
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
							<td>Dipesan Oleh</td>
							<td>: '.$nama_pemesan.' </td>
						</tr>
            <tr>
              <td>Kode Pesan</td>
              <td>: '.$kode_pesan.' </td>
            </tr>
					</table><br>';
	$strhtml .= "<table class='table'>
					<tr>
			          <th>Nama Lapang</th>
			          <th>Tanggal</th>
			          <th>Mulai</th>
			          <th>Selesai</th>
			          <th>Harga</th>
			          <th>Total</th>

			        </tr>";
	$no = 0;
	$tampilkan = mysql_query("SELECT lapang.nama,pemesanan.tanggal_pesan,
																		DATE_FORMAT(waktu_awal, '%H:%i') as waktu_awal,
                                   	DATE_FORMAT(waktu_akhir, '%H:%i') as waktu_akhir,
																		pemesanan.tarif
														FROM pemesanan,lapang,waktu
														WHERE
														pemesanan.id_waktu = waktu.id_waktu AND
														pemesanan.id_lapang = Lapang.id_lapang AND
														kode_pesan = $kode_pesan");
	while ($tampil=mysql_fetch_array($tampilkan)){

		$date = $tampil[tanggal_pesan];
		$BulanIndo = array("Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agt", "Sep", "Okt", "Nov", "Des");
	  $tahun = substr($date, 0, 4);
	  $bulan = substr($date, 5, 2);
	  $tgl   = substr($date, 8, 2);
	  $tanggal = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;

		$angka = $tampil[tarif];
      $jumlah_desimal ="0";
      $pemisah_desimal =",";
      $pemisah_ribuan =".";

	$strhtml .= "<tr><td>$tampil[nama]</td>
			         <td>$tanggal</td>
			         <td>$tampil[waktu_awal]</td>
			         <td>$tampil[waktu_akhir]</td>
			         <td>Rp. ".number_format($angka, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."</td>
							 <td>Rp. ".number_format($angka, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."</td>
			      </tr>";
	}
	$strhtml .= "</table>";

// Panggil mPdf
require('../../../assets/vendor/mpdf/mpdf.php');
$stylesheet1 = file_get_contents('../../../assets/css/bootstrap.min.css');
$stylesheet2 = file_get_contents('../../../assets/css/cetak.css');
$fileName = 'Bukti Pesan';

//$mpdf = new mPDF('utf-8', 'A4', 0, '', 10, 10, 5, 1, 1, 1, '');
//$mpdf = new mPDF('utf-8','A4-L');
$mpdf = new mPDF('utf-8',array(210,148));

//$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($stylesheet1,1);
$mpdf->WriteHTML($stylesheet2,1);
$mpdf->WriteHTML($strhtml);
$mpdf->cacheTables = true;
$mpdf->Output();
//$mpdf->Output();
