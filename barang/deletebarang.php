<?php
include 'koneksi.php';
$kode =$_GET['kd_barang'];

$data = mysqli_query ($konek,"DELETE  FROM master_barang WHERE kd_barang='$kode'") or die("error hapus data".mysql_error());
	
	header ("location:?page=databarang");
?>