<?php
$email=$_POST["email"];


$servername="localhost";
$username="u100996688_homex";
$password="homecontrol";
$dbname="u100996688_homex";
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
	die("connection failed".$con->connect_error);
	
	
	
}
$sql ="select * from user where email='".$email."'";
$result=$con->query($sql);


if($row=$result->fetch_assoc()){


$emailcut = substr($email, 0, 4);
		$randNum = rand(10000,99999);
		$tempPass = $emailcut.$randNum;
		$hashTempPass =md5($tempPass);

		$sql1 = "UPDATE user SET password='".$hashTempPass."' WHERE username='".$row['username']."' ";
$con->query($sql1);
$to = $email;
		$from = "abhishek.chelawat@gmail.com";
		$headers ="From:abhishek.chelawat@gmail.com";
		
		$subject ="yoursite Temporary Password";
		$msg = "hello".$row['fname']."The new temporary password for your  Home Automation login is".$hashTempPass." click here to login: www.homecontrol.esy.es";
		if(mail($to,$subject,$msg,$headers)) {
			include('signin.html');
?>
<script>
alert("we have sent the new login password to ur repected email-id plz visit and sign-in");
</script>
<?php
			exit();
		} else {
			echo "email_send_failed";
			exit();
		}
    
}
else{

include('fpass.html');
?>
<script>
alert("your credential doesnot match,plz try again");
</script>
<?php
}

?>