<title>belajar Validasi form</title>

<table border=1 align=center>
<tr>
<td align=center><h3>Form Input</h3></td></tr><tr><td>
<?php 
    if($_POST){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $kota = $_POST['kota'];
        $kodePos = $_POST['kode_pos'];
    $error = array();
        if(empty($nama)){
      $error['nama'] = 'Nama jangan kosong donk';
        }
    if(empty($email)){
      $error['email'] = 'Emailnya jangan kosong !!';
    }
    if(empty($alamat)){
      $error['alamat'] = 'Alamat anda masi kosong';
    }
    if(empty($kota)){
      $error['kota'] = 'Kota  kosong';
    }
    if(empty($kodePos)){
      $error['kode_pos'] = 'Kode pos tolong di isi';
    }
    if(empty($error)){
            //prosess data
        }
    }
?>
<form name="form-name" method="post" action="">
    <dl>
      <dt>Nama:</dt>
      <dd>
    <input name="nama" id="nama" type="text" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '';?>" />
    <div style="color:red"><?php echo isset($error['nama']) ? $error['nama'] : '';?></div>
      </dd>
      <dt>Email:</dt>
      <dd>
    <input name="email" id="email" type="text" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '';?>" />
    <div style="color:red"><?php echo isset($error['email']) ? $error['email'] : '';?></div>
      </dd>
      <dt>Alamat:</dt>
      <dd>
    <input name="alamat" id="alamat" type="text" value="<?php echo isset($_POST['alamat']) ? $_POST['alamat'] : '';?>" />
    <div style="color:red"><?php echo isset($error['alamat']) ? $error['alamat'] : '';?></div>
      </dd>
      <dt>Kota:</dt>
      <dd>
    <input name="kota" id="kota" type="text" value="<?php echo isset($_POST['kota']) ? $_POST['kota'] : '';?>" />
    <div style="color:red"><?php echo isset($error['kota']) ? $error['kota'] : '';?></div>
      </dd>
      <dt>Kode POS:</dt>
      <dd>
    <input name="kode_pos" id="kode_pos" type="text" value="<?php echo isset($_POST['kode_pos']) ? $_POST['kode_pos'] : '';?>" />
    <div style="color:red"><?php echo isset($error['kode_pos']) ? $error['kode_pos'] : '';?></div>
      </dd>
      <dt></dt>
      <dd>
    <input name="submit" id="submit" type="Submit" value="Submit" />
      </dd>
    </dl>
</form>
</td></tr></table>
<center>
##by <a href=http://www.facebook.com/miez.dehard> Miez De Dard </a>on fb<br>
cekidot <a href=http://www.miswanphp.blogspot.com/><blink>here</blink></a></center>