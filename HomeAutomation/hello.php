<!DOCTYPE html>
<html>
<head>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */
.button4 {background-color: #e7e7e7; color: black;} /* Gray */
.button5 {background-color: #555555;} /* Black */

#ledi{


display:none;
}



#fani{


display:none;
}
</style>

<script src="jquery-3.1.0.js">

</script>


<script>


$(document).ready(function(){

$("#led").click(function(){

$("#ledi").show();



},function(){

$("#ledi").toggle();
});



}

);

$(document).ready(function(){

$("#fan").click(function(){

$("#fani").show();



},function(){

$("#fani").toggle();
});



}

);

function set_led(){
 var str=$("#bright").val();
document.write(str);



var e = document.getElementById("switch1");
var str2= e.options[e.selectedIndex].value;
document.write(str2);




}




</script>
</head>
<body>

<h2>Select Options</h2>
<button  class="button" id="led">LED</button>
<button id="fan" class="button button2">FAN</button>
<button   id="location"  class="button button3">LOCATION</button>
<button   id="temperature" class="button button5">TEMPERATURE</button>

<div id="ledi">

<img src="bulb.jpg" style=width:2cm; height:2cm>

<b> select brightness </b></br>
<form action="upload.php" method="post">
<input type="range"  id="bright" min ="1" max="5" name="brightness"/></br>
<b> set/reset</b></br>
<select name="switch1" id="switch1"></br>
<option value="on">on</option>
<option value="off">off</option>
</select></br>

<input type="submit" value="set changes"/> 

</form>

</div>

<div id="fani">

<img src="fan.png" style=width:2cm; height:2cm>

<b> select speed </b></br>
<form action="upload.php" method="post">
<input type="range"  id="speed" min ="1" max="5" name="sp"/></br>
<b> set/reset</b></br>
<select name="switch2" id="switch2"></br>
<option value="on">on</option>
<option value="off">off</option>
</select></br>
</br>
<input type="submit" value="set changes" /> 

</form>

</div>






</body>
</html>

