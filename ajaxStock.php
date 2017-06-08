<?php
	include "koneksi.php";

	$jenis = $_POST['jenis'];        
	$query="SELECT * FROM penjual WHERE jenis='$jenis'";
	$s = mysqli_query($conn, $query); 
	while ($data = mysqli_fetch_array($s)) {       
<<<<<<< HEAD
 		echo 'Sisa '.$data[2];           
=======
 		echo $data[2];           
>>>>>>> a055cdbbe5a9da65c8de8ae4aff82db7b58f21e0
	}
?>