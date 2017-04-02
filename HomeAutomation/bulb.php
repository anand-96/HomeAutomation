<?php

class Regulation
{
function __destruct()
{
session_start();
$y=$_REQUEST["p"];
echo $y;
$email=$_SESSION["email"];
require_once('connection.php');


$x="pin=".$y;
$qry="update control set regulation='".$x."'";

$con->query($qry);




$subject="Home Automation";
$to="jain.abhinav2406@gmail.com";

$msg="Your Device state has been changed at home automation website";

$headers="From:jain.abhinav2406@gmail.com";

mail($to,$subject,$msg,$headers);
}
}
$a=new Regulation;
?>
