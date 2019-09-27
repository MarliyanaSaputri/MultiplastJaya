<?php
if(isset($_POST['simpan'])) {
	include 'koneksi.php';
	$kode 		= $_POST['kd_selector'];
	$nm 		= $_POST['tanggal'];
	$alk	= $_POST['nik'];
	$alp 	= $_POST['nama_karyawan'];
	$dia 	= $_POST['kd_barang'];
	$pj 	= $_POST['nama_barang'];
	$hg 	= $_POST['kd_custumer'];
	$hj 	= $_POST['hasil_jadi'];
	$rj 	= $_POST['reject'];
	$jt 	= $_POST['jenis_trx'];
	$jmj	= $_POST['jumlah_jam'];
	$harg 	= $_POST['harga'];
	$total 	= $_POST['total'];
	$data = mysqli_query($konek,"UPDATE `master_selector` SET `tanggal`='$nm',`nik`='$alk',`nama_karyawan`='$alp',`kd_barang`='$dia',`kd_custumer`='$hg',`hasil_jadi`='$hj',`reject`='$rj',`jenis_trx`='$jt',`jumlah_jam`='$jmj',`harga`='$harg',`total`='$total',`keterangan`=NULL,`qty`=NULL WHERE 'kd_selector'=$kode ");
	if($data){
			header("location:?page=selector");
		}else{
			echo  "maaf anda kurang beruntung";
		}
}
?>