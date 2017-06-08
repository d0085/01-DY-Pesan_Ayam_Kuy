<?php
	session_start();
	include 'koneksi.php';

	$username=$_SESSION['USERNAME'];
	$jumlah = $_POST['jumlah'];
<<<<<<< HEAD
	$pemasok = $_POST['pilihPemasok'];

	$query="SELECT * FROM akun WHERE peran ='1'";
	$hasil= mysqli_query($conn, $query);
	$row=mysqli_fetch_assoc($hasil);
	


	$query2 = "INSERT INTO `transaksi`(`jml_permintaan`, `req_id`, `acc_id`) VALUES ('$jumlah', '$username', '$pemasok')";
	$hasil2 = mysqli_query($conn, $query2);

	if($hasil){
		echo '<script>alert("Permintaan stock sudah di proses menuggu tanggapan dari pemasok");location.replace("stockPenjual.php");</script>';		
=======
	$hargaTotal = substr($_POST['total'],4);
	$pemasok = $_POST['pilihPemasok'];

	
	$query="INSERT INTO `transaksi`(`jml_permintaan`, `req_id`, `acc_id`, `harga`) VALUES ('$jumlah', '$username', '$pemasok', '$hargaTotal')";
	$hasil = mysqli_query($conn, $query);

	if($hasil){
		echo '<script>alert("Permintaan stock sedang diproses\nMenuggu tanggapan dari pemasok");location.replace("stockPenjual.php");</script>';		
>>>>>>> Rahmat
	}
	else {
		echo '<script>alert("Permintaan stock gagal diproses");location.replace("stockPenjual.php");</script>';
	}
?>