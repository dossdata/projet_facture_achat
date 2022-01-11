<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf->addPage('L',null,0);

$pdf->SetFont('Arial','B',30);
$pdf->Cell(0,12,"CONSULTATION",1,2,'C');
$pdf->Ln();
$pdf->SetFont('Arial','i',10);
$pdf->Cell(0,0,"notre sante est bien notre sante est biennotre sante
 est biennotre sante est bien notre sante est biennotre sante est biennotre sante",0,0,'L');
$pdf->Ln();
$pdf->Cell(0,10,"notre sante est bien notre sante est biennotre 
sante est biennotre sante est bien notre sante est biennotre sante est biennotre sante",0,0,'L');
$pdf->Ln(); 

$pdf->Cell(0,10,"Note script",0,0,'R');
$pdf->Ln(); 
$pdf->Cell(20,12,"N",1,0,'L');
$pdf->Cell(20,12,"DATE",1,0,'C');
$pdf->Cell(40,12,"COMPTE",1,0,'C');
$pdf->Cell(20,12,"JOURNAL",1,0,'C');
$pdf->Cell(20,12,"LIBELLE",1,0,'C');
$pdf->Cell(20,12,"DEBIT",1,0,'C');
$pdf->Cell(20,12,"CREDIT",1,0,'C');
$pdf->Ln();

for($i = 0; $i < 5; $i++){
    $pdf->Cell(20,12,"N". $i,1,0,'L');
    $pdf->Cell(20,12,"DATE". ($i +1) ,1,0,'C');
    $pdf->Cell(40,12,"COMPTE". "5012". $i,1,0,'C');
    $pdf->Cell(20,12,"JOURNAL",1,0,'C');
    $pdf->Cell(20,12,"LIBELLE",1,0,'C');
    $pdf->Cell(20,12,"DEBIT",1,0,'C');
    $pdf->Cell(20,12,"CREDIT",1,0,'C');
    $pdf->Ln();
}

$pdf->Image('logo.png',40,140,60,60);
$pdf->Output();
