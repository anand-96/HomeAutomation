<html>
<head>
<script src="js/jquery.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/skel-layers.min.js"></script>
<script src="js/init.js"></script>
<script>// set your channel IDs here
var channel_id1 = 147048;
// set your channel read api keys here
var api_key1 = '1BZR15ETHS0P2R75';

function getData() {
//Get Data Set 1
$.getJSON('https://api.thingspeak.com/channels/' + channel_id1 + '/feed/last.json?api_key=' + api_key1, function(data1) {
   alert(data1.field1+"anand");
});
}

getData();
</script>
</head>
</html>