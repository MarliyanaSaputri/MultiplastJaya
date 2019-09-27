<?php

include 'koneksi.php';

require('pdf/fpdf.php');

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
$pdf->Image('pdf/logo.jpg',1,1,2,2);
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
$pdf->Cell(25.5,0.7,"Laporan Data Selector",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Kode Selector', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama Karyawan', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'kode Barang', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Hasil ', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'harga', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'jumlah', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$kode =$_GET['nik'];
$query=mysqli_query($konek,"select * from master_selector where nik=$kode");
while($lihat=mysqli_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['kd_selector'],1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['nama_karyawan'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['kd_barang'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['hasil_jadi'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $lihat['harga'], 1, 0,'C');

	$pdf->Cell(2, 0.8, $lihat['total'], 1, 1,'C');

	$no++;

}
$pdf->Output("laporan_buku.pdf","I");

?>