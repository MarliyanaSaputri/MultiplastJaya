<?php
include 'koneksi.php';
$kode=$_GET['kd_barang'];
$data=mysqli_query($konek,"select * from master_barang where kd_barang='$kode'");
while ($baris=mysqli_fetch_array($data)){
?>
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h1>Form Data Buku</h1>
    <div class="col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3 main">          
          <form class="form-horizontal" method="post" id="frm_mahasiswa" action="?page=updatebarang">
  <div class="form-group">
    <label for="inputkode" class="col-sm-2 control-label">Kode Buku</label>
    <div class="col-sm-8"><input type="text" onkeypress="return isNumberKey(event)" class="form-control"  name="kd_barang" value="<?php echo $baris['kd_barang'];?>" id="inputkode" placeholder="Kode Buku" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputjudul" class="col-sm-2 control-label">Judul</label>
    <div class="col-sm-8">
      <input type="text" name="nama_barang" value="<?php echo $baris['nama_barang'];?>" class="form-control" id="inputjudul" placeholder="Judul" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputpenulis" class="col-sm-10 control-label">Penulis</label>
    <div class="col-sm-8">
       <input type="text" name="berat(gr)" value="<?php echo $baris['berat(gr)'];?>" class="form-control" id="inputpenulis" placeholder="Penulis" required>
    </div>
  </div>
  
  
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
  <?php
}
  ?>
</form>