<?php
if(isset($_POST['simpan'])) {
	include 'koneksi.php';
	$kode 		= $_POST['kd_custumer'];
	$nm 		= $_POST['nama_custumer'];
	$alk	= $_POST['alamat_kantor'];
	$alp 	= $_POST['alamat_pengiriman'];
	$ktk	= $_POST['kota_kantor'];
	$ktp 	= $_POST['kota_pengirim'];
	$tlk	= $_POST['telp_kantor'];
	$tlp 	= $_POST['telp_pengirim'];
	
	
		$data = mysqli_query($konek,"INSERT INTO master_custumer VALUES('$kode','$nm','$alk','$alp','$ktk','$ktp','$tlk','$tlp')");
		if($data){
			header("location:?page=datacustumer");
		}else{
			echo  "maaf anda kurang beruntung";
		}
}
?>