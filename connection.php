<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

// Create connection
$mysqli = new mysqli($servername, $username, $password,'shoppingweb');

// Check connection
if ($mysqli->connect_error){
  echo $mysqli->connect_errno.": ".$mysqli->connect_error;
}
?>
