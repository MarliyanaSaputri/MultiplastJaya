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
        Form Edit Barang
        <small>barang</small>
      </h1>
  
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data barang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form class="form-horizontal" method="post" id="frm_barang" action="?page=updatebarang">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">kode</label>

                  <div class="col-sm-3">
                    <input disabled type="text" class="form-control" name="kd_barang" value="<?php echo $baris['kd_barang'];?>" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_barang" value="<?php echo $baris['nama_barang'];?>" placeholder="">
                  </div>*harus diisi
                </div>
				
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Stok QTY</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="stok_qty" value="<?php echo $baris['stok_qty'];?>" placeholder=""></input>
                  </div>
				  
				
              
                  <label for="inputPassword3" class="col-sm-3 control-label">Berat(gram)</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="berat(gr)" value="<?php echo $baris['berat(gr)'];?>" placeholder=""></input>
                  </div>
				  
				  <label class="col-sm-1 control-label"> Gram</label>
				  </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Diameter</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="diameter" value="<?php echo $baris['diameter'];?>" placeholder=""></input>
                  </div>
				  
				  <label class="col-sm-1 control-label"> mm</label>
                
				<label for="inputPassword3" class="col-sm-3 control-label">Panjang</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="panjang" value="<?php echo $baris['panjang'];?>"placeholder=""></input>
                  </div>
				  
				  <label class="col-sm-1 control-label"> mm</label>
                </div>
				
				
				
				
			
                <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="simpan" class="btn btn-info pull-right">Edit</button>
              </div>
              </div>
<?php
}
?>


