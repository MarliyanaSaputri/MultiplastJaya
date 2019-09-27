<?php
if(isset($_POST['simpan'])) {
	include 'koneksi.php';
	$kode 		= $_POST['kd_barang'];
	$nama_barang 		= $_POST['nama_barang'];
	$berat	= $_POST['berat(gr)'];
		$alp 	= $_POST['stok_qty'];
	$dia 	= $_POST['diameter'];
	$pj 	= $_POST['panjang'];
	
	
		$data = mysqli_query($konek ,"UPDATE `master_barang` SET `kd_barang`='$kode',`nama_barang`='$nama_barang',`berat(gr)`='$berat',`stok_qty`='$alp',`diameter`='$dia',`panjang`='$pj'  WHERE `master_barang`.`kd_barang` = '$kode';");
		if($data){
			header("location:?page=databarang");
		}else{
			echo  " beruntung";
		}
}
?>