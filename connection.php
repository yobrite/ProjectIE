<?php
$servername = "127.0.0.1";
$username = "2017_fg9";
$password = "2017_fg9";

// Create connection
$mysqli = new mysqli($servername, $username, $password,'2017_fg9_project');

// Check connection
if ($mysqli->connect_error){
  echo $mysqli->connect_errno.": ".$mysqli->connect_error;
}
?>
