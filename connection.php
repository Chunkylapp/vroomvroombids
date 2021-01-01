<?php
$server = "localhost";
$database = "vroomvroombids";
$username = "root";
$pass = "";

$connect = mysqli_connect($server,$username,$pass,$database) or die(mysqli_error());

$db = mysqli_select_db($connect,$database) or die(mysql_error());

?>
