<?php
	include "koneksi.php";

	$jenis = $_POST['jenis'];        
	$query="SELECT * FROM penjual WHERE jenis='$jenis'";
	$s = mysqli_query($conn, $query); 
	while ($data = mysqli_fetch_array($s)) {       
 		echo $data[1];       
 		//echo 'Rp '.$data[1].',-';       
	}
?>