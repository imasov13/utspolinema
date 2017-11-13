<?php
	
	$server		= "mysql.hostinger.co.id"; // sesuaikan alamat server anda
	$user		= "u801108269_tam"; // sesuaikan user web server anda
	$password	= "Tamaka23"; // sesuaikan password web server anda
	$database	= "u801108269_mhs"; // sesuaikan database web server anda
	
	$connect = mysql_connect($server, $user, $password) or die ("Koneksi gagal!");
	mysql_select_db($database) or die ("Database belum siap!");
?>
