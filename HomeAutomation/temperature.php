<html>
<?php

session_start();
if($_SESSION['flag']!=1)
{
  include('index.html');
}
require_once("connection.php");
$qry="select regulation,bulb from control where username='".$_SESSION["uname"]."'";
$result=$con->query($qry);
$n=$result->num_rows;
if($n==0){
  echo "<script>alert('You does not install any device .Please add the device');</script>";
  include('hello1.php');
  die();
}

?>
<body background="sunshine.jpg">



<center><h1>Temperature</h1></center>

<center><br><br> <br><br><br><br><br><iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/147048/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line"></iframe></center>

<?php

$msg=eval("https://api.thingspeak.com/apps/thinghttp/send_request?api_key=K4UGKKIYHKW0SVPI");

echo($msg);


?>


</body>

</html>
<?php
header("Refresh:15");

?>