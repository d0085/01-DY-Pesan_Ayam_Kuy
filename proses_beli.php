<?php
	session_start();
	require_once "koneksi.php";
		$jml_permintaan=$_GET['chicken'];
		$harga=intval(substr($_GET['harga'],4));
		$req_id=$_SESSION['USERNAME'];
		$acc_id=$_GET['pilih'];
		
		
		
		$sql="insert into transaksi (jml_permintaan,req_id,acc_id,harga) values ('".$jml_permintaan."',
		'".$req_id."','".$acc_id."','".$harga."')";

		$result=$conn->query($sql);
		if($result){
			header("location: total.php?bisa=1&chicken=".$jml_permintaan."&harga=".$harga."&pilih=".$acc_id);
		}
		else{
				echo "gagal";
		}
?>
