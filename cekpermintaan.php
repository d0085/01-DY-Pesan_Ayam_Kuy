<?php

	require_once "koneksi.php";
	
	$sqli = "SELECT * FROM transaksi";
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
			<th style="border : 1px solid">Waktu</th>
			<th style="border : 1px solid">Status</th>
		</tr>
		';
		while($row = $result1 -> fetch_assoc())
		{
			echo'
		<tr>
			<td style="border : 1px solid">'.$row["req_id"].'</td>
			<td style="border : 1px solid">'.$row["jml_permintaan"].'</td>
			<td style="border : 1px solid">'.$row["tgl_waktu"].'</td>
			<td style="border : 1px solid"> <a href="hapus.php?req_id='.$row["req_id"].'"><button>Selesai</button></a>
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