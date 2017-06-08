<?php
require_once "koneksi.php";
	//hubungan dengan main.php
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$no_hp=$_POST['number'];
	$tgl_lahir=$_POST['birthday'];
	$peran=$_POST['peran'];

	$sql="select username from akun where username='".$username."'"; //biar tidak sama
	$result=$conn->query($sql);
	if($result->num_rows>0){
		header("location: Login.php?userzz=1"); //balik ke utama
	}
	else{
		if($kpass!=$pass){
			header("location: index.php?passzz=1"); //pas harus dua dua
		}
		else{
			$sql="insert into akun(username,nama,email,password,no_hp,tgl_lahir,peran) values('".$username."','".$nama."','".$email."','".$password."'
			,'".$no_hp."','".$tgl_lahir."','".$peran."')";
			$result=$conn->query($sql);

			if($result){
				header("location: welcomepage.php?success=1&&user=".$username);
			}
			else{
				header("location: welcomepage.php?failed=1");
			}
		}
	}
?>
