<?php

if(isset($_POST["submit"])){

  $judul = $_POST['judul'];
  $content = $_POST['content'];
  $kategori = $_POST['kategori'];

  // Jalankan post ke dalam Database


  header('Location:home.php');
  exit;
}

$error = true;
