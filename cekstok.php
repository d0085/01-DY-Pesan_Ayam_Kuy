<?php

	session_start();
	require_once "koneksi.php";
	
	$sqli = "SELECT * FROM akun where username='".$_SESSION['USERNAME']."'";
	$result1 = $conn -> query($sqli);
	$jumlah = $result1 -> num_rows;
	
	echo"<center>Jumlah stok yang tersedia : </center>";
	
	if($jumlah>0)
	{
	echo'
	<center>
		<br><br>
		<table style="border : 2px solid">
			<tr>
				<th style="border : 1px solid">Username</th>
				<th style="border : 1px solid">Jumlah</th>
				<th style="border : 1px solid">Option</th>
			</tr>
			';
			while($row = $result1 -> fetch_assoc())
			{
				echo"
			<tr>
				<td style='border : 1px solid'>".$row['username']."</td>
				<td style='border : 1px solid'>".$row['jml_stock']."</td>
				<td style='border : 1px solid'> <a href='edit.php?username=".$_SESSION['USERNAME']."'><button>Tambah</button></a>
			</tr>
	</center>
	";
		}
		echo '</table>';
	}
?>
<html>
	<br><br>
	<a href="user_home.php">Kembali</a><br>
	<a href="logout.php">Keluar</a>
</html>