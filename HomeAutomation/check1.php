<?php



class Register{


function __construct()
{

session_start();
$uname=$_POST["username"];
$pass=$_POST["password"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$servername="localhost";
$username="u100996688_homex";
$password="homecontrol";
$dbname="u100996688_homex";
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
	die("connection failed".$con->connect_error);
	
}
$sql="insert into user values('".$fname."','".$lname."','".$uname."','".$email."','".$pass."')";

if($con->query($sql))
{
?>
<script>
alert('Registered Successfully');
</script>
<?php
require("signin.html");
}
else
{
require("index.html");
}
}

}



$a=new Register;


?>

