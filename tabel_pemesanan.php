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
		background-color:white !important;
		color:rgba(9, 134, 127, 1);
		text-decoration:none;
	}
	.chat{
		padding:12px ;
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
	.user:hover{
		color: orange;
		background-color:rgba(0,0,0,0);
	}
	.selesai{
		border: none;
		border-radius: 7px;
		padding: 4px 5px 4px 5px;
		background-color: #098680;
		color: white;
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
				<li><a href="homepage_penjual.php">Home</a></li>
				<li><a href="testimoni.php">About</a></li>
				<li><a href="contacts.php">Contacts</a></li>
				<li><a href="stockPenjual.php">Stock</a></li>
				<li><a href="tabel_pemesanan.php"  class="active"><span></span> Tabel Pemesan</a></span>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<li><a href='chat_index.php'><img src='images/glyphicons-245-conversation.png'> Chat</a></li>
				<li><a class='user' href="#user"><span class="glyphicon glyphicon-user"></span> <?php echo ucfirst($_SESSION['NAMA']); ?></a> </li>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
			</ul>
		</div>
	</nav>
	
	</div>
	<div class="container text-center" style="background-color:rgba(130, 130, 130, 0.65);width:50%;margin-top:30px;float:left; left:25%; text-align:center;position:fixed;">
		<hr><h2 style="color:white;font-weight:lighter;"><b>Tabel Pemesan</b></h2><hr/>
			<p style="color:white;">Nama-nama Pelanggan yang Memesan:</p>            
			<table class="table table-striped">
			<thead style="color:white;font-family:century gothic;font-size:20px;font-weight:lighter;">
				<tr>
					<th>Nama</th>
					<th class="kg">Jumlah Pesanan (Kg)</th>
					<th>Email</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
			<?PHP
				$sqlAkun = "SELECT a.nama,t.jml_permintaan, a.email, t.req_id FROM transaksi t, akun a WHERE a.username=t.req_id and acc_id='".$_SESSION["USERNAME"]."'";
				$hasilAkun = mysqli_query($conn, $sqlAkun);
				if($hasilAkun->num_rows>0){
					while($row=mysqli_fetch_assoc($hasilAkun)){
						echo'<tr>
							<td class="personid">'.$row['nama'].'</td>
							<td class="kg">'.$row['jml_permintaan'].'</td>
							<td>'.$row['email'].'</td>
							<td> <a href="selesai_proses_beli.php?req_id='.$row['req_id'].'&jumlah='.$row["jml_permintaan"].'"><button class="selesai">Selesai</button></a>
						</tr>
						';
					}
				}
				else{
					echo "none";
				}
			?>
			</tbody>
			</table>
			
	</div>
</body>
</html>
