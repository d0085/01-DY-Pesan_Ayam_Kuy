<?PHP
	include 'koneksi.php';

	$id=$_GET['req_id'];
	$jumlah = $_GET['jumlah'];

	$sql = "DELETE FROM transaksi WHERE req_id='$id' AND jml_permintaan = '$jumlah'";
	$hasil = mysqli_query($conn, $sql);
	if($hasil){
		echo "<script>confirm('Pesanan sudah selesai diproses')
		location.replace('tabel_pemesanan.php')</script>";
	}

	else
	{
		echo "<script>confirm('gagal diproses')
		location.replace('tabel_pemesanan.php')</script>";
	}
?>