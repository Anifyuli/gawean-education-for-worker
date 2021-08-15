<?php

include 'config/connect.php';


// query function ex : gawean_query("select * from materi");
function query_ambil($sql){
  global $conn;

  $result = mysqli_query($conn, $sql);

  $data = [];
  while($rows = mysqli_fetch_assoc($result)){
    array_push($data,$rows);
  }

  return $data;
}

function query($sql){
  global $conn;

  if (mysqli_query($conn, $sql)) {
    return "Proses Query Berhasil";
  } else {
    return "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

}
