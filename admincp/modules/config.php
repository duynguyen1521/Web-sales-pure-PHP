<?php
	$tenmaychu = "localhost";
	$tentaikhoan = "root";
	$pass = "";
	$csdl = "webthuan";

	$conn = mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl);
	if(mysqli_connect_errno()){
		echo("Failed to connect to MySQL" . mysqli_connect_error());
	}
	
	//Change character set to UTF-8
	mysqli_set_charset($conn, "utf8");
?>