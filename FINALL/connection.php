<?php
$hostname = "localhost";
$database = "architectt";
$username = "root";
$password = "";

//create connection
$connection = mysqli_connect($hostname,$username,$password, $database) or die(mysqli_error());
 
?>