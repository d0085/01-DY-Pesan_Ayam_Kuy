<?php
	include 'koneksi.php';
	session_start();

	if(!isset($_SESSION['USERNAME'])){
		header('location:welcomepage.php');	
	}
	$username = $_SESSION['USERNAME'];
?>
<html>
<head>
	<title>Tambah Stock</title>
	<link rel="stylesheet" href="styleStock.css">
	<style>
		#jumlah_minta{
		color: white;
		padding: 5px 7px 8px 10px;
		border: solid 1px #915620;
		font-size: 15px;
		border-radius: 50%;
		background: #915620;	
	}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="jquery-2.1.4.min.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	

	<!-- script hitung harga total -->
	<script type="text/javascript">
		function start(){
			interval = setInterval("hitung()",1);
		}
		function hitung(){
			var jumlah = document.form.jumlah.value;
			var harga = 20000;
			var totalHarga = jumlah*harga;
			document.form.total.value = "Rp. "+totalHarga+",-";
		}
		function stop(){
			clearInterval(interval);
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
</head>

<body>	
	<div style="background-color:rgba(34, 32, 80, 0.07);">
		<nav class="navbar nav-bar" style="border-radius:0;">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><a href="homepage_penjual.php" >Home</a></li>
				<li><a href="testimoni.php">About</a></li>
				<li><a href="contacts.php">Contacts</a></li>
				<li><a href="stockPenjual.php" class="active">Stock</a></li>
				<li><a class="pr" href="tabel_pemesanan.php"><span></span> Tabel Pemesan</a></span>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="tabel_pemesanan.php"><span class="glyphicon glyphicon-bell notification-icon"></span>	<span id="jumlah_minta">0</span></a></li>
				<li><a href='chat_index.php'><img src='images/glyphicons-245-conversation.png'> Chat</a></li>
				<li><a href="#user"><span class="glyphicon glyphicon-user"></span> <?php echo ucfirst($_SESSION['NAMA']); ?></a> </li>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
			</ul>
		</div>
	</nav>
	
	<form name ="form" action="prosesReqStock.php" method="POST">
		<p>Stock</p><br>

		<!-- jumlah ayam yang akan ditambah stok -->
		<div class="input">	
			<div class="input-group" >
				<span class="input-group-addon"><i class="glyphicon glyphicon-shopping-cart"></i></span>
				<input style="height:35px;" type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah yang distock" onFocus="start();" onBlur="stop();">
				<span class="input-group-addon">&nbsp;Kg</span>
			</div>
		</div>

		<!-- sisa stok ayam -->
		<div class="input">	
			<div class="input-group" >
				<span class="input-group-addon"><i class="	glyphicon glyphicon-inbox"></i></span>
				<input disabled style="height:35px;" type="text" id="stock" name="stock" class="form-control" placeholder="Sisa stok"
					value="Sisa <?php
									$query = "SELECT jml_stock FROM akun WHERE username='$username'";
									$hasil = mysqli_query($conn, $query);
									$row = mysqli_fetch_assoc($hasil);
									echo $row['jml_stock'];
						   		?>"
				>
				<span class="input-group-addon">&nbsp;Kg</span>
			</div>
		</div>

		<!-- harga ayam per kg -->
		<div class="input">
  			<div class="input-group">
 				 <span class="input-group-addon">@</span>
  				 <input type="text" id="harga" name="harga" value="Rp. 20.000,-" class="form-control" aria-label="Amount (to the nearest dollar)" disabled onFocus="start();" onBlur="stop();">
 				 <span class="input-group-addon">/Kg</span>
			</div>
		</div>


		<!-- harga total -->
		<div class="input">
  			<div class="input-group" >
				<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
				<input style="height:35px;" name='total'  id='total' type="text" class="form-control" placeholder="Total Harga"  readonly>
			</div>
		</div>

		<!-- pilih pemasok -->
		<div class="input">	
		<select name="pilihPemasok" id="pilihPemasok" class="form-control" required>
				<option style="height:35px;" selected="selected" readonly> Pilih Pemasok</option>
				<?php
					$sql="SELECT * FROM akun WHERE peran='1' order by nama asc";
					$pemasok = mysqli_query($conn, $sql);
					while($hasil = mysqli_fetch_assoc($pemasok)){
				?>
				<option value="<?php echo $hasil['username']; ?>"><?php echo $hasil['nama']; ?></option>	
				<?php
					}
				?>
		</select>
		</div>

		<input class="tombol" type='submit' value="Submit">
	</form>
	
</body>
</html>