<?php
$server_name = "localhost";
$username = "root";
$password = "1FhznYrSFpmI6n07";
$dbname = "praktikum_db";

//buat koneksi
$conn = new mysqli ($server_name, $username, $password, $dbname);

//cek koneksi
if($conn -> connect_error)
{
	die("Connection Failed" . $conn -> connect_error);
}


?>