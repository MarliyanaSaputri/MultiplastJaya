<?php
include 'koneksi.php';
//session_start();
$data = mysqli_query($konek,"SELECT * FROM master_selector")
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Selector
        <small>selector </small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Selector</h3>
			  <a style="margin-bottom:10px" href="?page=lap_hasil" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
            </div>

           <div id="collapse2-One" class="accordion-body collapse in">
			<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<table id="example" class="display" cellspacing="0" width="100%">
					<center> 
					<thead>
						<tr>
						<th class="danger">No</th>
							 <th class="danger">Tanggal</th>
              
                  <th >Nama Karyawan</th>
			
				  <th >Nama Barang</th>
				  <th >Hasil Jadi </th>
				  
           
       
                 
                 <th >Aksi</th>
							
						</tr>
					</thead>
					</center>								 
					<tbody>
						<?php
						$sql = mysqli_query($konek,"SELECT * FROM master_selector ORDER BY kd_selector");
						$no  = 1;

						//$lepel= "1";
						//foreach ($dbh->query($sql) as $data) : 
							while($row=mysqli_fetch_array($sql)){
						?>
						<tr>
							<td> <?php echo $no++;?></td>
						 <td class="active"><?php echo $row['tanggal'];?></td>
                 <td class="active"><?php echo $row['nama_karyawan'];?></td>
				
				   <td class="active"><?php echo $row['nama_barang'];?></td>
				   <td class="active"><?php echo $row['hasil_jadi'];?></td>
               
						<td align="center"> 
						  <a href="?page=editselector&kd_selector=<?php echo $row['kd_selector'];?>">Edit </a>
				  <a href="?page=deleteselector&kd_selector=<?php echo $row['kd_selector'];?>" Onclick="return confirm('yakin ?')">Hapus</td>					
						</td>
							
						</tr>
						
						<?php
						}//endforeach;
						?>
					</tbody>
					</table>
					
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
