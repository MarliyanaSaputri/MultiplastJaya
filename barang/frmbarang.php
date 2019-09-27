<?php
include "koneksi.php";
$cari_kd=mysqli_query($konek,"select max(kd_barang)as kode from master_barang"); //mencari kode yang paling besar atau kode yang baru masuk
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
        Form Tambah Data Barang
        <small>Barang</small>
      </h1>
 
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
             <form class="form-horizontal" method="post" id="frm_custumer" action="?page=simpanbarang">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kode Barang</label>

                  <div class="col-sm-3">
                    <input disabled type="text" class="form-control" name="kd_barang"value="<?php echo $id;?>" readonly="readonly" placeholder="">
					 <input  type="hidden" class="form-control" name="kd_barang"value="<?php echo $id;?>" readonly="readonly" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_barang" placeholder="">
                  </div>*harus diisi
                </div>
				
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Stok QTY</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="stok_qty" placeholder=""></input>
                  </div>
				  
				<label class="col-sm-1 control-label"> Pcs</label>
              
                  <label for="inputPassword3" class="col-sm-3 control-label">Berat(gram)</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="berat(gr)" placeholder=".."></input>
                  </div>
				  
				  <label class="col-sm-1 control-label"> Gram</label>
				  </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Diameter</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="diameter" placeholder=""></input>
                  </div>
				  
				  <label class="col-sm-1 control-label"> mm</label>
                
				<label for="inputPassword3" class="col-sm-3 control-label">Panjang</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="panjang" placeholder=""></input>
                  </div>
				  
				  <label class="col-sm-1 control-label"> mm</label>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">harga</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="harga" placeholder=""></input>
                  </div>
				
				</div>
			
                <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="simpan" class="btn btn-info pull-right">Tambah</button>
              </div>
              </div>



