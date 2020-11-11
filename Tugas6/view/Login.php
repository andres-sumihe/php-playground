<!DOCTYPE html>
<html>
<head>
	<title>Siasat Login</title>
</head>
<body>
	<form method="post" action="">
		nim : <br><input type="text" name="nim">
		<br>password : <br><input type="password" name="password">
		<br><br><input type="submit" name="submit">
	</form>
</body>
</html>


<?php 
	include '../class/User.php';
	$ku = new user();
	if(isset($_POST["nim"])){
		$nim = $_POST["nim"];
		$password = $_POST["password"];
		$cekLogin = $ku->cekLogin($nim, $password); 
	}

?>