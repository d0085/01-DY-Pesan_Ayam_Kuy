<?php session_start(); ?>

<script>
  function showUser() {
    var str=document.getElementById("cari").value;
    if (str == "") {
        document.getElementById("found").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("found").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getUser.php?cari="+str,true);
        xmlhttp.send();
    }
  }
</script>

<style media="screen">

  body{
    background: url("images/chat_background.jpg") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
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

  .chat-header{
    background-color:rgba(7, 127, 196,0.75);
    text-align:center;
    margin-top:0;
    position:relative;
    bottom:17px;
    padding:10px;
    font-family: "tahoma";
  }

</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Message</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    <br>
    <div class="row">
      <div class="col-md-6">
          <div class="input-group" style="width:100%; padding: 5px;">
            <input type="text" class="form-control" placeholder="Cari orang..." name="search" id="cari">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button" onclick="showUser()"><span class="glyphicon glyphicon-search" aria-hidden="true" style="padding:3px;"></span></button>
            </span>
          </div>
        <div id="found"></div>
      </div>
      <div class="col-md-6" >
        <table class="table table-hover">
        <?php
          require_once "koneksi.php";

          $result=$conn->query("SELECT penerima,isi_chat,tgl_waktu,nama from (SELECT a.penerima,a.isi_chat,a.tgl_waktu FROM chat a LEFT JOIN chat b ON (a.penerima = b.penerima AND a.id_chat < b.id_chat) WHERE b.id_chat IS NULL and a.pengirim='".$_SESSION['USERNAME']."') as chat, akun where username=penerima");
          if ($result->num_rows>0) {
            while($hasil=$result->fetch_assoc()){
              echo '
              <tr>
                <td><a href="chat.php?teman='.$hasil["penerima"].'" style="text-decoration:none;color:black"><b>'.$hasil["nama"].'</b></a><span class="pull-right">'.$hasil["tgl_waktu"].'</span><br>'.$hasil["isi_chat"].'</td>
              </tr>
              ';
            }
          }
          else{
            echo "Tidak ada pesan";
          }
        ?>
        </table>
        <br><br>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap.min.js"></script>
  </body>
</html>
