<?php
  
  $user = 'root';
  $pass = 'l&o02783';
  $server = 'localhost';
  $db = 'macedo';

  $mysqli = mysqli_connect($server, $user, $pass, $db);
  $mysqli->set_charset('utf8');

  if ($mysqli->connect_error){
    die ('Connect Error');
  }
?>
