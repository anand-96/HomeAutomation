<!DOCTYPE html>
<html lang="en">
<?php

session_start();
if($_SESSION['flag']!=1)
   include('index.html');
require_once('connection.php');
$qry="select regulation,bulb from control where username='".$_SESSION["uname"]."'";
$result=$con->query($qry);
$n=$result->num_rows;
if($n==0){
  echo "<script>alert('You does not install any device .Please add the device');</script>";
  include('hello1.php');
  die();
}
?>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Control Your Device</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets3/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets3/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets3/css/form-elements.css">
        <link rel="stylesheet" href="assets3/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

       <span class="li-social">
               
								<div><a href="logout.php"><p>     </p><img style="margin-left:900px;" src="exit.png" height="42" widhth="42"></i></a></div>
                                                                  <div style="margin-left:900px; color:black;"><h3> Logout</h3></div> 
                        
		</span>
    </head>

	<script>
function change()
{
var x=document.getElementById("bulb").src;

var y;
if(x=="http://homecontrol.esy.es/assets3/img/bulbon.png"|| x=="assets3/img/bulbon.png")
{
document.getElementById("bulb").src="http://homecontrol.esy.es/assets3/img/bulboff.png";
y="13";
document.getElementById("bulboff").play();

}
else
{
document.getElementById("bulb").src="http://homecontrol.esy.es/assets3/img/bulbon.png";
y="12";
document.getElementById("bulbon").play();
}
var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("ekta").innerHTML=xmlhttp.responseText();
}
};

xmlhttp.open("GET","bulb.php?p="+y,true);
xmlhttp.send();

}

function change1()
{
var y=20;
var x=document.getElementById("fn").value;


if(x=="0")
{
   x="1";
   document.getElementById("fn").value=x;
    document.getElementById("fn1").innerHTML="FAN SPEED=1";
    y=21;
document.getElementById("speed1").play();
}
else if(x=="1")
{
   x="2";
   document.getElementById("fn").value=x;
     document.getElementById("fn1").innerHTML="FAN SPEED=2";
    y=22;
document.getElementById("speed2").play();
}
else if(x=="2")
{
   x="3";
   document.getElementById("fn").value=x;
     document.getElementById("fn1").innerHTML="FAN SPEED=3";
    y=23;
document.getElementById("speed3").play();
}
else if(x=="3")
{
   x="4";
   document.getElementById("fn").value=x;
     document.getElementById("fn1").innerHTML="FAN SPEED=4";
    y=24;
document.getElementById("speed4").play();
}
else if(x=="4")
{
   x="5";
   document.getElementById("fn").value=x;
     document.getElementById("fn1").innerHTML="FAN SPEED=5";
    y=25;
document.getElementById("speed5").play();
}
else if(x=="5")
{
   x="0";
   document.getElementById("fn").value=x;
    document.getElementById("fn1").innerHTML="FAN OFF";
    y=20;
document.getElementById("fanoff").play();
}
var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("ekta").innerHTML=xmlhttp.responseText();
}
};

xmlhttp.open("GET","bulb.php?p="+y,true);
xmlhttp.send();

}
</script>
    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					
							
				
					
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Control Your Device</h1>
                            <div class="description">
                            	<p>
	                            	Control your Device by making changes in their state and there parameters
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-6 phone">

                                  <?php

                                   include('connection.php');
                                    $qry="select regulation from control";
                                       $b="assets3/img/bulb";
                                      $result=$con->query($qry);
                                        if($row=$result->fetch_assoc())
                                             {
                                                 if($row["regulation"]==="pin=12")
                                                         $x="on.png";
                                                 if($row["regulation"]==="pin=13")
                                                         $x="off.png";
                      
                                                        }
                                                    $b=$b.$x;
                                            ?>
 
                    		<img  id="bulb" src=<?php echo $b ?> alt="" onclick="change()">
                                 <h1>Bulb</h1>
                    	</div>
                       <div class="col-sm-6 phone">
                    		<img  id="fan" src="assets3/img/fan1.png" alt="" onclick="change1()">
                                    <h1>Fan</h1>
                                  <div id="fn1" style="color:White"> </div>

                    	</div>
                         <input type="hidden" value="0" id="fn"/>
                    </div>
                </div>
            </div>
            
        </div>

<audio id="bulbon">
 
  <source src="bon.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>





<audio id="bulboff">
 
  <source src="boff.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>

<audio id="fanoff">
 
  <source src="foff.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
<audio id="speed1">
 
  <source src="s1.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>

<audio id="speed2">
 
  <source src="s2.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>

<audio id="speed3">
 
  <source src="s3.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>


<audio id="speed4">
 
  <source src="s4.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>

<audio id="speed5">
 
  <source src="s5.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>




<div id="ekta" >


</div>






        <!-- Javascript -->
        <script src="assets3/js/jquery-1.11.1.min.js"></script>
        <script src="assets3/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets3/js/jquery.backstretch.min.js"></script>
        <script src="assets3/js/retina-1.1.0.min.js"></script>
        <script src="assets3/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets3/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>					