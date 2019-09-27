<?php
// Koneksi dan memilih database di server
$konek=mysqli_connect("localhost","root","") or die("Koneksi gagal");
mysqli_select_db($konek,"multiplast") or die("Database tidak bisa dibuka");

?>
