<?php
<<<<<<< HEAD
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
	
=======
	session_start();
	require_once "koneksi.php";

	if(!isset($_SESSION['USERNAME'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

		$sql="select * from akun where username='".$username."' and password='".$password."'";

		$result=$conn->query($sql);
		if($result->num_rows>0){
			$hasil=$result->fetch_assoc();
			$_SESSION['USERNAME']=$username;
			
			header("location:user_home.php");
		}
		else{
				echo "<script>confirm('invalid username or password')
				location.replace('login.php')</script>";
		}
	}
>>>>>>> a055cdbbe5a9da65c8de8ae4aff82db7b58f21e0
?>