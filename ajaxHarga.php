<?php
	include "koneksi.php";

	$jenis = $_POST['jenis'];        
<<<<<<< HEAD
	$query="SELECT * FROM pemasok WHERE jenis='$jenis'";
	$s = mysqli_query($conn, $query); 
	while ($data = mysqli_fetch_array($s)) {           
 		echo 'Rp. '.$data[1].',-'; 
=======
	$query="SELECT * FROM penjual WHERE jenis='$jenis'";
	$s = mysqli_query($conn, $query); 
	while ($data = mysqli_fetch_array($s)) {       
 		echo $data[1];       
 		//echo 'Rp '.$data[1].',-';       
>>>>>>> a055cdbbe5a9da65c8de8ae4aff82db7b58f21e0
	}
?>