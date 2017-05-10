<?php
  require_once "koneksi.php";

  $pesan=$_POST["pesan"];
  $teman=$_POST["teman"];
  $username=$_COOKIE['user'];

  // echo $teman;

  $result=$conn->query("insert into chat(username,friend,pesan,waktu) values('".$username."','".$teman."','".$pesan."',now())");

  if ($result) {
    header("location: chat.php?teman=".$teman);
  }
  else{
    echo "gagal";
  }
?>
