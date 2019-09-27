<?php include 'head.php';
include 'koneksi.php';
	include "menuatas.php";
		include "head.php";
		include "sidebar.php";
	?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Personil Harian
        <small>Data Personil Harian</small>
      </h1>
  
    </section>

<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-pencil"></span>  Entry</button>
<form action="hasil/hasil.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
		<select type="submit" name="tanggal" class="form-control" onchange="this.form.submit()">
			<option>Pilih tanggal ..</option>
			<?php 
			$pil=mysqli_query($konek,"select distinct tanggal from master_selector order by tanggal desc");
			while($p=mysqli_fetch_array($pil)){
				?>
				<option><?php echo $p['tanggal'] ?></option>
				<?php
			}
			?>			
		</select>
	</div>
	
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
	
							<input type="text" class="form-control"oninput="myFunction(this.value)" name="kd_selector" placeholder="">
						</div>		
	<p id="demo"></p>


</form>
<br/>
<?php 
if(isset($_GET['tanggal'])){
	$tanggal=mysqli_real_escape_string($konek,$_GET['tanggal']);
	$tg="lap_master_selector.php?tanggal='$tanggal'";
	?><a style="margin-bottom:10px" href="<?php echo $tg ?>" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a><?php
}else{
	$tg="lap_master_selector.php";
}
?>

<br/>
<?php 
if(isset($_GET['tanggal'])){
	echo "<h4> Data Penjualan Tanggal  <a style='color:blue'> ". $_GET['tanggal']."</a></h4>";
}
?>

<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Barang</h3>
            </div>

           <div id="collapse2-One" class="accordion-body collapse in">
			<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
             <table id="example" class="display" cellspacing="0" width="100%">
                <center> 
					<thead>
						<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>KODE SELECTOR</th>
		<th>tanggal</th>
		<th>Nama Karyawan</th>
		<th>JUMLAH HASIL </th>
		<th>HARGA</th>
		<th>TOTAL</th>			
		<th>Laba</th>			
		<th>Opsi</th>
	</tr>
	</thead>
	<?php 
	if(isset($_GET['tanggal'])){
		$tanggal=mysqli_real_escape_string($konek,$_GET['tanggal']);
		$brg=mysqli_query($konek,"select * from master_selector where tanggal like '$tanggal' order by tanggal desc");
	}else{
		$brg=mysqli_query($konek,"select * from master_selector order by tanggal desc");
	}
	$no=1;
	while($row=mysqli_fetch_array($brg)){

		?>
			<tr>
							<td> <?php echo $no++;?></td>
							  <td class="active"><?php echo $row['kd_selector'];?></td>
                 <td class="active"><?php echo $row['nik'];?></td>
                  <td class="active"><?php echo $row['harga'];?></td>
				   <td class="active"><?php echo $row['total'];?></td>
               
						<td align="center"> 
						  <a href="?page=editbarang&kd_barang=<?php echo $row['kd_barang'];?>">Edit </a>
				  <a href="?page=deletebarang&kd_barang=<?php echo $row['kd_barang'];?>" Onclick="return confirm('yakin ?')">Hapus</td>					
						</td>
							
						</tr>
						

		<?php 
	}
	?>
	<tr>
		<td colspan="7">Total Pemasukan</td>
		<?php 
		if(isset($_GET['tanggal'])){
			$tanggal=mysqli_real_escape_string($konek,$_GET['tanggal']);
			$x=mysqli_query($konek,"select sum(total) as total from master_selector where tanggal='$tanggal'");	
			$xx=mysqli_fetch_array($x);			
			echo "<td><b> Rp.". number_format($xx['total']).",-</b></td>";
		}else{

		}

		?>
	</tr>
	<tr>
		<td colspan="7">Total Laba</td>
		<?php 
		if(isset($_GET['tanggal'])){
			$tanggal=mysqli_real_escape_string($konek,$_GET['tanggal']);
			$x=mysqli_query($konek,"select sum(hasil_jadi) as total from master_selector where tanggal='$tanggal'");	
			$xx=mysqli_fetch_array($x);			
			echo "<td><b> Rp.". number_format($xx['total']).",-</b></td>";
		}else{

		}

		?>
	</tr>
</table>

<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Penjualan
				</div>
				<div class="modal-body">				
					<form action="master_selector_act.php" method="post">
					<div class="form-group">
							<label>Kode Selector</label>
							<input type="text" class="form-control" name="kd_selector" placeholder="">
						</div>	
						<div class="form-group">
							<label>NIK</label>
						<input type="text" class="form-control" name="nik" placeholder="">
						</div>	
						<div class="form-group">
							<label>Tanggal</label>
							<input name="tgl" type="text" class="form-control" id="tgl" autocomplete="off">
						</div>	
						<div class="form-group">
							<label>Nama Barang</label>								
							<select class="form-control" name="kd_barang">
								<?php 
								$brg=mysqli_query($konek,"select * from master_barang");
								while($b=mysqli_fetch_array($brg)){
									?>	
									<option value="<?php echo $b['kd_barang']; ?>"><?php echo $b['nama_barang'] ?></option>
									<?php 
								}
								?>
							</select>

						</div>									
						<div class="form-group">
							<label >Hasil Jadi</label>
							 <div class="col-sm-2">
							<input name="hasil_jadi" type="text" class="form-control" placeholder="Harga" autocomplete="off">
						</div>
							</div>						
						<div class="form-group">
							<label>Harga</label>
							<input name="harga" type="text" class="form-control" placeholder="Jumlah" autocomplete="off">
						</div>																	

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<input type="reset" class="btn btn-danger" value="Reset">												
						<input type="submit" class="btn btn-primary" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tgl").datepicker({dateFormat : 'yy/mm/dd'});							
		});
	</script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<!--<script>
function myFunction(val){
$has=mysqli_query($konek,"select * from master_selector
document.getElementById("demo").innerHTML=val;}
</script>-->
	</tbody>
					</table>
				</div>
			</div>
			</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>


</body></html>
<?php include 'fot.php'?>