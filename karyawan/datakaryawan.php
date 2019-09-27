<?php
include 'koneksi.php';

	if (isset( $_SESSION['username'])) {
	$level = $_SESSION['level'];
	$username = $_SESSION['username'];
$data = mysqli_query($konek,"SELECT * FROM master_karyawan")
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Karyawan
        <small>Karyawan </small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Karyawan</h3>
			 
           <div id="collapse2-One" class="accordion-body collapse in">
			<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<table id="example" class="display" cellspacing="0" width="100%">
					<center> 
					<thead>
			   <tr>	<th width= '10' >No</th>
							<th class="danger">NIK</th>
							<th class="danger">Nama Karyawan</th>
							<th>Bagian</th>
							<th>Jabatan</th>
						 <?php if($level=="admin"){?>	<th>Pilihan</th><?php }; ?>
       </tr>
                   
 </thead>
							<?php
						$sql = mysqli_query($konek,"SELECT * FROM master_karyawan ORDER BY nik");
						$no  = 1;

						//$lepel= "1";
						//foreach ($dbh->query($sql) as $data) : 
							while($row=mysqli_fetch_array($sql)){
						?>
						<tr>
							<td> <?php echo $no++;?></td>	
                  <td class="active"><?php echo $row['nik'];?></td>
                 <td class="active"><?php echo $row['nama_karyawan'];?></td>
                  <td class="active"><?php echo $row['bagian'];?></td>
                  <td class="active"><?php echo $row['jabatan'];?></td>
                  
                  <?php if($level=="admin"){?>
				  <th class="danger"><a href="?page=editkaryawan&nik=<?php echo $row['nik'];?>">Edit </a>
				  <a href="?page=deletekaryawan&nik=<?php echo $row['nik'];?>" Onclick="return confirm('yakin ?')">Hapus</td>
	</tr><?php }; ?>
<?php
}?>
              </table>
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
