<?php
	$serverhost = 'localhost';
	$username 	= 'root';
	$password 	= '';
	$db 		= 'sid_parampuan';

    $con = mysqli_connect($serverhost, $username, $password, $db);
	mysqli_connect($serverhost, $username, $password) or die ("Koneksi database gagal");
	mysqli_select_db($con, $db) or die ("Database tidak tersedia");
?>