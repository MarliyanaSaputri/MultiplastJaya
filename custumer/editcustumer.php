<?php
include 'koneksi.php';
$kode=$_GET['kd_custumer'];
$data=mysqli_query($konek,"select * from master_custumer where kd_custumer='$kode'");
while ($baris=mysqli_fetch_array($data)){
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Tambah Data Custumer
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
             <form class="form-horizontal" method="post" id="frm_custumer" action="?page=updatecustumer">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kode Custumer</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="kd_custumer" value="<?php echo $baris['kd_custumer'];?>" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Custumer</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_custumer" value="<?php echo $baris['nama_custumer'];?>" placeholder="">
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat Kantor</label>

                  <div class="col-sm-5">
                    <textarea type="textarea" class="form-control" name="alamat_kantor" placeholder=""><?php echo $baris['alamat_kantor'];?></textarea>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kota</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="kota_kantor"value="<?php echo $baris['kota_kantor'];?>" placeholder="">
                  </div>
                
                  <label for="inputPassword3" class="col-sm-2 control-label">Telp Kantor</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="telp_kantor" value="<?php echo $baris['telp_kantor'];?>" placeholder="">
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat Pengiriman</label>

                  <div class="col-sm-5">
                    <textarea type="textarea" class="form-control" name="alamat_pengiriman" placeholder=""><?php echo $baris['alamat_pengiriman'];?></textarea>
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kota</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="kota_pengirim" value="<?php echo $baris['kota_pengirim'];?>" placeholder="">
                  </div>
                
                  <label for="inputPassword3" class="col-sm-2 control-label">Telp Pengiriman</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="telp_pengirim" value="<?php echo $baris['telp_pengirim'];?>" placeholder="">
                  </div>
                </div>
				
				
                <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="simpan" class="btn btn-info pull-right">Edit</button>
              </div>
              </div>
  <?php
}
  ?>
