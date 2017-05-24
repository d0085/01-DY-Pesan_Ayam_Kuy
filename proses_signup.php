<?php
	require_once "koneksi.php";

	$username = $_POST['username'];
	$password =	$_POST['password'];
	$email = $_POST['email'];
	$name = $_POST['nama'];
	$no_hp = $_POST['no_hp'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$sql = "INSERT INTO 01-dy-pesan_ayam_kuy VALUES('$name','$username','$email','$password','$no_hp','$tgl_lahir')";
	
	$result = $conn->query($sql);

    if($result) {
		$_SESSION['user']=$username;
		echo "berhasil";
	}
	else{
		echo "gagal";
	}
?>