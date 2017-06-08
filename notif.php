<?PHP
	include 'koneksi.php';
	$sqlAkun = "SELECT * FROM akun WHERE peran='3'";
	$hasilAkun = mysqli_query($conn, $sqlAkun);
	$jumlah=0;

	while($rowAkun=mysqli_fetch_assoc($hasilAkun)){
		$pembeli = $rowAkun['username'];
		$sql = "SELECT * FROM transaksi WHERE req_id='$pembeli'";
		$hasil = mysqli_query($conn, $sql);

		while($row=mysqli_fetch_assoc($hasil)){
			$jumlah++;
		}
	}

	if($jumlah>0){
    	echo $jumlah;
	}
?>
