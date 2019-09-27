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
<div class="col-md-18">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Selector</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form class="form-horizontal" method="post" id="frm_custumer" action="?page=simpanselector">
              <div class="box-body">
			  
			         <div class="form-group">
				
				 
                  <label for="inputPassword3" class="col-sm-2 control-label">Kode Selector</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="kd_selector" placeholder="">
			
					
                  </div>
				  </div>
                <div class="form-group">
                  <label for="tanggall" class="col-sm-2 control-label">Tanggal</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control"  name="tanggal" id ='tgl_lha' placeholder="">
                  </div>
                </div>
                <div class="form-group">
				
				 
                  <label for="inputPassword3" class="col-sm-2 control-label">NIK</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="nik" placeholder="">
			
					
                  </div>
				  </div>
               <div class="form-group">
				
				
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Selector</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_karyawan" placeholder="">
                  </div>
                </div>
				
				    <div class="form-group">
					
				<label for="inputPassword3" class="col-sm-2 control-label">Kode Barang</label>
				<div class="col-sm-4">
				<select class="form-control select2" style="width: 100%;" name="kd_barang" id="kd_barang" onchange="kddipa()"  >
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
								<i>	<p class ="form-control-static" name="nama_barang" id ="isi_tugas"> </p></i>
								
								</div>
							</div>
			<!--<div class="form-group">	
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="nama_barang" placeholder="">
                  </div>
                </div>-->
		
							
				    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Hasil Jadi</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="hasil_jadi" placeholder=""> 
                  </div>
				 <label class="col-sm-1 control-label"> pcs</label>
				  
                  <label for="inputPassword3" class="col-sm-2 control-label">Reject</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="reject" placeholder="">
                  </div>
				      
                  <label for="inputPassword3" class="col-sm-1 control-label">hold</label>
				  <div class="col-sm-2">
                    <input type="text" class="form-control" name="hold" placeholder="">
                  </div>
                </div>
				  <div class="form-group">
				  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Trx</label>
				  <div class="col-sm-6">
                <select class="form-control select2" style="width: 50%;">
                  <option selected="selected">Harian</option>
                  
                  <option>Borongan</option>
                 
                </select>
              </div>
				  </div>
			
				  
				    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Harga</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="harga" placeholder=""> 
                  </div>
				  </div>

			  </div>
			  
</div>
             </div>