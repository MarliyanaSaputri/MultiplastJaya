<?php
if(isset($_POST['simpan'])) {
	include 'koneksi.php';
	$kode 		= $_POST['nik'];
	$nm 		= $_POST['nama_karyawan'];
	$alk	= $_POST['bagian'];
	$jabatan	= $_POST['jabatan'];
	$gjh		=$_POST['gaji_perjam'];
	$gjb		=$_POST['gaji_borongan'];
	
	
		$data = mysqli_query($konek,"INSERT INTO master_karyawan VALUES('$kode','$nm','$alk','$jabatan','$gjh','$gjb')");
		if($data){
			header("location:?page=datakaryawan");
		}else{
			echo  "maaf anda kurang beruntung";
		}
}
?>