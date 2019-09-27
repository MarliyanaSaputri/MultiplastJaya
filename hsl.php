<?php
	include 'koneksi.php';
?>
<html lang="en">
    <!--<![endif]-->	
	<?php include 'header.php' ; ?>
    <body>
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
	<div class="col-md-12">
		<!------------------------------------------ TABLE LAPORAN HASIL AUDIT---------------------------------------------------------------->
   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Barang</h3>
            </div>
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
							<th>Kode Barang</th>
							<th>Nama Barang</th>
							<th>Berat (gr)</th>
							<th>stok </th>
							<th>Pilihan</th>
							
						</tr>
					</thead>
					</center>								 
					<tbody>
						<?php
						$sql = mysqli_query($konek,"SELECT * FROM master_barang ORDER BY kd_barang");
						$no  = 1;

						//$lepel= "1";
						//foreach ($dbh->query($sql) as $data) : 
							while($row=mysqli_fetch_array($sql)){
						?>
						<tr>
							<td> <?php echo $no++;?></td>
							  <td class="active"><?php echo $row['kd_barang'];?></td>
                 <td class="active"><?php echo $row['nama_barang'];?></td>
                  <td class="active"><?php echo $row['berat(gr)'];?></td>
				   <td class="active"><?php echo $row['stok_qty'];?></td>
               
						<td align="center"> 
											
						</td>
							
						</tr>
								-->
						<?php
						}//endforeach;
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


</body>
<?php include "footer.php"?>