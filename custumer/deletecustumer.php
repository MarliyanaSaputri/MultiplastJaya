<?php
include 'koneksi.php';
$kode =$_GET['kd_custumer'];

$data = mysqli_query ($konek,"DELETE  FROM master_custumer WHERE kd_custumer='$kode'") or die("error hapus data".mysql_error());
	
	header ("location:?page=datacustumer");
?>