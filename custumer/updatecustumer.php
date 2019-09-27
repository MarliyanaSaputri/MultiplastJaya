<?php
if(isset($_POST['simpan'])) {
	include 'koneksi.php';
	$kode 		= $_POST['kd_custumer'];
	$nama 		= $_POST['nama_custumer'];
	$alk	= $_POST['alamat_kantor'];
	$alp 	= $_POST['alamat_pengiriman'];
	$kotk	= $_POST['kota_kantor'];
	$kotp	= $_POST['kota_pengirim'];
	$telpk	= $_POST['telp_kantor'];
	$telpp	= $_POST['telp_pengirim'];
	
	
		$data = mysqli_query($konek,"update master_custumer set nama_custumer='$nama',alamat_kantor='$alk',alamat_pengiriman='$alp',kota_kantor='$$kotk',kota_pengirim='$kotp',telp_kantor='$telpk',telp_pengirim='$telpp' where kd_custumer='$kode'");
		if($data){
			header("location:?page=datacustumer");
		}else{
			echo  "maaf anda kurang beruntung";
		}
}
?>