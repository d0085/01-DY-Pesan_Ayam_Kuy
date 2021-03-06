 <style>
	body{
		background-image:url('images/Chicken1.jpg');
		background-size:cover;
		background-attachment:fixed;
	}
	@font-face {
        font-family:welcome-text-font;
        src: url(fonts/HirondellesdesAlpes.ttf);
	}
	.welcome-text{
        font-family:welcome-text-font;
		color:white;
		letter-spacing:2px;
		text-shadow:2px 2px rgba(66, 66, 66, 0.55);
		font-size: 100px;
	}	
	@font-face {
        font-family:pesanAK-text-font;
        src: url(fonts/AwesomeFreeFont.otf);
	}
	.pesanAK{
		letter-spacing:2px;
		font-family:pesanAK-text-font;
		font-size:80px;
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
	#form{
		position:fixed;
		top:10%;
		right:1%;
		z-index: 100;
		width:100%;
	}
	nav div a.active{
		background-color:white !important;
		color:rgba(9, 134, 127, 1);
		text-decoration:none;
	}
	
</style>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="bootstrap/js/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".navbar-right li a ").click(function(){
				var target=$(this).attr("href");
				$('#form form').not(target).hide();
				$(target).slideToggle('slow');
				return false;
			});
		});
	</script>
	<title>Welcome Page</title>
</head>
<body>
	<div style="background-color:rgba(34, 32, 80, 0.07);height:100%;">
		<nav class="navbar nav-bar" style="border-radius:0;">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="homepage.php" class="active">Home</a></li>
					<li><a href="testimoni.php">About</a></li>
					<li><a href="contacts.php">Contacts</a></li>	
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#sign-up"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
					<li><a href="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</nav>
		<div id="form">
			<form id="login" action="proses_login.php" method="POST" class="pull-right login-form" style="width:330px; float:right; margin-right:18px;display:none;">
				<p class="text-center" style="font-size:23px; border-radius:4px">Login</p>
				<div class="input-group" >
					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
					<input style="height:35px;" id="username" type="text" class="form-control" name="username" placeholder="Username">
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
			<form id="sign-up" method="post" action="proses_daftar.php" class="pull-right sign-up has-feedback" style="display:none;">
				<p class="text-center" style="font-size:23px; border-radius:4px">SIGN UP</p><br>
				<div class="input-group" style="margin-top:-8px;">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input style="height:38px;" id="name" type="text" class="form-control" name="nama" placeholder="Name">
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
					<input style="height:38px;" id="tgl-lahir" type="date" class="form-control" name="birthday">
				</div>
				<div class="form-group" style="margin-top:15px;">
					<select class="form-control" style="height:38px; padding: 0 12px 0 12px;" name="peran" id="sel1">
						<option>Sign up as. . .</option>
						<option value="1">Pemasok</option>
						<option value="2">Penjual</option>
						<option value="3">Pembeli</option>
					</select>
				</div>
				<div class="text-center"><button type="submit" class="btn btn-submit center-block" style="font-size:18px;">Submit</button></div>
			</form>
		</div>

		<?php 
			if(isset($_GET["success"])){
				echo "<script>alert('Berhasil mendaftar sebagai ".$_GET['user']."')</script>";
				echo "<script>alert('Silahkan login...')</script>";
			}
			if(isset($_GET["failed"])){
				echo "<script>alert('Sign Up Failed !!')</script>";
			}
		?>
			
		<div class=" container text-center">
			<div class="welcome-text" style="display:inline-block;margin-top: 10%; text-align:center;">
				<p>Selamat Datang Di<hr><span class="pesanAK">Pesan Ayam Kuy</span></p>
			</div>
		</div>
	</div>
  </div>
</body>
</html>
