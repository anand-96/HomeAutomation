<?php

$servername="127.0.0.1";
$username="u100996688_homex";
$password="chatterbox123";
$dbname="u100996688_homex";
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
	die("connection failed".$con->connect_error);
	
}

?>