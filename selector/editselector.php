<?php
include 'koneksi.php';
$kode=$_GET['kd_selector'];
$data=mysqli_query($konek,"select * from master_selector where kd_selector='$kode'");
while ($bar=mysqli_fetch_array($data)){
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
			<body onLoad="document.autoSumForm.elements['tanggal'].focus();">

            <!-- /.box-header -->
            <!-- form start -->
             <form class="form-horizontal" name='autoSumForm' method="post" id="frm_selector" action="?page=updateselector">
              <div class="box-body">
			  
			         <div class="form-group">
				
				 
                  <label for="inputPassword3" class="col-sm-2 control-label">Kode Selector</label>

                  <div class="col-sm-5">
                    <input disabled type="text" class="form-control" name="kd_selector"  value="<?php echo $bar['kd_selector'];?>" readonly="readonly" placeholder="">
			<input type="hidden" class="form-control" name="kd_selector"  value="<?php echo $bar['kd_selector'];?>" readonly="readonly" placeholder="">
			
					
                  </div>
				  </div>
                <div class="form-group">
                  <label for="tanggall" class="col-sm-2 control-label">Tanggal</label>

                  <div class="col-sm-3">
                    <input type="date" class="form-control"  name="tanggal" value="<?php echo $bar['tanggal'];?>" id ='tgl_lha' placeholder="">
					<div style="color:red"><?php echo isset($error['tanggal']) ? $error['tanggal'] : '';?></div>
      </dd>
                  </div>
				  <label>*harus diisi</label>
                </div>
                <div class="form-group">
				
				 
                  <label for="inputPassword3" class="col-sm-2 control-label">NIK</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="nik" value="<?php echo $bar['nik'];?>"placeholder="">
			<div style="color:red"><?php echo isset($error['nik']) ? $error['nik'] : '';?></div>
					
                  </div><label>*harus diisi</label>
				  </div>
               <div class="form-group">
				
				
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Selector</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_karyawan" value="<?php echo $bar['nama_karyawan'];?>"placeholder="">
					<div style="color:red"><?php echo isset($error['nama_karyawan']) ? $error['nama_karyawan'] : '';?></div>
                  </div>
				  <label>*harus diisi</label>
                </div>
				 <div class="form-group">
				 <label for="inputPassword3" class="col-sm-2 control-label">Kode Barang</label>
				<div class="col-sm-4">
				<select class="form-control select2" style="width: 100%;"name="kd_barang" value="<?php echo $bar['kd_barang'];?>"onchange="changeValue(this.value)">
   		<option selected="selected"></option>
<?php
	$result = mysqli_query($konek,"select * from master_barang");
$jsArray = "var Nama = new Array();\n";

		while ($row = mysqli_fetch_array($result)) {
    	echo '<option value="' . $row['kd_barang'] . '">' . $row['kd_barang'] . '</option>';
    	$jsArray .= "Nama['" . $row['kd_barang'] . "'] = {satu:'" . addslashes($row['nama_barang']) . "',dua:'" . addslashes($row['harga']) . "'};\n";
}
?>
</select>
<div style="color:red"><?php echo isset($error['kd_barang']) ? $error['kd_barang'] : '';?></div>
                </div>
				</div>
				<div class="form-group">
							<label  class="col-sm-2 control-label">Nama Barang</label>
								<div class= "col-sm-4">
								<i>	<input type='text' class ="form-control-static" name="nama_barang"value="<?php echo $bar['nama_barang'];?>"   id="nama"> </p></i>
								
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
				<select class="form-control select2" style="width: 100%;" name="kd_custumer" value="<?php echo $bar['kd_custumer'];?>"id="kd_custumer" onchange="kdcs()"  >
								  <option selected="selected"></option>
										<?php
										$br=mysqli_query($konek,"select * from master_custumer ");

									while ($row=mysqli_fetch_array($br)){
?>
											<option  value= "<?php echo $row['nama_custumer'];?>"><?php echo $row['kd_custumer']."  |  ". $row['nama_custumer'];?></option>
										<?php
}?>
								</select>
								
                 
                </div>
							<label  class="col-sm-2 control-label">Nama Custumer</label>
								<div class= "col-sm-4">
									<i><p class ="form-control-static" name="nama_custumer"value="<?php echo $bar['nama_custumer'];?>" id ="cs"> </p></i>
								</div>
							</div>
							
				    <div class="form-group">
              
                  <label for="inputPassword3" class="col-sm-2 control-label">Hasil Jadi</label>

                  <div class="col-sm-2">
                   <td><input type='text' name='hasil_jadi' style="text-align:right;"   value="<?php echo $bar['hasil_jadi'];?>" onFocus="startCalc();" onBlur="stopCalc();" /></td>
<label>*harus diisi</label>
<div style="color:red"><?php echo isset($error['hasil_jadi']) ? $error['hasil_jadi'] : '';?></div>
                  </div>
                  <label for="inputPassword3" class="col-sm-2 control-label">Reject</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="reject"value="<?php echo $bar['reject'];?>" placeholder="">
                  </div>
				      
                  
                </div>
				  <div class="form-group">
				  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Trx</label>
				  <div class="col-sm-6">
                <select name='jenis_trx' id='jenis_trx'class="form-control select2" value="<?php echo $bar['jenis_trx'];?>"style="width: 50%;">
                  <option selected="selected" value='hr'>Harian</option>
                  
                  <option value='br'>Borongan</option>
                 
                </select>
              </div>
				  </div>
				   <div class="form-group">
                 
				  
				  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Jam</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" value="<?php echo $bar['jumlah_jam'];?>"name="jumlah_jam" placeholder=""> 
                  </div>
				  </div>
				  
			
				  
			  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Harga</label>

                  <div class="col-sm-2">
                   <input type='text' name='harga'value="<?php echo $bar['harga'];?>" id='harga'style="text-align:right;"   onFocus="startCalc();" onBlur="stopCalc();" /></td>
								  </div>
				  </div>
				  
				  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ket</label>

                  <div class="col-sm-2">
                   <input type='text' name='keterangan' id='keterangan' /></td>
								  </div>
				  </div><div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">qty</label>

                  <div class="col-sm-2">
                   <input type='text' name='qty' id='qty' /></td>
								  </div>
				  </div>
   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Total  Harga</label>

                  <div class="col-sm-3">
                   <input readonly type=text  style="text-align:right;" value="<?php echo $bar['total'];?>"name="total" id='total'onchange='tryNumberFormat(this.form.thirdBox);' readonly> </td>
								  </div>
				  </div>
				
                <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="simpan" class="btn btn-info pull-right">Tambah</button>
              
			  </div>
			  
</div>
             </div>


					
					
					  <?php
}
  ?>
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
<script><!-- 

function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
one = document.autoSumForm.hasil_jadi.value;
two = document.autoSumForm.harga.value; 
//three = document.autoSumForm.diskon.value; 
document.autoSumForm.total.value = (one * 1) * (two * 1) ;}
function stopCalc(){
clearInterval(interval);}
</script>
<script type="text/javascript">
<?php echo $jsArray; ?>
function changeValue(id){
document.getElementById('nama').value = Nama[id].satu;
document.getElementById('harga').value = Nama[id].dua;
};
</script>
