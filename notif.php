<?PHP
	session_start();
	include 'koneksi.php';
	$username= $_SESSION['USERNAME'];

	$sql = "select * from transaksi where acc_id='$username'";
	$hasil = mysqli_query($conn, $sql);
	$jumlah=mysqli_num_rows($hasil);
	echo $jumlah;
	
	
?>
