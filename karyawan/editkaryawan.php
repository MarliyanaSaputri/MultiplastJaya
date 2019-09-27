
<?php
include 'koneksi.php';
$kode=$_GET['nik'];
$data=mysqli_query($konek,"select * from master_karyawan where nik='$kode'");
while ($baris=mysqli_fetch_array($data)){
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Tambah Data Karyawan
        <small>Karyawan</small>
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form class="form-horizontal" method="post" id="frm_custumer" action="?page=updatekaryawan">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIK</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nik" value="<?php echo $baris['nik'];?>" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Karyawan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_karyawan" value="<?php echo $baris['nama_karyawan'];?>" placeholder="">
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Bagian/Posisi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="bagian"value="<?php echo $baris['bagian'];?>" placeholder=""></input>
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jabatan</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="jabatan" value="<?php echo $baris['jabatan'];?>"placeholder=""></input>
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Gaji Perjam</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="gaji_perjam" value="<?php echo $baris['gaji_perjam'];?>"placeholder=""></input>
                  </div>
				  
				  <label for="inputPassword3" class="col-sm-3 control-label">Gaji Borongan</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="gaji_borongan" value="<?php echo $baris['gaji_borongan'];?>"placeholder=""></input>
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


