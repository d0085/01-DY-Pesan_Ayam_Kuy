<?php
	require_once "koneksi.php";

	$username = $_GET['username'];
	
	//echo $nim;
	
	$sql = "SELECT * FROM stok where username = '$username'";
	$result = $conn -> query ($sql);
	$row = $result -> fetch_assoc();
	
	echo'
	<form action="proses_edit.php?username='.$row["username"].'" method="post">
			<fieldset>
				<legend>Tambah Stok</legend><br>
				Nama:<br>
				<input type="text" value="'.$row['nama_stok'].'" name="ns" disabled/><br>
				Jumlah:<br>
				<input type="number" value="" name="js" required/><br>
					<a href="cekstok.php"><button>Kembali</button></a>
					<button type="submit" name="submit">Submit</button>
			</fieldset>
		</form>
	';
	
?>