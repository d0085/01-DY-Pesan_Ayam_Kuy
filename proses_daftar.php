<?php
	
	require_once "koneksi.php";

	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];
	$name=$_POST['name'];
	$email = $_POST['email'];
	$jk = $_POST['jk'];
	$event = $_POST['event'];
	$cp = $_POST['cp'];
	
	$sql = "INSERT INTO uts_praktikum VALUES('".$username."','".$password."','".$id."','".$name."','".$email."','".$jk."','".$event."','".$cp."')";

	$result = $conn->query($sql);

	if($result){
		include "terdaftar.php";
	}

	else{
		echo "<script>confirm('username already taken')
				location.replace('daftar.php')</script>";
	}
?>