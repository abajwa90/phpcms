<?php
$connection = mysqli_connect('localhost','root','root','musicdb');
  if(!$connection){
    die("Connection Failed: " . mysqli_connect_error());
  }
?>