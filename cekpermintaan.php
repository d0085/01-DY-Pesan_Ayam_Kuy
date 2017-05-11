<?php

	require_once "koneksi.php";
	
	$sqli = "SELECT * FROM permintaan";
	$result1 = $conn -> query($sqli);
	$jumlah = $result1 -> num_rows;
	
	echo"Jumlah pasokan yang menunggu : ".$jumlah;
	
	
	if($jumlah>0)
	{
	echo'
	<br><br>
	<table style="border : 2px solid">
		<tr>
			<th style="border : 1px solid">Username</th>
			<th style="border : 1px solid">Jumlah Permintaan</th>
			<th style="border : 1px solid">Status</th>
		</tr>
		';
		while($row = $result1 -> fetch_assoc())
		{
			echo'
		<tr>
			<td style="border : 1px solid">'.$row["user_penjual"].'</td>
			<td style="border : 1px solid">'.$row["minta"].'</td>
			<td style="border : 1px solid"> <a href="hapus.php?user_penjual='.$row["user_penjual"].'"><button>Selesai</button></a>
		</tr>
		';
		}
		echo '</table>';
	}
?>
<html>
	<br><br>
	<a href="user_home.php">Kembali</a><br>
	<a href="logout.php">Keluar</a>
</html>