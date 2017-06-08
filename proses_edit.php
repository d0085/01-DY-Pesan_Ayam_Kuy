<?php

	session_start();
	require_once "koneksi.php";

	$js=$_POST['js'];
	
	$sqli = "SELECT * FROM akun where username='".$_SESSION['USERNAME']."'";
	$result1 = $conn -> query($sqli);
	$jumlah = $result1 -> num_rows;
	$row = $result1 -> fetch_assoc();
			
	$sql1 = "UPDATE akun SET jml_stock=".($row['jml_stock']+$js)." where username='".$_SESSION['USERNAME']."'";
	$result1 = $conn -> query($sql1);
	
	if($result1)
	{
		echo "<script>confirm('berhasil menambahkan')
		location.replace('cekstok.php?')</script>";
	}
	else
	{
		echo "<script>confirm('gagal menambahkan')
		location.replace('edit.php?')</script>";
	}
?>