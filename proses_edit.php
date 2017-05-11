<?php

	require_once "koneksi.php";

	$username = $_GET['username'];
	$js=$_POST['js'];
	
	$sql = "SELECT * FROM stok where username='".$username."'";
	$result = $conn -> query($sql);
	$row=$result->fetch_assoc();
			
	$sql1 = "UPDATE stok SET jumlah_stok=".($row['jumlah_stok']+$js)." where username='".$username."'";
	$result1 = $conn -> query($sql1);
	
	if($result1)
	{
		echo "<script>confirm('berhasil menambahkan')
		location.replace('cekstok.php')</script>";
	}
	else
	{
		echo "Gagal<br><br>";
	}
?>