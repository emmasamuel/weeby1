<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
<style id="jsbin-css">
body {
 width: auto;
    height: 1200px;
    background-image: url("https://s5.postimg.org/433csq3hj/Google_Pixel-_Front-_Hand.jpg");
   background-size:cover;
    background-repeat: no-repeat;
}
.wow {
 width: 250px;
    height: 50px;
color: white;
    margin-left: 820px;
    padding-top: 400px;
    
    
  
}
#clock{
    text-align:center;
    width:auto;
    height:auto;
    font-size: 60px;
    margin-left: 200px;
    
}
</style>
</head>
<body>

  
  
  <?php
date_default_timezone_set('UTC');
?>
<script>
var d = new Date(<?php echo time() * 1000 ?>);
function digitalClock() {
  d.setTime(d.getTime() + 1000);
  var hrs = d.getHours();
  var mins = d.getMinutes();
  var secs = d.getSeconds();
  mins = (mins < 10 ? "0" : "") + mins;
  secs = (secs < 10 ? "0" : "") + secs;
  var apm = (hrs < 12) ? "am" : "pm";
  hrs = (hrs > 12) ? hrs - 12 : hrs;
  hrs = (hrs == 0) ? 12 : hrs;
  var ctime = hrs + ":" + mins + ":" + secs + " " + apm;
  document.getElementById("clock").firstChild.nodeValue = ctime;
}
window.onload = function() {
  digitalClock();
  setInterval('digitalClock()', 1000);
}
</script>
<div class="wow">   
<div id="clock"> </div> 
</div>
  
  
  
<script id="jsbin-source-css" type="text/css">body {
 width: auto;
    height: 1200px;
    background-image: url("https://s5.postimg.org/433csq3hj/Google_Pixel-_Front-_Hand.jpg");
   background-size:cover;
    background-repeat: no-repeat;
}
.wow {
 width: 250px;
    height: 50px;
color: white;
    margin-left: 820px;
    padding-top: 400px;
    
    
  
}
#clock{
    text-align:center;
    width:auto;
    height:auto;
    font-size: 60px;
    margin-left: 200px;
    
}
</script>
</body>
</html>





body {
 width: auto;
    height: 1200px;
    background-image: url("https://s5.postimg.org/433csq3hj/Google_Pixel-_Front-_Hand.jpg");
   background-size:cover;
    background-repeat: no-repeat;
}



.wow {
 width: 250px;
    height: 50px;
color: white;
    margin-left: 820px;
    padding-top: 400px;
    
    
  
}


#clock{
    text-align:center;
    width:auto;
    height:auto;
    font-size: 60px;
    margin-left: 200px;
    
}
