<?php
	include 'koneksi.php';

	$user='user';// $_SESSION['USER'];
	$jumlah = $_POST['jumlah'];
	$jenis = $_POST['jenis'];
	$total = $_POST['total'];
	$totalHarga = substr($total,4,-2);

	$query = "INSERT INTO `perrmintaan` (`user_penjual`, `jenis`, `jumlah`, `totalHarga`) VALUES ('$user', '$jenis', '$jumlah', '$totalHarga')";
	$hasil = mysqli_query($conn, $query);

	if($hasil){
		echo '<script>alert("Permintaan stock sudah di proses menuggu tanggapan dari pemasok");history.go(-1);</script>';		
	}
	else {
		echo '<script>alert("Permintaan stock gagal diproses");history.go(-1);</script>';
	}
?>