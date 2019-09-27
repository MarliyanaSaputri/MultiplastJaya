<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h1>Form Data Buku</h1>
    <div class="col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3 main">          
          <form class="form-horizontal" method="post" id="frm_mahasiswa" action="?page=simpanbuku">
  <div class="form-group">
    <label for="inputkode" class="col-sm-2 control-label">Kode Custumer</label>
    <div class="col-sm-8"><input type="text" onkeypress="return isNumberKey(event)" class="form-control"  name="kode_buku" id="inputkode" placeholder="Kode Buku" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputjudul" class="col-sm-2 control-label">Nama Custumer</label>
    <div class="col-sm-8">
      <input type="text" name="judul" class="form-control" id="inputjudul" placeholder="Judul" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputpenulis" class="col-sm-10 control-label">Alamat Kantor</label>
    <div class="col-sm-8">
       <input type="text" name="penulis" class="form-control" id="inputpenulis" placeholder="Penulis" required>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputpenerbit" class="col-sm-2 control-label">Alamat Pengiriman</label>
    <div class="col-sm-8">
      <input type="text" name="penerbit" class="form-control" id="inputpenerbit" placeholder="Penerbit Buku" required>
    </div>
  </div>
  
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>