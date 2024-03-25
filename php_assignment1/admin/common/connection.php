<?php
//server db
// $connection = mysqli_connect("sql311.infinityfree.com","if0_35758286","JxweIwLYWsK","if0_35758286_musicdb");
//local db
$connection = mysqli_connect('localhost','root','root','music');
  if(!$connection){
    die("Connection Failed: " . mysqli_connect_error());
  }
mysqli_set_charset( $connection, 'UTF8' );