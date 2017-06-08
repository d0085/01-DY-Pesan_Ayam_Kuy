<?php
<<<<<<< HEAD
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "01-dy-pesan_ayam_kuy";
	
	//buat koneksi
	$conn = new mysqli($servername, $username, $password, $dbname);
=======
$server_name = "localhost";
$username = "root";
$password = "1FhznYrSFpmI6n07";
$dbname = "01-dy-pesan_ayam_kuy";

$conn = new mysqli ($server_name, $username, $password, $dbname);

if($conn -> connect_error)
{
	die("Connection Failed" . $conn -> connect_error);
}

>>>>>>> a055cdbbe5a9da65c8de8ae4aff82db7b58f21e0
?>