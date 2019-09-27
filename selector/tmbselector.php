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
		//$data = mysqli_query($konek,"INSERT INTO `master_selector` (`kd_selector`, `tanggal`, `nik`, `nama_karyawan`, `kd_barang`, `nama_barang`, `kd_custumer`, `hasil_jadi`, `reject`, `jenis_trx`, `jumlah_jam`, `harga`, `total`, `qty`, `keterangan`) VALUES ($_POST['kd_selector'],$_POST['tanggal'],$_POST['nik'],$_POST['nama_karyawan'],$_POST['kd_barang'],$_POST['nama_barang'],$_POST['kd_custumer'],$_POST['hasil_jadi'],$_POST['reject'],$_POST['jenis_trx'],$_POST['jumlah_jam'],$_POST['harga'],$_POST['total'],'NULL','NULL')");
		
				$data = mysqli_query($konek,"INSERT INTO master_selector VALUES('$kode','$nm','$alk','$alp','$dia','$pj','$hg','$hj','$rj','$jt','$jmj','$harg','$total',NULL,NULL)");
		
		if($data){
			header("location:?page=selector");
		}else{
			echo  "maaf anda kurang beruntung";
		}
}
?>