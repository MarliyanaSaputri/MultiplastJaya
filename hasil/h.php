<?php
include 'koneksi.php';
if(isset($_POST['simpan'])) {
$kode =$_GET['kd_selector'];

$data = mysqli_query ($konek,"select * FROM master_selector WHERE kd_selector='$kode'") or die("error hapus data".mysql_error());
	
	header ("location:?page=hpersonil");
	}
?>