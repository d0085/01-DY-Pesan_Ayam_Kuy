<?php
	session_start();
	include 'koneksi.php';

	$username=$_SESSION['USERNAME'];
	$jumlah = $_POST['jumlah'];
	$hargaTotal = substr($_POST['total'],4);
	$pemasok = $_POST['pilihPemasok'];

	
	$query="INSERT INTO `transaksi`(`jml_permintaan`, `req_id`, `acc_id`, `harga`) VALUES ('$jumlah', '$username', '$pemasok', '$hargaTotal')";
	$hasil = mysqli_query($conn, $query);

	if($hasil){
		echo '<script>alert("Permintaan stock sedang diproses\nMenuggu tanggapan dari pemasok");location.replace("stockPenjual.php");</script>';		
	}
	else {
		echo '<script>alert("Permintaan stock gagal diproses");location.replace("stockPenjual.php");</script>';
	}
?>