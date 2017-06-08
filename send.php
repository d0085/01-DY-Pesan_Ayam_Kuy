<?php
  require_once "koneksi.php";

  $pesan=$_POST["pesan"];
  $teman=$_POST["teman"];
  $username=$_COOKIE["user"];

  // echo $teman;

  $result=$conn->query("insert into chat(pengirim,penerima,tgl_waktu,isi_chat) values('".$username."','".$teman."',now(),'".$pesan."')");

  if ($result) {
    header("location: chat.php?teman=".$teman);
  }
  else{
    echo '<script>alert("Error sending message.")
    location.replace("chat.php?teman='.$teman.'")</script>';
  }
?>
