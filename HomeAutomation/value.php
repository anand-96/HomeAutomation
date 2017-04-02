<?php
require('connection.php');
$sql ="select * from control  ";
$result=$con->query($sql);
while($row=$result->fetch_assoc()){
echo $row['regulation'];
}
?>