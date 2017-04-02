<?php
require_once('connection.php');

$sql="select * from control where device='led'";
$result=$con->query($sql);

$row=$result->fetch_assoc();

?>


<html>
<head>
</head>
<body>
<div id="led">
<h1>Brightness of LED </h1>
<h2> <?php  echo $row["regulation"] ?></h2>
</br>

<h1>STATUS </h1>
<h2> <?php echo $row["on/of"] ?></h2>
</br>
</div>
</body>
</html>