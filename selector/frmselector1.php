<link rel="stylesheet" href="plugins/plugins/datepicker/datepicker3.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/style.css">
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

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
              <h3 class="box-title">Data Custumer</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form class="form-horizontal" method="post" id="frm_custumer" action="?page=simpanselector">
              <div class="box-body">
                <div class="form-group">
                  <label for="tanggall" class="col-sm-2 control-label">Tanggal</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="tanggal" id ='tanggal' placeholder="">
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
                    <input type="text" class="form-control" name="kd_barang" placeholder="">
                  </div>
					
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="nama_barang" placeholder="">
                  </div>
                </div>
				    <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Kode Custumer</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kd_custumer" placeholder="">
                  </div>
					
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Custumer</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="nama_custumer" placeholder="">
                  </div>
                </div>
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

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="jenis_trx" placeholder=""> 
                  </div>
				  </div>
				   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Gaji Perjam</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="gaji_perjam" placeholder=""> 
                  </div>
				  
				  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Jam</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="jumlah_jam" placeholder=""> 
                  </div>
				  </div>
				  
				  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Gaji Borongan</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="gaji_borongan" placeholder=""> 
                  </div>
				  </div>
				  
				    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Harga</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="harga" placeholder=""> 
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
		$( "#tanggal" ).datepicker({
		dateFormat:'dd-mm-yy',
		changeMonth: true,
		changeYear: true,
		//minDate: -2, 
		//maxDate: "+1M +3D"
		});
	  });
  </script>
                 				 <script>
  $(function() {
    $( "#tgl_lha" ).datepicker({
	
	dateFormat:'dd-mm-yy',
	changeMonth: true,
	changeYear: true,
	minDate: -2, 
	maxDate: "+1M +3D"

    });
  });
  </script>
