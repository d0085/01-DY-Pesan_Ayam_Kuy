<?php
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
?>