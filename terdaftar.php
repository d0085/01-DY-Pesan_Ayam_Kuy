<html>
	<head>
	<head>

	<body>
		<center>
		<h1>Register Complete</h1>
		<fieldset>
			<h2>Akun Anda : </h2><br><br>
			<?php
			require_once "proses_daftar.php";
			echo "
			<h3>Username 		: '".$username."'</h3>
			<h3>Email 	 		: '".$email."'</h2>
			<br><br>";
			?><br>
			<a href="login.php"><button class="goin">Klik disini untuk Log In >></button></a>
			</fieldset>
		</center>
	</body>
</html>