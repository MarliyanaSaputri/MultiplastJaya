<?php
include 'koneksi.php';

$data = mysqli_query($konek,"SELECT * FROM master_selector  ")
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
					<!--
					-- Input Group adalah salah satu komponen yang disediakan bootstrap
					-- Untuk lebih jelasnya soal Input Group, silahkan buka link ini : http://viid.me/qb4Mup
					-->
					<form action="hasil/h.php" method="post">
					<div class="input-group">
						<!-- Buat sebuah textbox dan beri id keyword -->
						<input type="text" class="form-control" placeholder="Pencarian..." id="keyword">
						
						<span class="input-group-btn">
							<!-- Buat sebuah tombol search dan beri id btn-search -->
							<a class="btn btn-primary" type="button" name='simpan' id="btn-search">SEARCH</a>
							<a href="" class="btn btn-warning">RESET</a>
						</span>
					</div>
					</form>
				</div>
			</div>
			
			
			
			
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
               
				  <thead>
       <tr>
	<th class="danger">Kode selector</th>
	   <th class="danger">Tanggal</th>
              
                  <th class="danger">Nama Karyawan</th>
				  <th class="danger">Kode Barang</th>
				  <th class="danger">Hasil Jadi </th>
				  <th class="danger">Hold</th>
                 <th class="danger">Reject</th>
       
                 
                 <th class="danger"colspan="2">Aksi</th>
       </tr>
                   
 </thead>
				<?php
while ($row=mysqli_fetch_array($data)){
?>
               
           <tbody>
	<tr>
				<td class="active"><?php echo $row['kd_selector'];?></td>
				   <td class="active"><?php echo $row['tanggal'];?></td>
                 <td class="active"><?php echo $row['nama_karyawan'];?></td>
				  <td class="active"><?php echo $row['kd_barang'];?></td>
				   <td class="active"><?php echo $row['hasil_jadi'];?></td>
				    <td class="active"><?php echo $row['hold'];?></td>
                  <td class="active"><?php echo $row['reject'];?></td>
               
                  
				  <th class="danger"><a href="?page=editselector&kd_selector=<?php echo $row['kd_selector'];?>">Edit </a>
				  <a href="?page=deleteselector&kd_selector=<?php echo $row['kd_seletor'];?>" Onclick="return confirm('yakin ?')">Hapus</td>
	</tr>
<?php
}?>
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

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
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
</body>
</html>
