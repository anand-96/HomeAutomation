<?php

$to=$_POST["email1"];
$msg=$_POST["message"];
$name=$_POST["name1"];

$msg1="From : '".$name."'Query :'".$msg."'";


		$to1="jain.abhinav2406@gmail.com";
		$headers ="From: '".$to."'";
		
		$subject ="Query : Home Automation";
	if(mail($to1,$subject,$msg1,$headers))
	{
		include('index.html');
		?>
		<script>
		alert("Your Request has been processed");
		</script>
		<?php
	}
	else
	{
		include('index.html');
		?>
		<script>
		alert("Your Request was not processed,Please try Again");
		</script>
		<?php
	}
?>
