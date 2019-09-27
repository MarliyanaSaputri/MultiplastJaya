<?php
if(isset($_POST['simpan'])) {
	include 'koneksi.php';
	$kode 		= $_POST['kd_barang'];
	$nm 		= $_POST['nama_barang'];
	$alk	= $_POST['berat(gr)'];
	
	$alp 	= $_POST['stok_qty'];
	$dia 	= $_POST['diameter'];
	$pj 	= $_POST['panjang'];
	$hg 	= $_POST['harga'];
		$data = mysqli_query($konek,"INSERT INTO master_barang VALUES('$kode','$nm','$alk','$alp','$dia','$pj','$hg')");
		if($data){
			header("location:?page=databarang");
		}else{
			echo  "maaf anda kurang beruntung";
		}
}
?>