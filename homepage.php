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
	
</style>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		if (typeof document.onselectstart!="undefined") {
			document.onselectstart=new Function ("return false");
		}
		else{
			document.onmousedown=new Function ("return false");
			document.onmouseup=new Function ("return true");
		}
	$(document).ready(function(){
		$(".navbar-nav li a").click(function(){
			var target=$(this).attr("href");
			$('#form form').not(target).hide();
			$(target).slideToggle('slow');
			return false;
		});
	});
	</script>
	<title>Homepage</title>
</head>
<body>
	<div style="height:100%;">
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
			
			<div class="text-center"><button type="submit" class="btn btn-submit center-block" style="font-size:18px;">Submit</button></div>
		</form>
	</div>
	<div class="row" style="margin-top:70px;">
		<div class="text-persediaan"><p>PERSEDIAAN AYAM HARI INI</p></div>
		<div class="porto-item">
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="images/ayam_kampung.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Ayam Kampung</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="images/ayam_kampus.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Ayam Kampus</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="images/ayam_wuruk.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Ayam Kalkun</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
			<div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="images/ayam_potong.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Ayam Potong</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="images/ayam_kantong.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Ayam Kantong</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="images/ayam_kuning.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Ayam Kuning</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
		</div>	
        </div>
    </div>
</body>
</html>
