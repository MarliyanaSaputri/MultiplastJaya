<?php
include 'koneksi.php';
//session_start();
$data = mysqli_query($konek,"SELECT * FROM master_barang")
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Barang
        <small>barang </small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Barang</h3>
            </div>
 
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
				  <thead>
       <tr>
                  <th class="danger">Kode Barang</th>
                  <th class="danger">Nama Barang</th>
                 <th class="danger">Berat</th>
       
                 
                 <th class="danger"colspan="2">Aksi</th>
       </tr>
                   
 </thead>
				<?php
while ($row=mysqli_fetch_array($data)){
?>
               
           <tbody>
	<tr>
				
                  <td class="active"><?php echo $row['kd_barang'];?></td>
                 <td class="active"><?php echo $row['nama_barang'];?></td>
                  <td class="active"><?php echo $row['berat(gr)'];?></td>
               
                  
				  <th class="danger"><a href="?page=editbarang&kd_barang=<?php echo $row['kd_barang'];?>">Edit </a>
				  <a href="?page=deletebarang&kd_barang=<?php echo $row['kd_barang'];?>" Onclick="return confirm('yakin ?')">Hapus</td>
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
