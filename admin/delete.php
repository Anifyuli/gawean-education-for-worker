<?php

include '../functions.php';

if(isset($_GET["id"])){
  $id = $_GET["id"];

  query("DELETE from materi where id = $id");

  header('Location:home.php');
  exit;
}

$error = true;
