<?php
	require_once "koneksi.php";

	$email = $_POST['email'];
	$password =	$_POST['password'];
	
	$sql = "SELECT COUNT(*) AS jumlah FROM 01-dy-pesan_ayam_kuy WHERE email = '$email' AND password = '$password'";
	
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	
    if($result) {
		header("location:stock.php");
	}
	else{
		 header("location:Login_Seller.html");
	}
	
?>