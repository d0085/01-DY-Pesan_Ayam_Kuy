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

  .me{
    background-color:#74a8fc;
    border: 1px solid;
    min-height: 6%;
    margin-right: 0px;
    font-family: "comic sans ms";
    border-radius: 8px 0px 8px 8px;

  }

  .friend{
    background-color:#b1c9ef;
    border: 1px solid;
    min-height: 6%;
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php
      echo '<title>'.$_GET["teman"].'</title>';
    ?>

    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <?php
            echo '<li><a href="#friend">'.$_COOKIE["user"].'</a></li>';
          ?>
  			</ul>
  		</div>
  	</nav>
    <br>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12" >
        <?php
          require_once "koneksi.php";

          $result=$conn->query("select * from chat where pengirim='".$_COOKIE['user']."' and penerima='".$_GET['teman']."' or pengirim='".$_GET['teman']."' and penerima='".$_COOKIE['user']."' order by tgl_waktu");
          if($result->num_rows>0){
            while($pesan=$result->fetch_assoc()){
              if($pesan["pengirim"]!=$_COOKIE["user"]){
                echo '
                    <div class="row" style="width:100%;padding-right:0">
                      <div class="col-xs-2 col-sm-1 col-md-1" style="padding-right:0;padding-left:25px;width:75px;">
                        <img src="images/user.png" style="width:45px">
                      </div>
                      <div class="col-xs-10 col-sm-11 col-md-11" style="padding-left:0;width:600px;">
                        <div class="friend">
                          '.$pesan["isi_chat"].'
                        </div>
                      </div>
                    </div><br>';
                  }
                  else{
                    echo '
                    <div class="row" style="width:100%;padding-right:0">
                      <div class="col-xs-2 col-sm-1 col-md-1 pull-right" style="padding-left:0;padding-right:0;width:50px;">
                        <img src="images/user.png" style="width:45px;padding-right:0" class="pull-right">
                      </div>
                      <div class="col-xs-12 col-sm-11 col-md-11 pull-right" style="width:600px;padding:0">
                        <div class="me" class="text-align:right;" style="margin-right:0;">
                          '.$pesan["isi_chat"].'
                        </div>
                      </div>
                    </div><br>';
                  }
                }
          }
          else{
            echo "Tidak Ada Pesan";
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
