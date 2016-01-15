<?php
require('../../assets/vendor/fpdf17/fpdf.php');
include "../../main/connection.php";
//require('mc_table.php');
class PDF extends FPDF
{
// Load data
function LoadData($file)
{
	// Read file lines
	$lines = file($file);
	$data = array();
	foreach($lines as $line)
		$data[] = explode(';',trim($line));
	return $data;
}
function LoadDataFromSQL($sql)
{
	$hasil=mysql_query($sql) or die(mysql_error());
	$data = array();
	while($rows=mysql_fetch_array($hasil)){
		$data[] = $rows;
}
	return $data;
}

//Warna Table
function FancyTable($header, $data)
{
	//Judul Table
	$judul = "LAPORAN DATA LAPANGAN";
	$this->SetFont('Arial','','14');
	$this->Cell(0,2, $judul, '0', 1, 'C');

	// Warna Table dan Font table
	$this->SetFillColor(86,142,255);
	$this->SetTextColor(255,255,255);
	$this->SetDrawColor(244,244,244);
	$this->SetFont('Arial','B','12');
	
	//Ukuran Colom Header
	$w = array( 1,4,5,6,6,4,0);
	
	//Nomber
	$this->SetFont('Arial','B','11');
	$this->Cell($w[0],1,$header[0],0,0,'C',true);
	
	//header 
	for($i=1;$i<count($header);$i++)
		$this->Cell($w[$i],1,$header[$i],0,0,'L',true);
	$this->Ln();
	
	// Color and font restoration
	$this->SetFillColor(244,244,244);
	$this->SetTextColor(0);
	$this->SetFont('Arial','','11');
	
	// Data table
	$fill = false;
	$j=1;
	foreach($data as $row)
	{
		$this->Cell($w[0],1,$j,'L',0,'C',$fill);
		$this->Cell($w[1],1,$row[0],'',0,'L',$fill);
		$this->Cell($w[2],1,$row[1],'R',0,'L',$fill);
		$this->Cell($w[3],1,$row[2],'R',0,'L',$fill);
		$this->Cell($w[4],1,$row[3],'R',0,'L',$fill);
		$this->Cell($w[5],1,$row[4],'R',0,'L',$fill);
		$this->Cell($w[6],1,$row[5],'R',0,'C',$fill);
		$this->Ln();
		$fill = !$fill;
		$j++;
	}
	// Closing line
	$this->Cell(array_sum($w),0,'','');
}
}

$pdf = new PDF('L','cm','A4'); //ukuran kertas

// Nama Kolom Heading
$header = array('No', 'ID Lapang', 'Nama','Aktif');

// Data loading
$query="select id_lapang,nama,aktif from lapang";
 
$data = $pdf->LoadDataFromSQL($query);
$pdf->SetFont('Arial','',9);
$pdf->AddPage();

$pdf->FancyTable($header,$data);
$pdf->Output();
?>