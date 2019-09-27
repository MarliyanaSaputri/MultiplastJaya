<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap Login Form</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<?php
include 'koneksi.php';	
	$user  = $_POST['username'];
 	$password = $_POST['password'];
echo $user . $password;
 	//$sql = "SELECT * FROM login WHERE username='$user' AND password='$password'";
	//$result = $dbh->query($sql);

	$sql = mysqli_query($konek,"SELECT * FROM login WHERE username='$user' AND password='$password'");
						

						//$lepel= "1";
						//foreach ($dbh->query($sql) as $data) : 
		while($data=mysqli_fetch_array($sql)){
	
	$username = $data['username'] ;
	$password = $data['password'] ;
	$level = $data['level'];
}
//echo $result;
 	$query = mysqli_query($sql,$konek);
 	//$row = $result->num_rows;//mysql_num_rows($query,$dbh ) or die("Query failed with error: ".mysql_error());

 	if (!empty($username)){
	//if ($result->num_rows==1) {
	$sql = mysqli_query($konek,"SELECT * FROM login WHERE username='$user' AND password='$password'");

	session_start(); // memulai fungsi session
	$_SESSION['username'] = $username;
	$_SESSION['level'] = $level;
  	echo"<div align='center'><h1>Login Berhasil</h1>dengan lepel $level  </div>";
		header("location:index.php"); 
		
 	}else{
  		echo"<script language='javascript'>alert('Terjadi kesalahan, silakan ulangi !')</script>";
		echo"<div align='center'><h1>Login Gagal</h1></div>";
		echo"<div align='center'><a href='loginn.php'>Kembali</a></div>";
 	}
	
?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>