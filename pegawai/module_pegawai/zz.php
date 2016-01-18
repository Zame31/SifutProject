<?php
define('FPDF_FONTPATH', 'fpdf/font/');
    require('mc_table.php');
    $pdf=new PDF_MC_Table('P','cm',"Legal");
    $pdf->Open();
    $pdf->AddPage();
    $pdf->AliasNbPages();
    $pdf->SetMargins(1,1,1);
    $pdf->SetFont('times','B',12);

    $pdf->Cell(0,0.9,'Laporan Barang',0,0,'C');
    
    $pdf->Ln();    
    $tgl=date('Y-m-d');
    $pdf->SetFont('times','B',8);

    $pdf->SetFont('times','B',10);
    $pdf->SetWidths(array(1, 8, 1.8, 2.1));
    $pdf->SetHeight(0.1);
    $pdf->Row(array("NO", "NAMA", "SATUAN", "STOK"));
    
    $pdf->SetFont('times','',10);
    $pdf->Row(array("1", "Buku Tulis Matematika Kualitas ABCD Kiki 80 gram 1 Lusin ", "Lusin", "100"));
    $pdf->Output();
?>

