<html>
	<head>
	</head>

	<body>

		<?php
			session_start();
			require_once "koneksi.php";

			$sqli = "SELECT * FROM akun";
			$result1 = $conn -> query($sqli);
			$jumlah = $result1 -> num_rows;
			$row = $result1 -> fetch_assoc();
	
			echo"
			<a href='cekstok.php'><h3 align='center'>Cek Stok</h3></a>
			<a href='cekpermintaan.php'><h3 align='center'>Cek Permintaan Pasokan</h3></a>
	
			
			<a href='logout.php'>Keluar</a>
			";
		?>		

	</body>
</html>