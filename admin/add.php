<?php

include '../functions.php';

if(isset($_POST["submit"])){

  $judul = $_POST['judul'];
  $content = $_POST['content'];
  $kategori = $_POST['kategori'];
  $tanggal = date('Y-m-d');

  $query = "insert into materi
              (judul,content,emage,tanggal_post,kategori_id,status,user_id)
              VALUES
              ('$judul','$content','gadagdagadga.jpg','$tanggal','$kategori','Publised','1')";
  query($query);


  header('Location:home.php');
  exit;
}

$error = true;
