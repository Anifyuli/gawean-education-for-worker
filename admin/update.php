<?php

include '../functions.php';

if(isset($_POST["submit"])){


  $judul = $_POST['judul'];
  $content = $_POST['content'];
  $kategori = $_POST['kategori'];
  $id = $_POST['id'];

  mysqli_query($conn, "UPDATE materi set `judul` = '".$judul."' , `content`='".$content."', `kategori_id` = $kategori where `id` = $id");

  //
  header('Location:home.php');
  exit;
  // mysqli_close($conn);
}

$error = true;
