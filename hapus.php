<?php

	include "koneksi.php";
	
	$dlt = $_GET['user_penjual'];
	$delete = "DELETE FROM permintaan WHERE user_penjual='$dlt'";
	$hasil = $conn -> query($delete);
	
	if($hasil)
	{
		echo "<script>confirm('berhasil diantar')
		location.replace('cekpermintaan.php')</script>";
	}

	else
	{
		echo "<script>confirm('gagal')
		location.replace('cekpermintaan.php')</script>";
	}

?>