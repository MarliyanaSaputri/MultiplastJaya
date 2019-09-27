<?php
if(isset($_POST['simpan'])) {
	include 'koneksi.php';
	$kode 		= $_POST['kd_barang'];
	$nm 		= $_POST['nama_barang'];
	$alk	= $_POST['berat(gr)'];
	//$alp 	= $_POST['alamat_pengiriman'];
	
	
		$data = mysqli_query($konek,"update master_barang set 'kd_barang'='$kode','nama_barang'='$nm','berat(gr)'='$alk' where 'kd_barang'='$kode'");
		if($data){
			header("location:?page=databarang");
		}else{
			echo  "maaf anda kurang beruntung";
		}
}
?>