<?php session_start(); ?>
 <style>
	body{
		background-image:url('images/Chicken1.jpg');
		background-size:cover;
		background-attachment:fixed;
		overflow-x: hidden;
	}
	.login-form{
		background-color:rgba(135, 135, 135, 0.40);
		box-shadow:0px 0px 1px 1px rgba(0, 0, 0, 0.2);
		padding:8px 8px;
	}
	.btn-login{
		background-color:rgba(2, 178, 222, 1);
		color:white;
		border:0;
		border-top-right-radius:5px;
		border-bottom-right-radius:4px;
		padding:8.5px 10px 9px 7px;
		font-size:17px;
	}
	.btn-login:hover{
		background-color:rgba(140, 140, 140, 1);
		color:rgba(77, 219, 255, 1);
	}
	.login-form p{
		background-color:rgba(9, 134, 128, 1);
		color:rgba(235, 235, 235, 1);
		margin:5px 70px 30px;
		padding: 0px; 
	}
	.remember-me{
		color:rgba(232, 229, 255, 1);
	}
	.remember-me:hover{
		color: white;
	}
	.sign-up{
		background-color: rgba(135, 135, 135, 0.40);
		box-shadow:0px 0px 1px 1px rgba(0, 0, 0, 0.2);
		width:350px; 
		padding:15px 15px 15px ; 
	}
	.btn-submit{
		font-family: calibri;
		color: white;
		background-color:rgba(87, 87, 87, 1);
		width: 200px;
		padding:60px;
		margin-top:15px;
		letter-spacing: 3px;
	}
	.sign-up p{
		background-color:rgba(9, 134, 128, 1);
		color:rgba(235, 235, 235, 1);
		padding:3px 5px; 
	}
	.nav-bar{
		background-color:rgba(9, 134, 127, 0.75);	
	}
	ul{
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
	#form{
		position:fixed;
		top:10%;
		right:1%;
		z-index: 100;
		width:100%;
	}
	.porto-item{
		display:inline-block;
		margin-left:18%;
	}
	.portfolio-item{
		background-color:rgba(0, 0, 0, 0.3);
		border: 2px solid white;
		padding: 10px 0px;
		margin-right: 5px;
		margin-bottom: 5px;
		text-decoration:none;
		list-item:none;
	}
	h3:hover{
		color:white;
	}
	.row p{
		text-align:justify;
		color: white;
	}
	.text-persediaan{
		color: rgba(219, 135, 0, 1);
		font-size: 35px;
		margin-left:255px;
		margin-right:20%;
		margin-bottom:25px;
		border-bottom: 3px solid rgba(219, 135, 0, 1);
		box-shadow:rgba(130, 130, 130, 0.46);
	}
	.text-persediaan p {
		text-shadow:rgba(130, 130, 130, 0.46);
	}
	.row h3{
		color:white;
	}
	.row h2{
		color: white;
	}
	.row table{
		color: black;
	}
	.row h4{
		color: white;
	}
	.bawah h3{
		color: white;
	}	
</style>

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="bootstrap/js/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="/js/bootstrap.min.js"></script>
	
	<title>Pemasok | Cek Stok</title>
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
	<div id="form">
		<form id="login" class="pull-right login-form" style="width:330px; float:right; margin-right:18px;display:none;">
			<p class="text-center" style="font-size:23px; border-radius:4px">Login</p>
			<div class="input-group" >
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input style="height:35px;" id="email" type="text" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="input-group psw-log-in" style="margin-top:15px;">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input style="height:35px; width:240px;" id="password" type="password" class="form-control" name="password" placeholder="Password">
				<button type="submit" class="btn-login"><i class="glyphicon glyphicon-log-in"></i></button>
			</div>
			<div class="checkbox remember-me" style="{color:white;margin-top:7px; margin-bottom:-2px;}">
				<label><input type="checkbox">Remember me.</label>
			</div>
		</form>
		<form id="sign-up"class="pull-right sign-up"style="display:none;">
			<p class="text-center" style="font-size:23px; border-radius:4px">SIGN UP</p><br>
			<div class="input-group" style="margin-top:-8px;">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input style="height:38px;" id="name" type="text" class="form-control" name="name" placeholder="Name">
			</div>
			<div class="input-group" style="margin-top:15px;">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input style="height:38px;" id="username" type="text" class="form-control" name="username" placeholder="Username">
			</div>
			<div class="input-group" style="margin-top:15px;" >
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input style="height:38px;" id="email" type="text" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="input-group" style="margin-top:15px;">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input style="height:38px;" id="password" type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="input-group" style="margin-top:15px;">
				<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
				<input style="height:38px;" id="number" type="text" class="form-control" name="number" placeholder="Phone Number">
			</div>
			<div class="input-group" style="margin-top:15px;">
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				<input style="height:38px;" id="tgl-lahir" type="date" class="form-control" name="Birthday">
			</div>
			<div class="input-group" style="margin-top:15px;">
				<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
				<input style="height:38px;" id="alamat" type="text" class="form-control" name="Address" placeholder="Address">
			</div>
			
			<div class="text-center"><button type="submit" class="btn btn-submit center-block" style="font-size:18px;">Submit</button></div>
		</form>
	</div>
			
<?php

	require_once "koneksi.php";
	
	$sqli = "SELECT * FROM akun where username='".$_SESSION['USERNAME']."'";
	$result1 = $conn -> query($sqli);
	$jumlah = $result1 -> num_rows;
	
	echo"
	
		<div class='row' style='margin:0;margin-top: -20px;' >
			<form class='pull-right login-form' style='margin-top:150px; width:400px; margin-right:150px;'>
					
					<center>
						<h2> Jumlah Stok yang Tersedia : </h2>
					</center>
		
	";
					
					if($jumlah>0)
					{
					echo'
					<center>
						<br><br>
						<table style="border : 2px solid">
							<tr>
								<th style="border : 1px solid ; font-size:18px ; text-align:center">Username</th>
								<th style="border : 1px solid ; font-size:18px ; text-align:center">Jumlah</th>
								<th style="border : 1px solid ; font-size:18px ; text-align:center">Option</th>
							</tr>
							';
							while($row = $result1 -> fetch_assoc())
							{
								echo"
							<tr>
								<td style='border : 1px solid ; font-size:17px ; text-align:center'>".$row['username']."</td>
								<td style='border : 1px solid ; font-size:17px ; text-align:center'>".$row['jml_stock']."</td>
								<td style='border : 1px solid ; font-size:17px ; text-align:center'> <a href='edit.php?username=".$_SESSION['USERNAME']."'><h4>Tambah</h4></a></td>
							</tr>
					</center>

		</div>

								";
							}
					echo '</table>';


					}
?>

	<br><br>
	<div class="bawah">
		<table>
			<td style="padding-right:280px"><a href="homepage_pemasok.php"><h3>Kembali</h3></a></td>
		</table>
	</div>
	
	</div>
  </div>
</body>
</html>
