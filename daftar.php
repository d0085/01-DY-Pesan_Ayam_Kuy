<html>
	<head>
	</head>

	<body>
	<!-- <center> -->
		<form action="proses_daftar.php" method="post">
			<fieldset>
				<legend>Register</legend><br>
				Username:<br>
				<input type="text" placeholder="Username" name="username" required /><br>
				Password:<br>
				<input type="password" placeholder="Password" name="password" required /><br>
				Identity:<br>
				<input type="text" placeholder="Identity Number" name="id" required/><br>
				Name:<br>
				<input type="text" placeholder="Name" name="name" required/><br>
				E-mail:<br>
				<input type="email" placeholder="Email" name="email" required/><br>
				Gender:<br>
				<select name="jk" required>
					<option value = "" selected ="selected" disabled = ""> Choose </option>
					<option value = "M">Male</option>
					<option value = "F">Female</option>
				</select><br>
				Event_Id:<br>
				<input type="text" placeholder="Event_Id" name="event" required /><br>
				Contact Person:<br>
				<input type="text" placeholder="Contact Person" name="cp" required /><br>
				<button type="submit">Submit</button><a href="login.php">Sudah punya akun ?</a>
			</fieldset>
		</form>
	<!-- </center> -->
	</body>
</html>