
<?php
if(isset($_POST['simpan'])) {
	include 'koneksi.php';
	$kode 		= $_POST['kd_selector'];
	$tanggal =substr ($_POST['tanggal'],5,2) .'/'.substr($_POST['tanggal'],8,2).'/'.substr($_POST['tanggal'],0,4);

	//$tanggal 		= $_POST['tanggal'];
	$nik 		= $_POST['nik'];
	$nmk	= $_POST['nama_karyawan'];
	$kdb 	= $_POST['kd_barang'];
	$kdk	= $_POST['kd_custumer'];
	$hsl 	= $_POST['hasil_jadi'];
	$hld	= $_POST['hold'];
	$rj 	= $_POST['reject'];
	
	//$jn 	= $_POST['jenis_trx'];
	$jj 	= $_POST['jumlah_jam'];
	
	$hg 	= $_POST['harga'];
	//$totl 	= $_POST['total'];
	//$kt 	= $_POST['keterangan'];
	//$qty 	= $_POST['qty'];
	
	$data = mysqli_query($konek,"UPDATE `master_selector` SET `tanggal`=$tanggal,`nik`=$nik,`nama_karyawan`=$nmk,`kd_barang`=$kdb,`kd_custumer`=$kdk,`hasil_jadi`=$hsl,`hold`=[value-8],`reject`=$hld,`jenis_trx`=$jn,`jumlah_jam`=$jj,`harga`=$hg,`total`=$totl,`keterangan`=$kt,`qty`=$qty WHERE 'kd_selector'=$kode ");
	if($data){
			header("location:?page=selector");
		}else{
			echo  "maaf anda kurang beruntung";
		}
}
?>