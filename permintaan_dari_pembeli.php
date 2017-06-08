<?php
	include 'koneksi.php';
	session_start();

	if(!isset($_SESSION['USERNAME'])){
		header('location:welcomepage.php');	
	}
	$username = $_SESSION['USERNAME'];
?>	
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styleStock.css">
	
</head>
<body>
	<nav class="navbar nav-bar" style="border-radius:0;">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><a href="#home">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contacs">Contacts</a></li>
				<li><a href="chat_index.php">Chat</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#user"><span class="glyphicon glyphicon-user"></span> <?php echo $username ?></a> </li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
			</ul>
		</div>
	</nav>


<?PHP
	$sqlAkun="SELECT * FROM akun where peran='3'";
	$hasilAkun = mysqli_query($conn, $sqlAkun);
?>
	<div name ="form">
	<table style="border : 2px solid">
		<tr>
			<th style="border : 1px solid"> Username</th>
			<th style="border : 1px solid"> Jumlah Permintaan</th>
			<th style="border : 1px solid"> Waktu</th>
			<th style="border : 1px solid">Status</th>
	</tr>
	<?PHP
	while($rowAkun=mysqli_fetch_assoc($hasilAkun)){
		$pembeli = $rowAkun['username'];
		$sql = "SELECT * FROM transaksi WHERE req_id='$pembeli'";
		$hasil = mysqli_query($conn, $sql);

		while($row=mysqli_fetch_assoc($hasil)){
		echo'
			<tr>
				<td style="border : 1px solid">'.$row["req_id"].'</td>
				<td style="border : 1px solid">'.$row["jml_permintaan"].'</td>
				<td style="border : 1px solid">'.$row["tgl_waktu"].'</td>
				<td style="border : 1px solid"> <a href="hapus.php?req_id='.$row["req_id"].'&jumlah='.$row["jml_permintaan"].'"><button>Selesai</button></a>
			</tr>
		';
		}
	} 
?>
	</table>
	</div>
 </body>
</html>