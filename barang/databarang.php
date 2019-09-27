<?php
include 'koneksi.php';
//session_start();
//	session_start();
	

	if (isset( $_SESSION['username'])) {
	$level = $_SESSION['level'];
	$username = $_SESSION['username'];
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
			  <a style="margin-bottom:10px" href="?page=lap_barang" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
            </div>

           <div id="collapse2-One" class="accordion-body collapse in">
			<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<table id="example" class="display" cellspacing="0" width="100%">
					<center> 
					<thead>
						<tr>
							<th width= '10' >No</th>
							<th class="danger">Kode Barang</th>
							<th class="danger">Nama Barang</th>
							<th>Berat (gr)</th>
							<th>stok </th>
							<th>harga </th>
							<th>Pilihan</th>
							
						</tr>
					</thead>
					</center>								 
					<tbody>
						<?php
						$sql = mysqli_query($konek,"SELECT * FROM master_barang ORDER BY kd_barang");
						$no  = 1;
							while($row=mysqli_fetch_array($sql)){
						?>
						<tr>
							<td> <?php echo $no++;?></td>
							  <td class="active"><?php echo $row['kd_barang'];?></td>
                 <td class="active"><?php echo $row['nama_barang'];?></td>
                  <td class="active"><?php echo $row['berat(gr)'];?></td>
				   <td class="active"><?php echo $row['stok_qty'];?></td>
				    <td class="active"><?php echo $row['harga'];?></td>
               
						<td align="center"> 
						<?php if($level=="admin"){?>
						  <a href="?page=editbarang&kd_barang=<?php echo $row['kd_barang'];?>">Edit </a>
				<a href="?page=deletebarang&kd_barang=<?php echo $row['kd_barang'];?>" Onclick="return confirm('yakin ?')">Hapus</td>					
						</td>
								
						 <?php }; ?> </tr>
						
						<?php
						}
						?>
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

<?php }else{
	echo"<script language='javascript'>alert('Terjadi kesalahan, silakan ulangi !')</script>";
		echo"<div align='center'><h1>Login Gagal</h1></div>";
		echo"<div align='center'><a href='pages-login.html'>Kembali</a></div>";
 	}
	?>
