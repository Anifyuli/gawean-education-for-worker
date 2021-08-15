<?php

include '../functions.php';

if(isset($_GET["id"])){
  $id = $_GET["id"];
  $page = $_GET["page"];

  if($page=='kategori'){

    query("DELETE from kategori where id = $id");
    header('Location:kategori.php');

  }else{

    query("DELETE from materi where id = $id");
    header('Location:home.php');
  }


  exit;
}

$error = true;
