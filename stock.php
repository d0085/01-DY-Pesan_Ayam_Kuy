<<<<<<< HEAD
=======
<?php
	/*session_start();

	if(!isset($_SESSION['USER'])){
		header('location:Homepage.html');	
	}
	$user = $_SESSION['USER'];
	*/
?>
>>>>>>> a055cdbbe5a9da65c8de8ae4aff82db7b58f21e0
<html>
<head>
	<title>Tambah Stock</title>
	<link rel="stylesheet" href="styleStock.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="jquery-2.1.4.min.js"></script> 
	<script type="text/javascript">
		$(document).ready(function(){
			 $('#jenis').change(function(){    // KETIKA ISI DARI FIEL jenis BERUBAH MAKA ......
			 	var jenisfrom = $('#jenis').val();  // AMBIL isi jenis masukkan variabel jenisform

			  	$.ajax({        // Memulai ajax untuk harga
			    	method: "POST",      
			    	url: "ajaxHarga.php",    // file PHP yang akan merespon ajax
			    	data: { jenis: jenisfrom}   // data POST yang akan dikirim
			  	})
			    .done(function( hasilajax ) {   // KETIKA PROSES Ajax Request Selesai
			        $('#harga').val(hasilajax);  // Isikan hasil dari ajak ke field harga
			    });

			    // Memulai ajax untuk stok
			    $.ajax({       
			    	method: "POST",      
			    	url: "ajaxStock.php",    
			    	data: { jenis: jenisfrom}   
			  	})
			    .done(function( hasilajax ) {   
			        $('#stock').val(hasilajax);  
			    });
			})
		});
	</script>

	<!--  -->
	<script type="text/javascript">
		function start(){
<<<<<<< HEAD
			interval = setInterval("hitung()",1);
		}
		function hitung(){
			var jumlah = document.form.jumlah.value;	
			var stringAwal=	document.form.harga.value;
			var splitString = stringAwal.replace(","," ").split(" ");
			var harga = splitString[1];
			var totalHarga = jumlah*harga;
			document.form.total.value = "Rp. "+totalHarga+",-";
=======
			interval = setInterval("calc()",1);
		}
		function calc(){
			var jumlah = document.form.jumlah.value;			
			var harga = parseInt(document.getElementById('harga').value);
			var totalHarga = parseInt(jumlah*harga);
			document.form.totalHarga.value = jumlah*harga; 
>>>>>>> a055cdbbe5a9da65c8de8ae4aff82db7b58f21e0
		}
		function stop(){
			clearInterval(interval);
		}
<<<<<<< HEAD

=======
>>>>>>> a055cdbbe5a9da65c8de8ae4aff82db7b58f21e0
	</script>

</head>

<body>	
	<nav class="navbar nav-bar" style="border-radius:0;">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><a href="#home">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contacs">Contacts</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#user"><span class="glyphicon glyphicon-user"></span> nama user <?php //echo $user ;?></a> <!-- nama user berdasarkan session-->
				<ul class="sebagai">
<<<<<<< HEAD
					<li>(Penjual)<?php //echo query  ?></li> <!-- usernya sebagai penjual-->
=======
					<li>(sebagai)<?php //echo query  ?></li> <!-- usernya sebagai penjual, pembeli atau pemasok;-->
>>>>>>> a055cdbbe5a9da65c8de8ae4aff82db7b58f21e0
				</ul>
			</li>
			<li><a href="#logout"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
			</ul>
		</div>
	</nav>
	
<<<<<<< HEAD
	<form name ="form" action="prosesStock.php" method="POST">
=======
	<form name ="form" action="pembayaranStock.php" method="POST">
>>>>>>> a055cdbbe5a9da65c8de8ae4aff82db7b58f21e0
		<p>Stock</p><br>

		<!-- pilih jenis ayam -->
		<div class="input">	
		<select name="jenis" id="jenis" class="form-control" required>
				<option style="height:35px;" selected="selected" disabled> Jenis Ayam</option>
				<?php
					include "koneksi.php";
<<<<<<< HEAD
					$sql="SELECT * FROM pemasok order by jenis asc";
=======
					$sql="SELECT * FROM penjual order by jenis asc";
>>>>>>> a055cdbbe5a9da65c8de8ae4aff82db7b58f21e0
					$jenis = mysqli_query($conn, $sql);
					while($hasil = mysqli_fetch_assoc($jenis)){
				?>
				<option value="<?php echo $hasil['jenis']; ?>"><?php echo $hasil['jenis']; ?></option>
				<?php
					}
				?>
		</select>
		</div>

<<<<<<< HEAD
		<!-- jumlah ayam yang akan ditambah stok -->
		<div class="input">	
			<div class="input-group" >
				<span class="input-group-addon"><i class="glyphicon glyphicon-shopping-cart"></i></span>
				<input style="height:35px;" type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah yang distock" onFocus="start();" onBlur="stop();">
=======
		<!-- sisa stok ayam -->
		<div class="input">	
			<div class="input-group" >
				<span class="input-group-addon"><i class="	glyphicon glyphicon-inbox"></i></span>
				<input disabled style="height:35px;" type="number" id="stock" name="stock" class="form-control" placeholder="Sisa stok">
>>>>>>> a055cdbbe5a9da65c8de8ae4aff82db7b58f21e0
				<span class="input-group-addon">&nbsp;Kg</span>
			</div>
		</div>

<<<<<<< HEAD
		<!-- sisa stok ayam -->
		<div class="input">	
			<div class="input-group" >
				<span class="input-group-addon"><i class="	glyphicon glyphicon-inbox"></i></span>
				<input disabled style="height:35px;" type="text" id="stock" name="stock" class="form-control" placeholder="Sisa stok">
=======

		<!-- jumlah ayam yang akan ditambah stok -->
		<div class="input">	
			<div class="input-group" >
				<span class="input-group-addon"><i class="glyphicon glyphicon-shopping-cart"></i></span>
				<input style="height:35px;" type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah yang distock" onFocus="start();" onBlur="stop();">
>>>>>>> a055cdbbe5a9da65c8de8ae4aff82db7b58f21e0
				<span class="input-group-addon">&nbsp;Kg</span>
			</div>
		</div>

<<<<<<< HEAD
=======

>>>>>>> a055cdbbe5a9da65c8de8ae4aff82db7b58f21e0
		<!-- harga ayam per kg -->
		<div class="input">
  			<div class="input-group">
 				 <span class="input-group-addon">@</span>
  				 <input type="text" id="harga" name="harga" placeholder="Harga" class="form-control" aria-label="Amount (to the nearest dollar)" disabled onFocus="start();" onBlur="stop();">
 				 <span class="input-group-addon">/Kg</span>
			</div>
		</div>


		<!-- harga total -->
		<div class="input">
  			<div class="input-group" >
				<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
<<<<<<< HEAD
				<input style="height:35px;" name='total' type="text" class="form-control" placeholder="Total Harga"  readonly>
			</div>
		</div>

		<input class="tombol" type='submit' value="Submit">
=======
				<input style="height:35px;" id="totalHarga" type="text" class="form-control" placeholder="Total Harga" name="totalHarga" disabled onchange='tryNumberFormat(this.form.thirdBox);'>
			</div>
		</div>
		<input class="tombol" type=submit value="Submit">
>>>>>>> a055cdbbe5a9da65c8de8ae4aff82db7b58f21e0
	</form>
	
</body>
</html>