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

  .me{
    background-color:#74a8fc;
    border: 1px solid;
    min-height: 6%;
    min-width:100px;
    margin-right: 0px;
    font-family: "comic sans ms";
    border-radius: 8px 0px 8px 8px;

  }

  .friend{
    background-color:#b1c9ef;
    border: 1px solid;
    min-height: 6%;
    min-width:100px;
    font-family: "comic sans ms";
    border-radius: 0px 8px 8px 8px;

  }

  @media screen and (max-width: 780px){
    .me{
      clear:both;
      position: relative;
      right:50px;
      width:400px;
      margin:0
    }
  }

</style>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pesonal Chat</title>

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
      <div class="col-md-12">
        <?php
          require_once "koneksi.php";
          $result=$conn->query("select nama from akun where username = '".$_GET["teman"]."'");
          $teman=$result->fetch_assoc();
          echo'<h3 class="chat-header" style="">'.$teman["nama"].'</h3>';
        ?>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12" >
        <?php
          require_once "koneksi.php";

          $result=$conn->query("select isi_chat,penerima,pengirim,DATE_FORMAT(tgl_waktu, '%h:%i') waktu from chat where pengirim='".$_SESSION['USERNAME']."' and penerima='".$_GET['teman']."' or pengirim='".$_GET['teman']."' and penerima='".$_SESSION['USERNAME']."' order by tgl_waktu");
          if($result->num_rows>0){
            while($pesan=$result->fetch_assoc()){
              if($pesan["pengirim"]!=$_SESSION["USERNAME"]){
                echo '
                    <div class="row" style="width:100%;padding-right:0">
                      <div class="col-xs-2 col-sm-1 col-md-1" style="padding-right:0;padding-left:25px;width:75px;">
                        <img src="images/user.png" style="width:45px">
                      </div>
                      <div class="col-xs-10 col-sm-11 col-md-11" style="padding-left:0;width:600px;">';
                        $name=$conn->query("select nama from akun where username='".$pesan["pengirim"]."'");
                        $nama=$name->fetch_assoc();
                        echo'
                        <span style="font-family:rockwell;font-size:14px;font-weight:bold;">'.$nama["nama"].'</span><br>
                        <div class="friend">
                          <span style="font-size:14px;padding:0 10px;">'.$pesan["isi_chat"].'</span>
                        </div>
                        <span class="pull-right" style="font-size:10px;font-weight:bold">'.$pesan["waktu"].'</span>
                      </div>
                    </div><br>';
                  }
                  else{
                    echo '
                    <div class="row" style="width:100%;padding-right:0">

                      <div class="col-xs-12 col-sm-11 col-md-11 pull-right" style="width:600px;padding:0">
                        <p class="pull-right" style="font-family:rockwell;font-size:14px;font-weight:bold;">'.$_SESSION['NAMA'].'</p><br>
                        <div class="me" style="margin-right:0;">
                          <span style="font-size:14px;padding:0 10px;">'.$pesan["isi_chat"].'</span>
                        </div>
                        <span class="pull-right" style="font-size:10px;font-weight:bold">'.$pesan["waktu"].'</span>

                      </div>
                    </div><br>';
                  }
                }
          }
          else{
            echo "<br><p style='text-align:center'>Tidak Ada Pesan</p>";
          }
        ?>
        <br><br>
      </div>
    </div>
    <div class="row" style="padding:0 20px;">
      <div class="col-md-12">
        <form action="send.php" method="post">
          <div class="form-group">
            <?php
              echo'
                <input type="text" value="'.$_GET["teman"].'" name="teman" hidden="">';
            ?>
            <textarea class="form-control" rows="4" placeholder="Pesan Anda" name="pesan" required=""></textarea>
          </div>
          <button type="submit" class="btn btn-primary pull-right" name="submit">Kirim</button>
        </form>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap.min.js"></script>
  </body>
</html>
