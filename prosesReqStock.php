<?php
	session_start();
	include 'koneksi.php';

	$username=$_SESSION['USERNAME'];
	$jumlah = $_POST['jumlah'];
	$hargaTotal = substr($_POST['total'],4);

	$query="SELECT * FROM akun WHERE peran ='1'";
	$hasil= mysqli_query($conn, $query);
	$row=mysqli_fetch_assoc($hasil);
	$pemasok = $row['username'];

	$query2="INSERT INTO `transaksi`(`jml_permintaan`, `req_id`, `acc_id`, `harga`) VALUES ('$jumlah', '$username', '$pemasok', '$hargaTotal')";
	$hasil2 = mysqli_query($conn, $query2);

	if($hasil){
		echo '<script>alert("Permintaan stock sedang diproses\nMenuggu tanggapan dari pemasok");location.replace("stockPenjual.php");</script>';		
	}
	else {
		echo '<script>alert("Permintaan stock gagal diproses");location.replace("stockPenjual.php");</script>';
	}
?>