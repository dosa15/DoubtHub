<?php
  $hostname = "127.0.0.1";
  $username = "root";
  $password = "root";
  $dbname = "ChatSystem";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
