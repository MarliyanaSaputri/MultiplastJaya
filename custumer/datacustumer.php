<?php
include 'koneksi.php';
//session_start();
	//session_start();
	

	if (isset( $_SESSION['username'])) {
	$level = $_SESSION['level'];
	$username = $_SESSION['username'];
$data = mysqli_query($konek,"SELECT * FROM master_custumer")
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Custumer
        <small>custumer </small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Custumer</h3>
			  <a style="margin-bottom:10px" href="?page=lap_hasil" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
            </div>

           <div id="collapse2-One" class="accordion-body collapse in">
			<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<table id="example" class="display" cellspacing="0" width="100%">
					<center> 
					<thead>
			   <tr>	<th width= '10' >No</th>
							<th class="danger">Kode Custumer</th>
							<th class="danger">Nama Custumer</th>
							<th>Alamat Kantor</th>
							<th>Alamat Pengirim</th>
						 <?php if($level=="admin"){?>	<th>Pilihan</th> <?php }; ?>
       </tr>
                   
 </thead>
							<?php
						$sql = mysqli_query($konek,"SELECT * FROM master_custumer ORDER BY kd_custumer");
						$no  = 1;

						//$lepel= "1";
						//foreach ($dbh->query($sql) as $data) : 
							while($row=mysqli_fetch_array($sql)){
						?>
						<tr>
							<td> <?php echo $no++;?></td>	
                  <td class="active"><?php echo $row['kd_custumer'];?></td>
                 <td class="active"><?php echo $row['nama_custumer'];?></td>
                  <td class="active"><?php echo $row['alamat_kantor'];?></td>
                  <td class="active"><?php echo $row['alamat_pengiriman'];?></td>
                  <?php if($level=="admin"){?>
				  <th class="danger"><a href="?page=editcustumer&kd_custumer=<?php echo $row['kd_custumer'];?>">Edit </a>
				  <a href="?page=deletecustumer&kd_custumer=<?php echo $row['kd_custumer'];?>" Onclick="return confirm('yakin ?')">Hapus</td>
	</tr> <?php }; ?>
<?php
}?>
					</tbody>
					</table>
					
					<tr>
		
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