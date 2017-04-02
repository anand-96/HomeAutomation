<?php
session_start();
$_SESSION['flag']=0;
$uname=$_POST["username"];
$pass=$_POST["password"];
echo($uname);
echo($pass);

require_once("connection.php");
$sql="select username,email from user where username='".$uname."' and password='".$pass."'";

$result=$con->query($sql);

if($row=$result->fetch_assoc())
{
$_SESSION['flag']=1;
$_SESSION['uname']=$uname;
$_SESSION['email']=$row["email"];
require("hello1.php");
$uname=$row["username"];

}
else{

require("signin.html");
?>
<script>
alert("invalid username or password plz try again");
</script>
<?php

}

?>