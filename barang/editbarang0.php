<?php
include 'koneksi.php';
$kode=$_GET['kd_barang'];
$data=mysqli_query($konek,"select * from master_barang where kd_barang='$kode'");
while ($baris=mysqli_fetch_array($data)){
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Tambah Data Barang
        <small>Custumer</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Barang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form class="form-horizontal" method="post" id="frm_barang" action="?page=updatebarang">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kode Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kd_barang" value="<?php echo $baris['kd_barang'];?>" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_barang" value="<?php echo $baris['nama_barang'];?>" placeholder="">
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Berat(gram)</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="berat(gr)" value="<?php echo $baris['berat(gr)'];?>" placeholder=""></input>
                  </div>
                </div>
				
			
                <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="simpan" class="btn btn-info pull-right">Edit</button>
              </div>
              </div>

<?php
}?>

