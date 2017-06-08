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
	nav div a:active{
		color:red;
	}
	
</style>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	</script>
	<title>Homepage Penjual</title>
</head>
<body>
	<div style="background-color:rgba(34, 32, 80, 0.07);">
		<nav class="navbar nav-bar" style="border-radius:0;margin:0;">
			<div class="container-fluid">
				<a class="pull-right pr" href="welcomepage.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				<a class="pull-right pr" href="stockPenjual.php"><span class="glyphicon glyphicon-stats"></span> Stock</a></li>
				<a class="active pull-right pr" href="homepage_penjual.php"><span class="glyphicon glyphicon-th-list"></span> Tabel Pemesan</a></span>
			  	<a class="brand" href="index.html"><span><img style="padding-top:5px;" src="images/brand1.png"></span><span> Pesan Ayam Kuy</span></a>
			</div>
		</nav>
		
	</div>
	<div class="container" style="background-color:rgba(130, 130, 130, 0.65);width:50%;margin-top:30px; text-align:center;">
		<hr><h2 style="color:white;font-weight:lighter;"><b>Tabel Pemesan</b></h2><hr/>
			<p style="color:white;">Nama-nama Pelanggan yang Memesan:</p>            
			<table class="table table-striped">
			<thead style="color:white;font-family:century gothic;font-size:20px;font-weight:lighter;">
			  <tr>
				<th style="text-align:center;">Firstname</th>
				<th style="text-align:center;">Lastname</th>
				<th style="text-align:center;">Email</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td class='personid'>John</td>
				<td>Doe</td>
				<td>john@example.com</td>
			  </tr>
			  <tr>
				<td class='personid'>Mary</td>
				<td>Moe</td>
				<td>mary@example.com</td>
			  </tr>
			  <tr>
				<td class='personid'>July</td>
				<td>Dooley</td>
				<td>july@example.com</td>
			  </tr>
			</tbody>
			</table>
			
	</div>
</body>
</html>
