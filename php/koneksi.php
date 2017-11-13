<?php 
	
	$server 	=	"mysql.hostinger.com";
	$user		=	"u801108269_tam";
	$password	=	"Tamaka23";
	$database	=	"u801108269_mhs";

	$connect	=	mysql_connect($server, $user, $password) or die("Koneksi gagal !");
	mysql_select_db($database) or die("Database belum siap !");
	
?>
