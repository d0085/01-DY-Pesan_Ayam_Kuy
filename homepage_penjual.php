<?php
	session_start();
	include 'koneksi.php';
	$_SESSION['USERNAME'];
?> 
 <style>
	body{
		background-image:url('images/Chicken1.jpg');
		background-size:cover;
		background-attachment:fixed;
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
	@font-face {
        font-family:pesanAK-text-font;
        src: url(fonts/AwesomeFreeFont.otf);
	}
	.brand{
		color: rgba(240, 239, 240, 1);
		font-family:pesanAK-text-font;
		text-shadow:rgba(131, 124, 127, 0.37);
		font-size:22px;
		padding:30px;
	}
	.brand:hover{
		color:white;
		text-decoration:none;
	}
	.pr{
		padding:12.8px ;
		text-align:justify;
		color: white;
		letter-spacing: 3px;
		font-size:16px;
		font-family: "century gothic";
		font-weight:bold;
	}
	.pr:hover{
		background-color:white;
		color:rgba(9, 134, 127, 1);
		text-decoration:none;
	}
	nav div a.active{
		background-color:white;
		color:rgba(9, 134, 127, 1);
		text-decoration:none;
	}
	.chat{
		padding:15.3px ;
		text-align:justify;
		color: white;
		letter-spacing: 3px;
		font-size:16px;
		font-family: "century gothic";
		font-weight:bold;
	}
	.chat:hover{
		background-color:white;
		color:rgba(9, 134, 127, 1);
		text-decoration:none;
	}
	.kg{
		text-align: center;
	}
	.material-icons{
		padding-top:1px 0;
	}
	.mi{
		padding-bottom:10px;
	}
	.brand4{
		text-align:center;
	}
	.text-PAK{
		font-size: 90px;
		font-family:pesanAK-text-font;
		color:white;
		text-shadow:4px 4px rgba(25, 24, 27, 0.56);
	}
</style>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styleStock.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		var list = document.getElementsByClassName("personid");
			for (var i = 1; i <= list.length; i++) {
				list[i].innerHTML = i;
		}

		//notif
		function notif(){
    	$.ajax({
        	url: "notif.php",
        	cache: false,
        	success: function(hasil){
            	$("#jumlah_minta").html(hasil);
        	}
    	});
	}

	$(document).ready(function(){
    	notif();
	});
	</script>
	<title>Homepage Penjual</title>
</head>
<body>
	<div style="background-color:rgba(34, 32, 80, 0.07);">
		<nav class="navbar nav-bar" style="border-radius:0;">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><a href="homepage_penjual.php" class="active">Home</a></li>
				<li><a href="testimoni.php">About</a></li>
				<li><a href="contacts.php">Contacts</a></li>
				<li><a href="stockPenjual.php">Stock</a></li>
				<li><a class="pr" href="tabel_pemesanan.php"><span></span> Tabel Pemesan</a></span>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="tabel_pemesanan.php"><span class="glyphicon glyphicon-bell notification-icon"></span>	<span id="jumlah_minta">0</span></a></li>
				<li><a href='chat_index.php'><img src='images/glyphicons-245-conversation.png'> Chat</a></li>
				<li><a class='user' href="#user"><span class="glyphicon glyphicon-user"></span> <?php echo ucfirst($_SESSION['NAMA']); ?></a> </li>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
			</ul>
		</div>
	</nav>
	<div><center>
		<span class="brand4"><img style="margin-top:5%;text-shadow:4px 4px rgba(25, 24, 27, 0.56);border-bottom:3px solid white;border-radius:5px;" src="images/brand4.png"><br></span>
			<div class="underline" style="margin-top:10px;border-top:4px solid white;width:20%; border-radius:5px;"></div>
		<span class="text-PAK">- Pesan Ayam Kuy -</span></br>
	</div>
</body>
</html>
