
<?php
include "koneksi.php";
$cari_kd=mysqli_query($konek,"select max(kd_custumer)as kode from master_custumer"); //mencari kode yang paling besar atau kode yang baru masuk
$tm_cari=mysqli_fetch_array($cari_kd);
$kode=substr($tm_cari['kode'],1,4); //mengambil string mulai dari karakter pertama 'A' dan mengambil 4 karakter setelahnya. 
$tambah=$kode+1; //kode yang sudah di pecah di tambah 1
	if($tambah<10){ //jika kode lebih kecil dari 10 (9,8,7,6 dst) maka
    $id="P000".$tambah;
    }else{
    $id="P00".$tambah;
    }


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
             <form class="form-horizontal" method="post" id="frm_custumer" action="?page=simpancustumer">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kode Custumer</label>

                  <div class="col-sm-3">
                     <input disabled type="text" class="form-control" name="kd_custumer"value="<?php echo $id;?>" readonly="readonly" placeholder="">
					 <input  type="hidden" class="form-control" name="kd_custumer"value="<?php echo $id;?>" readonly="readonly" placeholder="">
                   </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Custumer</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_custumer" placeholder="">
                  </div>*harus diisi
                </div>
				
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat Kantor</label>

                  <div class="col-sm-5">
                    <textarea type="textarea" class="form-control" name="alamat_kantor" placeholder=""></textarea>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kota</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="kota_kantor" placeholder="">
                  </div>
                
                  <label for="inputPassword3" class="col-sm-2 control-label">Telp Kantor</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="telp_kantor" placeholder="">
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat Pengiriman</label>

                  <div class="col-sm-5">
                    <textarea type="textarea" class="form-control" name="alamat_pengiriman" placeholder=""></textarea>
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kota</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="kota_pengirim" placeholder="">
                  </div>
                
                  <label for="inputPassword3" class="col-sm-2 control-label">Telp Pengiriman</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="telp_pengirim" placeholder="">
                  </div>
                </div>
				
				
                <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="simpan" class="btn btn-info pull-right">Tambah</button>
              </div>
              </div>



