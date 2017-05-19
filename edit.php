<?php
	session_start();
	require_once "koneksi.php";
	
	$sqli = "SELECT * FROM akun where username='".$_SESSION['USERNAME']."'";
	$result1 = $conn -> query($sqli);
	$jumlah = $result1 -> num_rows;
	$row = $result1 -> fetch_assoc();
	
	echo'
	<form action="proses_edit.php" method="post">
			<fieldset>
				<legend>Tambah Stok</legend><br>
				Nama:<br>
				<input type="text" value="'.$row['username'].'" name="username" disabled/><br>
				Jumlah:<br>
				<input type="number" value="" name="js" required/><br>
					<a href="cekstok.php"><button>Kembali</button></a>
					<button type="submit" name="submit">Submit</button>
			</fieldset>
		</form>
	';
	
?>