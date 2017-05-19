<?php

	include "koneksi.php";
	
	$dlt = $_GET['req_id'];
	$delete = "DELETE FROM transaksi WHERE req_id='$dlt'";
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