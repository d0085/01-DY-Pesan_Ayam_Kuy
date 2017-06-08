<!DOCTYPE html>
<html>
  <body>
    <table class="table table-hover">
      <?php
        require_once "koneksi.php";

      	$cari=$_GET["cari"];

      	$result = $conn->query("select nama,username from akun where username like '%".$cari."%'");
        while($hasil=$result->fetch_assoc()){
        	echo '
            <tr>
              <td style="padding:10px;"><a href="chat.php?teman='.$hasil["username"].'" style="text-decoration:none;color:black"><b>'.$hasil["nama"].'</b></a></td>
            </tr>';
        }
      ?>
    </table>
  </body>
</html>
