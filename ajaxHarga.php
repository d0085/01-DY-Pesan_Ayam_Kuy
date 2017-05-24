<?php
	include "koneksi.php";

	$jenis = $_POST['jenis'];        
	$query="SELECT * FROM pemasok WHERE jenis='$jenis'";
	$s = mysqli_query($conn, $query); 
	while ($data = mysqli_fetch_array($s)) {           
 		echo 'Rp. '.$data[1].',-'; 
	}
?>