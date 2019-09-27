<?php
include 'koneksi.php';

//$data = mysqli_query($konek,"SELECT * FROM master_selector  ")
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

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Karyawan</h3>
			 
            </div>
            <!-- /.box-header -->
			
				<div class="row">
				<div class="col-xs-12 col-sm-6">
	
					
		
					
		
				</div>
			</div>
			
			
			

<body onLoad="document.postform.elements['nama_karyawan'].focus();">
<?php
//untuk koneksi database
include "koneksi.php";
	
//untuk menantukan tanggal awal dan tanggal akhir data di database
$min_tanggal=mysqli_fetch_array(mysqli_query($konek,"select min(tanggal) as min_tanggal from master_selector"));
$max_tanggal=mysqli_fetch_array(mysqli_query($konek,"select max(tanggal) as max_tanggal from master_selector"));

?>

    
<form action="?page=hpersonil" method="post" name="postform">
<table width="435" border="0">
  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nama Karyawan</label>

                  <div class="col-sm-7">
                   <input type="text" name="nama_karyawan" value="<?php if(isset($_POST['nama_karyawan'])){ echo $_POST['nama_karyawan']; }?>"/>
                  </div>
                </div>
  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">NIK</label>

                  <div class="col-sm-7">
                   <input type="text" name="nik" value="<?php if(isset($_POST['nik'])){ echo $_POST['nik']; }?>"/>
                  </div>
                </div>

<div class="form-group">
     <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Awal</label>

                  <div class="col-sm-7">
				  <input type="text" name="tanggal_awal" size="15" value="<?php echo $min_tanggal['min_tanggal'];?>"/>
    <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_awal);return false;" ><img src="calender/calender.jpeg" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>				
                     </div>
                </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Akhir</label>

                  <div class="col-sm-7">
				  <input type="text" name="tanggal_akhir" size="15" value="<?php echo $max_tanggal['max_tanggal'];?>"/>
    <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_akhir);return false;" ><img src="calender/calender.jpeg" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>				
                     </div>
         </div>      
   <br>   </br>
  <div class="box-footer">
	 <td colspan="2">&nbsp;</td> 
  <center>
   <button type="submit" class="btn btn-info" value="Tampilkan Data" name="cari">Tampilkan Data</button>
	 <a href="lap_masterselector.php?nik=<?php echo $_POST['nik']; ?>" class="btn btn-warning"><span class='glyphicon glyphicon-print'></span> Cetak</a>

     
  <a href="" class="btn btn-warning">RESET</a>
   <td colspan="8">&nbsp;</td> 
  </center>
</table>
</form>


<br/>


<br/>
<p>

<?php
//di proses jika sudah klik tombol cari
if(isset($_POST['cari'])){
	
	//menangkap nilai form
	$nik=$_POST['nik'];
	$nama_karyawan=$_POST['nama_karyawan'];
	$tanggal_awal=$_POST['tanggal_awal'];
	$tanggal_akhir=$_POST['tanggal_akhir'];
	
	if(empty($nik) and empty($nama_karyawan) and empty($tanggal_awal) and empty($tanggal_akhir)){
		//jika tidak menginput apa2
		$query=mysqli_query($konek,"select * from master_selector");
		$jumlah=mysqli_fetch_array(mysqli_query($konek,"select sum(total) as total from master_selector"));
		
	}else{
		
		?><i><b>Informasi : </b> Pencarian Nama Karyawan <b><?php echo ucwords($_POST['nama_karyawan']);?></b> dari tanggal <b><?php echo $_POST['tanggal_awal']?></b> sampai dengan tanggal <b><?php echo $_POST['tanggal_akhir']?></b></i><?php
		
		$query=mysqli_query($konek,"select * from master_selector where nama_karyawan like '%$nama_karyawan%' and tanggal between '$tanggal_awal' and '$tanggal_akhir'");
		$jumlah=mysqli_fetch_array(mysqli_query($konek,"select sum(total) as total from master_selector where nama_karyawan like '%$nama_karyawan%' and tanggal between '$tanggal_awal' and '$tanggal_akhir'"));
	}
	
	?>
</p>
<div id="collapse2-One" class="accordion-body collapse in">
			<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<table id="example" class="display" cellspacing="0" width="100%">
					<center> 
					<thead>
						<tr>
							<th width="34">No</th>
							<th width="90">Tanggal</th>
							<th width="131">Nama </th>
								<th width="90">Tube</th>
							<th width="90">Hasil</th>
							<th width="110">Total Harga (Rp)</th>
						</tr>

					</thead>
					</center>
					<tbody>
	<?php
	//untuk penomoran data
	$no=0;
	
	//menampilkan data
	while($row=mysqli_fetch_array($query)){
	?>
    <tr>
    	<td><?php echo $no=$no+1; ?></td>
		<td><?php echo $row['tanggal']; ?></td>
		<td><?php echo $row['nama_karyawan'];?></td>
		<td><?php echo $row['nama_barang'];?></td>
		<td><?php echo $row['hasil_jadi'];?></td>
		<td align="right"><?php echo number_format($row['total'],2,',','.');?></td>
    </tr>
    <?php
	}
	?>
    <tr>
    	<td colspan="5" align="right"><strong>TOTAL</strong></td><td align="right"><?php echo number_format($jumlah['total'],2,',','.');?></td>
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
    </tbody>
					</table>
				</div>
			</div> 
				</div>
			
</table>


<?php
}else{
	unset($_POST['cari']);
}
?>




              </table>
            </div>
            <!-- /.box-body -->
          </div>

          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


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
<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>


