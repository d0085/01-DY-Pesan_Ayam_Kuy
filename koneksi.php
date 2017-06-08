<?php

$server_name = "localhost";
$username = "root";
$password = "";//1FhznYrSFpmI6n07
$dbname = "01-dy-pesan_ayam_kuy";

$conn = new mysqli ($server_name, $username, $password, $dbname);

if($conn -> connect_error){
	die("Connection Failed" . $conn -> connect_error);
}

?>