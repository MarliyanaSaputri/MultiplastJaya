<?php
if(isset($_POST['simpan'])) {
	include 'koneksi.php';
	$kode 		= $_POST['nik'];
	$nama 		= $_POST['nama_karyawan'];
	$bagian	= $_POST['bagian'];
	$jabatan	= $_POST['jabatan'];
		$gjh		=$_POST['gaji_perjam'];
	$gjb		=$_POST['gaji_borongan'];
	
		$data = mysqli_query($konek,"update master_karyawan set nama_karyawan='$nama',bagian='$bagian',jabatan='$jabatan', gaji_perjam='$gjh', gaji_borongan='$gjb' where nik='$kode'");
		if($data){
			header("location:?page=datakaryawan");
		}else{
			echo  "maaf anda kurang beruntung";
		}
}
?>