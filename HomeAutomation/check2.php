<?php

class AddDevice
{
 function __construct()
{

session_start();
if($_SESSION['flag']!=1)
{
include('index.html');
}
$id=$_POST["id"];
$type=$_POST["category"];
$email=$_SESSION["email"];
$uname=$_SESSION["uname"];


$to="abhishek.chelawat@gmail.com";

$msg="There is a request from'".$uname."'for registering a device. Device Details: Device ID: '".$id."'  Device Type : '".$type."' Please Register it as soon as possible. on:www.homecontrol.esy.es";

$subject="Registration of Device";
$headers="From:".$email."";

if(mail($to,$subject,$msg,$headers))
{
   ?>
   <script>
   alert("Your request has processed sucessfully");
   </script>
<?php
require("hello1.php"); 
 
}

else
{

?>
<script>
alert("Please try Again");
</script>

<?php

include("hello1.html");
}
}
}
$a= new AddDevice;

?>
		