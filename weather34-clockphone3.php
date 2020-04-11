<?php 
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017                                #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at 													   #
	#   https://weather34.com/homeweatherstation/index.html 										   # 
	# 	WEATHER STATION TEMPLATE 2015-2017                 										       #
	# 	     MB SMART Version Revised September 2019 								                   #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');header('Content-type: text/html; charset=utf-8');	?>
<div class="almanac-word-clock">Local Time</div><br><br>
<div id="weather34clock2"></div>
<script type="text/javascript">
var clockID;var yourTimeZoneFrom='<?php echo $UTC?>';var d=new Date();
var weekdays=[
//translate weather34 day
"<?php echo $lang['Sunday']?>",
"<?php echo $lang['Monday']?>",
"<?php echo $lang['Tuesday']?>",
"<?php echo $lang['Wednesday']?>",
"<?php echo $lang['Thursday']?>",
"<?php echo $lang['Friday']?>",
"<?php echo $lang['Saturday']?>"];
//translate weather34 month
var months=[
"<?php echo $lang['January']?>",
"<?php echo $lang['February']?>",
"<?php echo $lang['March']?>",
"<?php echo $lang['April']?>",
"<?php echo $lang['May']?>",
"<?php echo $lang['June']?>",
"<?php echo $lang['July']?>",
"<?php echo $lang['August']?>",
"<?php echo $lang['September']?>",
"<?php echo $lang['October']?>",
"<?php echo $lang['November']?>",
"<?php echo $lang['December']?>"];
//calculte the weather34 date-time UTC
var tzDifference=yourTimeZoneFrom*60+d.getTimezoneOffset();
var offset=tzDifference*60*1000;
function UpdateClock(){
var e=new Date(new Date().getTime()+offset);
var a=e.getMinutes();
var g=e.getSeconds();
var f=e.getFullYear();
var h=months[e.getMonth()];
var b=e.getDate();
// add the weather34 date prefix
var suffix = "";switch(b) {case 1: case 21: case 31: suffix = 'st'; break;case 2: case 22: suffix = 'nd'; break;case 3: case 23: suffix = 'rd'; break;default: suffix = 'th';}
var i=weekdays[e.getDay()];if(a<10){a="0"+a}if(g<10){g="0"+g}if(c<10){c="0"+c}
//weather34 option to use 24/12 hour format
var c=e.getHours()
<?php if ($clockformat == '12') { echo '% 12 || 12';} else { echo '% 24 || 00';}?>;
document.getElementById("weather34clock2").innerHTML="<div class='thedate4'> "+i+" "+h+" "+b+suffix+" "+f+" </div><div class='clock4'> "+c+":"+a+":"+g+
"<?php if($clockformat=='12') {echo "<smalltempunit2>".date('a')."</smalltempunit2>";} else {echo "";}?>"
}
function StartClock(){clockID=setInterval(UpdateClock,500)}
function KillClock(){clearTimeout(clockID)}window.onload=function(){StartClock()}(jQuery);</script>
</div></div>
<div class="weather-clockicon-identity" >   
<?php echo "<icon-0-5>".$timeicon."</icon-0-5>"; ?></div>