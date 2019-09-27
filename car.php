<html>
<head>
	<title>Bank Of Ri32</title>
    <link rel="stylesheet" href="tabel.css" />
</head>
<body onLoad="document.postform.elements['nama_karyawan'].focus();">

<?php
//untuk koneksi database
include "koneksi.php";
	
//untuk menantukan tanggal awal dan tanggal akhir data di database
$min_tanggal=mysqli_fetch_array(mysqli_query($konek,"select min(tanggal) as min_tanggal from master_selector"));
$max_tanggal=mysqli_fetch_array(mysqli_query($konek,"select max(tanggal) as max_tanggal from master_selector"));
?>

<form action="car.php" method="post" name="postform">
<table width="435" border="0">
<tr>
    <td width="111">Nama nama_karyawan</td>
    <td colspan="2"><input type="text" name="nama_karyawan" value="<?php if(isset($_POST['nama_karyawan'])){ echo $_POST['nama_karyawan']; }?>"/></td>
</tr>
<tr>
    <td>Tanggal Awal</td>
    <td colspan="2"><input type="text" name="tanggal_awal" size="15" value="<?php echo $min_tanggal['min_tanggal'];?>"/>
    <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_awal);return false;" ><img src="calender/calender.jpeg" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>				
    </td>
</tr>
<tr>
    <td>Tanggal Akhir</td>
    <td colspan="2"><input type="text" name="tanggal_akhir" size="15" value="<?php echo $max_tanggal['max_tanggal'];?>"/>
    <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_akhir);return false;" ><img src="calender/calender.jpeg" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>				
    </td>
</tr>
<tr>
    <td><input type="submit" value="Tampilkan Data" name="cari"></td>
    <td colspan="2">&nbsp;</td>
</tr>
</table>
</form>
<p>

<?php
//di proses jika sudah klik tombol cari
if(isset($_POST['cari'])){
	
	//menangkap nilai form
	$nama_karyawan=$_POST['nama_karyawan'];
	$tanggal_awal=$_POST['tanggal_awal'];
	$tanggal_akhir=$_POST['tanggal_akhir'];
	
	if(empty($nama_karyawan) and empty($tanggal_awal) and empty($tanggal_akhir)){
		//jika tidak menginput apa2
		$query=mysqli_query($konek,"select * from master_selector");
		$jumlah=mysqli_fetch_array(mysqli_query($konek,"select sum(total) as total from master_selector"));
		
	}else{
		
		?><i><b>Informasi : </b> Pencarian nama nama_karyawan <b><?php echo ucwords($_POST['nama_karyawan']);?></b> dari tanggal <b><?php echo $_POST['tanggal_awal']?></b> sampai dengan tanggal <b><?php echo $_POST['tanggal_akhir']?></b></i><?php
		
		$query=mysqli_query($konek,"select * from master_selector where nama_karyawan like '%$nama_karyawan%' and tanggal between '$tanggal_awal' and '$tanggal_akhir'");
		$jumlah=mysqli_fetch_array(mysqli_query($konek,"select sum(total) as total from master_selector where nama_karyawan like '%$nama_karyawan%' and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));
	}
	
	?>
</p>

<table class="datatable">
	<tr>
    	<th width="34">No</th>
    	<th width="90">Tanggal</th>
    	<th width="131">Nama nama_karyawan</th>
    	<th width="104">Uang (Rp)</th>
    </tr>
	<?php
	//untuk penomoran data
	$no=0;
	
	//menampilkan data
	while($row=mysqli_fetch_array($query)){
	?>
    <tr>
    	<td><?php echo $no=$no+1; ?></td><td><?php echo $row['tanggal']; ?></td><td><?php echo $row['nama_karyawan'];?></td><td align="right"><?php echo number_format($row['total'],2,',','.');?></td>
    </tr>
    <?php
	}
	?>
    <tr>
    	<td colspan="3" align="right"><strong>TOTAL</strong></td><td align="right"><?php echo number_format($jumlah['total'],2,',','.');?></td>
    </tr>
    
    <tr>
    	<td colspan="4" align="center"> 
		<?php
		//jika data tidak ditemukan
		if(mysqli_num_rows($query)==0){
			echo "<font color=red><blink>Tidak ada data yang dicari!</blink></font>";
		}
		?>
        </td>
    </tr>
     
</table>


<?php
}else{
	unset($_POST['cari']);
}
?>

<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
</body>
</html>