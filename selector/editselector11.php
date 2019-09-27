<?php
include 'koneksi.php';

$kode=$_GET['kd_selector'];

$bar=mysqli_query($konek,"select * from master_selector where kd_selector='$kode'");
while ($bar=mysqli_fetch_array($bar)){
?>

<!-----------header datepicker--------->
<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Data selector
        <small>Custumer</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Selector</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form class="form-horizontal" method="post" id="frm_custumer" action="?page=updateselector">
              <div class="box-body">
			  
			         <div class="form-group">
				
				 
                  <label for="inputPassword3" class="col-sm-2 control-label">Kode Selector</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="kd_selector" value= "<?php echo $bar['kd_selector'];?>" placeholder="">
			
					
                  </div>
				  </div>
                <div class="form-group">
                  <label for="tanggall" class="col-sm-2 control-label">Tanggal</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" value= "<?php echo $bar['tanggal'];?>" name="tanggal" id ='tgl_lha' placeholder="">
                  </div>
                </div>
                <div class="form-group">
				
				 
                  <label for="inputPassword3" class="col-sm-2 control-label">NIK</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="nik" value= "<?php echo $bar['nik'];?>"placeholder="">
			
					
                  </div>
				  </div>
               <div class="form-group">
				
				
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Selector</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" value= "<?php echo $bar['nama_karyawan'];?>"name="nama_karyawan" placeholder="">
                  </div>
                </div>
				
				    <div class="form-group">
					
				<label for="inputPassword3" class="col-sm-2 control-label">Kode Barang</label>
				<div class="col-sm-4">
				<select class="form-control select2" style="width: 100%;"value= "<?php echo $bar['kd_barang'];?>" name="kd_barang" id="kd_barang" onchange="kddipa()"  >
								  <option selected="selected"></option>
										<?php
									while ($row=mysqli_fetch_array($data)){ 
									?>
											<option  value= "<?php echo $row['kd_barang'];?>"><?php echo $row['kd_barang']."  |  ". $row['nama_barang'];?></option>
										<?php
										}
										?>
								</select>
								
                 
                </div>
							<label  class="col-sm-2 control-label">Nama Barang</label>
								<div class= "col-sm-4">
								<i>	<p class ="form-control-static" name="nama_barang" value= "<?php echo $bar['nama_barang'];?>"id ="isi_tugas"> </p></i>
								
								</div>
							</div>
			<!--<div class="form-group">	
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="nama_barang" placeholder="">
                  </div>
                </div>-->
				<div class="form-group">
				    	<label for="inputPassword3" class="col-sm-2 control-label">Kode Custumer</label>
				<div class="col-sm-4">
				<select class="form-control select2" style="width: 100%;" name="kd_custumer" value= "<?php echo $bar['kd_custumer'];?>"id="kd_custumer" onchange="kdcs()"  >
								  <option selected="selected"></option>
										<?php
									while ($row=mysqli_fetch_array($br)){
?>
											<option  value= "<?php echo $row['nama_custumer'];?>"><?php echo $row['kd_custumer']."  |  ". $row['nama_custumer'];?></option>
										<?php
}?>
								</select>
								
                 
                </div>
							<label  class="col-sm-2 control-label">Nama Custumer</label>
								<div class= "col-sm-4">
									<i><p class ="form-control-static" name="nama_custumer" value= "<?php echo $bar['nama_custumer'];?>" id ="cs"> </p></i>
								</div>
							</div>
							
				    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Hasil Jadi</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="hasil_jadi" value= "<?php echo $bar['hasil_jadi'];?>" placeholder=""> 
                  </div>
				 <label class="col-sm-1 control-label"> pcs</label>
				  
                  <label for="inputPassword3" class="col-sm-2 control-label">Reject</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="reject" value= "<?php echo $bar['reject'];?>" placeholder="">
                  </div>
				      
                  <label for="inputPassword3" class="col-sm-1 control-label">hold</label>
				  <div class="col-sm-2">
                    <input type="text" class="form-control" name="hold" value= "<?php echo $bar['hold'];?>" placeholder="">
                  </div>
                </div>
				  <div class="form-group">
				  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Trx</label>
				  <div class="col-sm-6">
                <select class="form-control select2" style="width: 50%;">
                  <option selected="selected" name="jenis_trx"value= "<?php echo $bar['jenis_trx'];?>">Harian</option>
                  
                  <option>Borongan</option>
                 
                </select>
              </div>
			 
				  </div>
				  
		
				  
				  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Jam</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control"value= "<?php echo $bar['jumlah_jam'];?>" name="jumlah_jam" placeholder=""> 
                  </div>
				  </div>
				 
				  
				    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Harga</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" value= "<?php echo $bar['harga'];?>" name="harga" placeholder=""> 
                  </div>
				  </div>

				  <div class="form-group">
			   <label for="inputPassword3" class="col-sm-2 control-label">total</label>
				  <div class="col-sm-3">
                    <input type="text" class="form-control" name="totl" value= "<?php echo $bar['total'];?>" placeholder="">
                  </div>
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="simpan" class="btn btn-info pull-right">Tambah</button>
              
			  </div>
			  
</div>
             </div>


					
					
					
	<script src="js/jquery-1.10.2.js"></script>
   <script src="js/jquery-ui.js"></script>
					 <script>
  $(function() {
    $( "#tgl_lha" ).datepicker({
	
	dateFormat:'dd-mm-yyyy',
	changeMonth: true,
	changeYear: true,
	//minDate: -2, 
	//maxDate: "+1M +3D"

    });
  });
  </script>
  <script>
function kddipa() {
    var x = document.getElementById("kd_barang").value;
    document.getElementById("isi_tugas").innerHTML =  x;
	
}



</script>
  <script>
function kdcs() {
    var x = document.getElementById("kd_custumer").value;
    document.getElementById("cs").innerHTML =  x;
	
}



</script>
<?php
}
?>

