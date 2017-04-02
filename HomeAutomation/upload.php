<?php
$lstatus=0;
$lbright=0;
$l=10;
$f=20;
$fstatus=0;
$fspeed=0;
if(isset($_POST["switch1"])){
$lstatus=$_POST["switch1"];
require_once("connection.php");

if(isset($_POST["brightness"])){

$lbright=$_POST["brightness"];

}

if($lstatus=="on"){
$l=10+$lbright;
$ll="pin=".$l;
}



$q="update control set regulation='".$ll."'";
if(!$result=$con->query($q)){
  echo $con->error;
}

}

if(isset($_POST["switch2"])){
$fstatus=$_POST["switch2"];


if(isset($_POST["sp"])){

$fspeed=$_POST["sp"];

}

if($fstatus=="on"){
$f=20+$fspeed;
$ff="pin=".$f;
}



$q="update control set regulation='".$ff."'";
if(!$result=$con->query($q)){
  echo $con->error;
}

}



?>	