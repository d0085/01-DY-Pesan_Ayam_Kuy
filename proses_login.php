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
			$_SESSION['NAMA']= $hasil['nama'];
			$_SESSION['PERAN']=$hasil['peran'];

			
			if($_SESSION['PERAN']==1){
				header("location:homepage_pemasok.php"); //ganti link homepage pemasok
			}
			if($_SESSION["PERAN"]==2){
				header("location:homepage_penjual.php"); //ganti link homepage penjual
			}
			if($_SESSION["PERAN"]==3){
				header("location:homepage_pembeli.php"); //ganti link homepage pembeli
			}
		}
		else{
				echo "<script>confirm('invalid username or password')
				location.replace('welcomepage.php')</script>";
		}
	}
?>