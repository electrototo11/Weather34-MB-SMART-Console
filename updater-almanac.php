<?php include('settings.php');?>
<script src="js/jquery.js"></script>

<script>

(function(a){a(document).ready(function(){a.ajaxSetup({cache:false,success:function(){a("#temperature").show()}});var c=a("#temperature");c.load("temperature-almanac.php");var b=setInterval(function(){c.load("temperature-almanac.php")},1160000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#dewpoint").show()}});var c=a("#dewpoint");c.load("dewpoint-almanac.php");var b=setInterval(function(){c.load("dewpoint-almanac.php")},1160000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#humidity").show()}});var c=a("#humidity");c.load("humidity-almanac.php");var b=setInterval(function(){c.load("humidity-almanac.php")},1160000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#wind").show()}});var c=a("#wind");c.load("wind-almanac.php");var b=setInterval(function(){c.load("wind-almanac.php")},1160000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#direction").show()}});var c=a("#direction");c.load("directionmod.php");var b=setInterval(function(){c.load("directionmod.php")},1160000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#gust").show()}});var c=a("#gust");c.load("gustmod.php");var b=setInterval(function(){c.load("gustmod.php")},1160000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#rain").show()}});var c=a("#rain");c.load("rain-almanac.php");var b=setInterval(function(){c.load("rain-almanac.php")},1160000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#barometer").show()}});var c=a("#barometer");c.load("barometer-almanac.php");var b=setInterval(function(){c.load("barometer-almanac.php")},1160000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#uvindex").show()}});var c=a("#uvindex");c.load("uv-almanac.php");var b=setInterval(function(){c.load("uv-almanac.php")},1160000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#solar").show()}});var c=a("#solar");c.load("solar-almanac.php");var b=setInterval(function(){c.load("solar-almanac.php")},1160000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#clock").show()}});var c=a("#clock");c.load("weather34-clockphone3.php");var b=setInterval(function(){c.load("weather34-clockphone3.php")},1160000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#indoor").show()}});var c=a("#indoor");c.load("weather34-indoormod2.php");var b=setInterval(function(){c.load("weather34-indoormod2.php")},1160000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#position10").show()}});var c=a("#position10");c.load("<?php echo $position10 ?>");var b=setInterval(function(){c.load("<?php echo $position10 ?>")},80000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#position11").show()}});var c=a("#position11");c.load("<?php echo $position11 ?>");var b=setInterval(function(){c.load("<?php echo $position11 ?>")},72000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#position12").show()}});var c=a("#position12");c.load("<?php echo $position12 ?>");var b=setInterval(function(){c.load("<?php echo $position12 ?>")},130000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#position13").show()}});var c=a("#position13");c.load("<?php echo $position13 ?>");var b=setInterval(function(){c.load("<?php echo $position13 ?>")},13000)})})(jQuery);
</script>

<script type="text/javascript">
var clockID;var yourTimeZoneFrom='<?php echo $UTC?>';var d=new Date();
var weekdays=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var months=["January","Febuary","March","April","May","June","July","August","September","October","November","December"];
var tzDifference=yourTimeZoneFrom*60+d.getTimezoneOffset();var offset=tzDifference*60*1000;function UpdateClock(){var e=new Date(new Date().getTime()+offset);var c=e.getHours();var a=e.getMinutes();var g=e.getSeconds();var f=e.getFullYear();var h=months[e.getMonth()];var b=e.getDate();var b=e.getDate();
var suffix = "";switch(b) {case 1: case 21: case 31: suffix = 'st'; break;case 2: case 22: suffix = 'nd'; break;case 3: case 23: suffix = 'rd'; break;default: suffix = 'th';}
var i=weekdays[e.getDay()];if(a<10){a="0"+a}if(g<10){g="0"+g}if(c<10){c="0"+c}
document.getElementById("weather34clock4").innerHTML="<div class='thedate3'> "+i+" "+h+" "+b+suffix+" "+f+" </div><div class='clock3'><time> "+c+":"+a+":"+g}
function StartClock(){clockID=setInterval(UpdateClock,500)}function KillClock(){clearTimeout(clockID)}window.onload=function(){StartClock()}(jQuery);</script></time>