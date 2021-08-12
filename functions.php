<?php

include 'config/connect.php';


// query function ex : gawean_query("select * from materi");
function gawean_query($sql){
  global $conn;

  $result = mysqli_query($conn, $sql);

  $data = [];
  while($rows = mysqli_fetch_assoc($result)){
    array_push($data,$rows);
  }

  return $data;
}
