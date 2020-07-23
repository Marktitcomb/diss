<?php

$ser = "localhost:3308";
$user = "root";
$pass = ""; 
$db = "roombookings";

$conn = new mysqli($ser, $user ,$pass ,$db);


if(!$conn){
	die("connection failed:.mysqli_connect_error()");
}

?>







