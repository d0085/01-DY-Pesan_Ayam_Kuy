<?php
	session_start();	
?>
<link href="styletestimoni.css" rel="stylesheet">
<nav class="navbar nav-bar" style="border-radius:0;">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><a href="#home">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contacs">Contacts</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#sign-up"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
				<li><a href="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</nav>
	
<?php 


require_once("koneksi.php");
$nama=$_SESSION['USERNAME'];
$komen = $_POST['komen'];


$simpan = "INSERT INTO `testimoni` VALUES ('$nama','$komen')";
$result=$conn->query($simpan);

if($simpan) {
	header ("location:testimoni.php");
//echo "
//<h2> Terima kasih atas masukkan dari anda, saran dari anda telah kami terima </h2>
//<meta http-equiv='refresh' content='2; url = testimoni.html'/> ";
}
else {
echo "Gagal menulis komentar";
}


?>
