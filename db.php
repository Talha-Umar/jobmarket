<?php

$hostname  = "localhost";
$username  = "root";
$database  = "jobmarket";
$password  = "";

$con = mysqli_connect($hostname, $username, $password);
mysqli_select_db($con, $database) or die(mysqli_error("database not connected"));



?>