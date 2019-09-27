<?php
include 'koneksi.php';
require('./pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);

$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'PT.MULTIPLASTJAYA TATAMANDIRI',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Phone : +62318914455',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->Image('./pdf/logo.jpg',1,1,2,2);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Jl.Nangka 99 ,Desa Sruni,Gedangan Sidoarjo 61254 - Indonesia',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.multiplastjaya.co.id  email : multiplastjaya@yahoo.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Barang",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Kode Barang', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama Barang', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Berat', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Stok ', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Panjang', 1, 1, 'C');

$pdf->SetFont('Arial','',10);
$no=1;
$query=mysqli_query($konek,"select * from master_barang");
while($lihat=mysqli_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['kd_barang'],1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['nama_barang'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['berat(gr)'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['stok_qty'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['panjang']  , 1, 1,'C');

	//$pdf->Cell(2, 0.8, $lihat[''], 1, 1,'C');

	$no++;
}

$pdf->Output("laporan_barang.pdf","I");

?>

