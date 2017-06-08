<?php
session_start();
include "koneksi.php";
?>

<html>
	<head>
	<title>Testimoni</title>
	<link href="styletestimoni.css" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		
	</script>		
	</head>
	<body>
	<nav class="navbar nav-bar" style="border-radius:0;">
		<div class="container-fluid">
			<ul style="text-decoration: none" class="nav navbar-nav">
				<?php
					if(isset($_SESSION["USERNAME"])){
						if($_SESSION["PERAN"]==1){
							echo'<li style="text-decoration: none"><a href="homepage_pemasok.php">Home</a></li>';
							
						}
						if($_SESSION["PERAN"]==2){
							echo'<li style="text-decoration: none"><a href="homepage_penjual.php">Home</a></li>';
						}
						if($_SESSION["PERAN"]==3){
						echo'<li style="text-decoration: none"><a href="homepage_pembeli.php">Home</a></li>';
						}
					}
					else{
						echo'<li style="text-decoration: none"><a href="welcomepage.php">Home</a></li>';
					}
				?>
				<li><a href="testimoni.php">About</a></li>
				<li><a href="contacts.php">Contacts</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<?php
				if(isset($_SESSION["USERNAME"])){
					echo'<li><a href="chat_index.php"><img src="images/glyphicons-245-conversation.png"> Chat</a></li>
					<li><a href="#user"><span class="glyphicon glyphicon-user"></span>'.ucfirst($_SESSION['NAMA']).'</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>';
				}
				else{
					echo'
					<li><a href="welcomepage.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="welcomepage.php"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>';
				}
			?>
			</ul>
		</div>
	</nav>
	<div class="testimoni" style="text-align:center;">
		<h1>Testimoni</h1>
		<form class="formulir" style="text-align:justify;" action="daftar.php" method="POST" >
			<div style="width:100%">
				<?php
					  require_once "koneksi.php";
						$sql = "select * from testimoni";
						$hasil = mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_assoc($hasil)) {                
						echo'
						<p style="color:white;background-color:rgba(9, 134, 127, 1); box-shadow:2px 2px 3px rgba(64, 64, 64, 0.84); border-radius:5px;padding:0px 4px 0px 4px;"><span>@'.ucfirst($row['nama']).'</span><br><span style="padding-left:20px;">'.$row["komen"].'</span></p>';
						}
				?>
			</div>
			<div class="text-area"><br><textarea class="text-area1" style="box-shadow:2px 2px 3px rgba(64, 64, 64, 0.84);border-radius:5px;padding:0px 4px 0px 4px;" name="komen" rows="6" cols="49"></textarea><br></div>
			<div class="submit"><tr><td><input style="border-radius:5px;box-shadow:2px 2px 3px rgba(64, 64, 64, 0.84); " class="tombol-submit" type="submit" value="Send"></td></tr></div>		
			</form>
		</div>
	</body>

</html>