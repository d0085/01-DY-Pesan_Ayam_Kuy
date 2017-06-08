<?php session_start(); ?>
<style>
	body{
		background-image:url('images/Chicken1.jpg');
		background-size:cover;
		background-attachment:fixed;
	}
	.login-form{
		background-color:rgba(9, 134, 127, 0.40);
		box-shadow:0px 0px 1px 1px rgba(0, 0, 0, 0.2);
		padding:8px 8px;

	}

	}
	.btn-login:hover{
		background-color:rgba(140, 140, 140, 1);
		color:rgba(77, 219, 255, 1);
	}
	.login-form p{
		background-color:rgba(9, 134, 128, 1);
		color:rgba(235, 235, 235, 1);
		padding:3px 5px; 
	}
	
	.text p{
		background-color:rgba(9, 134, 128, 1);
		color:rgba(235, 235, 235, 1);
		padding:1px 3px; 
		color: black;
		text-align: left;
	}
	
	.btn-submit{
		font-family: calibri;
		color: white;
		background-color:rgba(87, 87, 87, 1);
		width: 100px;
		padding:60px;
		margin-top:15px;
		letter-spacing: 3px;
		;
	}
 
	.nav-bar{
		background-color:rgba(9, 134, 127, 0.75);	
	}
	ul li{
		text-align: center;
	}
	ul li a {
		color: white;
		letter-spacing: 3px;
		font-family: "century gothic";
		font-weight: bold;
		font-size: 15px;
	}
	ul li a:hover{
		color: rgba(9, 134, 127, 1);
	}
	.row form {
		color:black;
	}

	
</style>
<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="bootstrap/js/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<title>Total</title>
</head>
<body>
	<nav class="navbar nav-bar" style="border-radius:0;margin-bottom:0">
  		<div class="container-fluid">
  			<ul class="nav navbar-nav">
          <?php
            if($_SESSION["PERAN"]==1){
              echo'<li><a href="homepage_pemasok.php">Home</a></li>';
            }
            if($_SESSION["PERAN"]==2){
              echo'<li><a href="homepage_penjual.php">Home</a></li>';
            }
            if($_SESSION["PERAN"]==3){
              echo'<li><a href="homepage_pembeli.php">Home</a></li>';
            }
          ?>	
  				<li><a href="testimoni.php">About</a></li>
  				<li><a href="contacts.php">Contacts</a></li>
  			</ul>
  			<ul class="nav navbar-nav navbar-right">
          <?php
            if(isset($_SESSION["NAMA"])){
              echo "<li><a href='chat_index.php'><img src='images/glyphicons-245-conversation.png'> Chat</a></li>";
              echo '<li><a href="#profile"><span class="glyphicon glyphicon-user"></span> '.$_SESSION["NAMA"].'</a></li>';
              echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
            }
            else{
              echo'
              <li><a href="#sign-up"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
      				<li><a href="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
            }
          ?>
  			</ul>
  		</div>
  	</nav>
<?php
if(isset($_GET["bisa"])){
		echo"<script>alert('Berhasil Membeli.')</script>";
	}
?>

<?php
		$jml_permintaan=$_GET["chicken"];
		$harga=$_GET["harga"];
		$req_id=$_SESSION["USERNAME"];
		$acc_id=$_GET["pilih"];
		
   echo'<div class="row" style=" margin:0;margin-top: -20px;">
			<form class="pull-right login-form" style="margin-top:150px; width:330px; margin-right:200px;">
			<p class="text-center" style="font-size:23px; border-radius:4px">Struk Pembayaran</p>
			<br>
		<div class="text">	
		<p class="text-center" style="font-size:20px; border-radius:4px">Nama : '.$req_id.'</p>
		<br>
		
		<p class="text-center" style="font-size:20px; border-radius:4px">Jumlah Pesanan : '.$jml_permintaan.'</p>
		<br>
	
		<p class="text-center" style="font-size:20px; border-radius:4px">Total Harga :Rp. '.$harga.'</p>
		<br>

		<p class="text-center" style="font-size:20px; border-radius:4px">Penjual Ayam : '.$acc_id.'</p>
		<br>
		</div>
		<center>
		
		<a href="homepage_pembeli.php"><btn-primary class="btn btn-submit" style="font-size:18px;margin:10px 10px">Kembali</btn-primary></a>
		</center>
		
		</div>
		</form>';
?>
</div>
</body>
</html>

