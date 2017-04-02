<?php

class Logout
{
function __construct()
{
session_start();

$_SESSION['flag']=0;


session_destroy();

require("index.html");
}

}
$a=new Logout;

?>