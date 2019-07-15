<?php
	
	$server		= "localhost"; // nama server
	$user		= "root"; 
	$password	= ""; 
	$database	= "akun_nasabah"; //nama databese
	
	$con = mysqli_connect($server, $user, $password, $database);
	 if (mysqli_connect_errno()) {
	 	echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	}
 ?>
