<?php
include 'koneksi.php';
$kode =$_GET['nik'];

$data = mysqli_query ($konek,"DELETE  FROM master_karyawan WHERE nik='$kode'") or die("error hapus data".mysql_error());
	
	header ("location:?page=datakaryawan");
?>