<?php include_once('livedata.php');
// pressure mmHG quick fix over rides mb or hPa 
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa" ){$weather["barometer"]=number_format($weather["barometer"]*0.75006157584566,1);}
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa" ){$weather["barometer_max"]=number_format($weather["barometer_max"]*0.75006157584566,1);}
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa" ){$weather["barometer_min"]=number_format($weather["barometer_min"]*0.75006157584566,1);}
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa" ){$weather["thb0seapressymax"]=number_format($weather["thb0seapressymax"]*0.75006157584566,1);}
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa" ){$weather["thb0seapressymin"]=number_format($weather["thb0seapressymin"]*0.75006157584566,1);}
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa" ){$weather["barometer_units"]="mmHG";}
?>
<meta http-equiv="Content-Type: text/html; charset=UTF-8" />
<style>
.weather34barometerarrowactual{-webkit-transform:rotate(<?php
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa" or $weather["barometer_units"]=="mmHG") {
    echo $weather["barometer"]*0.02953*50.5;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer"]*50.5;
}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa" or $weather["barometer_units"]=="mmHG") {
    echo $weather["barometer"]*0.02953*50.5;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer"]*50.5;
}?>deg);z-index:99}
.weather34barometerarrowmin{-webkit-transform:rotate(<?php
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa" or $weather["barometer_units"]=="mmHG") {
    echo $weather["barometer_min"]*0.02953*50.5;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_min"]*50.5;
}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa" or $weather["barometer_units"]=="mmHG") {
    echo $weather["barometer_min"]*0.02953*50.5;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_min"]*50.5;
}?>deg);z-index:9}
.weather34barometerarrowmax{-webkit-transform:rotate(<?php
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa" or $weather["barometer_units"]=="mmHG") {
    echo $weather["barometer_max"]*0.02953*50.5;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_max"]*50.5;
}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa" or $weather["barometer_units"]=="mmHG") {
    echo $weather["barometer_max"]*0.02953*50.5;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_max"]*50.5;
}?>deg);z-index:9}
valuetextba{font-size:1em}valuetextbc{font-size:1.1em}valuetexttr{font-size:8px}
.text2{font-size:1.1em}
.consoleicon1{margin-left:-166px}
</style>
<div class="modulecaptionpressure"><?php echo $lang['Barometer']?></div>




<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowactual"></div>
<div class="weather34barometerarrowmin"></div>
<div class="weather34barometerarrowmax"></div>
</div>
<div class="text2"><?php echo $weather["barometer"],"<smalltempunit2>".$weather["barometer_units"]."</smalltempunit2>";?>

<thetrend>
<?php 
//falling
if($weather["barometer_trend"]<0){echo $fallingsymbolx.' <blue>'.number_format($weather["barometer_trend"],2).'</blue>';}
//rising
else if($weather["barometer_trend"]>0){echo $risingsymbolx.' <orange> + '.number_format($weather["barometer_trend"],2).'</orange>';}
//steady
else echo "<span style='font-size:11px'>".$lang['Steady'].' '.$steadysymbol.'';?>
</thetrend>
</div></div></div>

<div class="heatcircleindoor" style="margin-top:-3px;margin-left:156px">
<div class="heatcircle-content"><?php echo date('Y')?> Max <blue><?php echo $weather["thb0seapressyearmaxtime"]?></blue>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["thb0seapressymax"]."<smalltempunit2>&nbsp;".$weather["barometer_units"];?></smalltempunit2></div></div>



<div class="heatcircle-content" style="margin-top:5px"><?php echo date('Y')?> Min <blue><?php echo $weather["thb0seapressyearmintime"]?></blue>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["thb0seapressymin"]."<smalltempunit2>&nbsp;".$weather["barometer_units"];?></smalltempunit2></div></div>


<div class="heatcircle-content" style="margin-top:5px"><?php echo $lang['Today']?> <orange>Max</orange>-<blue>Min</blue>
<?php //avg today
echo "<div class=tempmodulehomemaxmin style='font-size:.55rem'>". $weather["barometer_max"]."<smalltempunit2>".$weather["barometer_units"]."</smalltempunit2>&nbsp;|&nbsp; ";
echo $weather["barometer_min"]."<smalltempunit2>".$weather["barometer_units"] 
?></smalltempunit2></div>

<div class="weather-pressureicon-identity">    
<?php echo "<icon-zero>".$weather34_pressure_icon."</icon-zero>";
 ?>
</div>

<?php

//weather34 script Davis forecast outlook
$weather["vpforecasttext"]	=str_replace('within', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('ending', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('likely', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('with', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('possible', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and warmer.', '<oorange>Warmer </oorange>period expected .<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and cooler.', '<blue>Cooler </blue>period expected.<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and ending', 'for', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('to the', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('shift', 'becoming', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('wind shifting', 'shifting', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('wind becoming', 'becoming', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Windy', '<oorange>Windy</oorange>', $weather["vpforecasttext"]);
if (anyToC($weather["temp"])<-1){$weather["vpforecasttext"]	=str_replace('Precipitation',  'Risk of <blue>Snow</blue>.', $weather["vpforecasttext"]);}
else if (anyToC($weather["temp"])<1){$weather["vpforecasttext"]	=str_replace('Precipitation',  'Chance of <blue>Rain</blue> & <blue>Sleet</blue>.', $weather["vpforecasttext"]);}
$weather["vpforecasttext"]	=str_replace('Precipitation',  'Chance of <blue>Rain</blue>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Increasing clouds', 'Periods of <blue>Scattered Clouds</blue><br> ', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and windy', '<oorange>Windy</oorange>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Mostly clear', '<oorange>Mostly Clear </oorange> Conditions<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Partly cloudy', '<blue>Partly Cloudy</blue> Conditions<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Mostly cloudy', '<blue>Mostly Cloudy </blue> Conditions<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('24 to 48 hours', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('6 to 12 hours', '', $weather["vpforecasttext"]); 
$weather["vpforecasttext"]	=str_replace('12 to 24 hours', '', $weather["vpforecasttext"]);  
$weather["vpforecasttext"]	=str_replace('48 to 72 hours', '', $weather["vpforecasttext"]); 
$weather["vpforecasttext"]	=str_replace('12 hours', '', $weather["vpforecasttext"]); 
$weather["vpforecasttext"]	=str_replace('6 hours', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('South West', 'SW', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('South East', 'SE', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('W, NW, or N', 'W,NW,to N', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('little temperature change.', 'No <oorange>Significant </oorange> change in temperature.<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace(', possibly heavy at times', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('becoming', '', $weather["vpforecasttext"]);

//weather34 console vue-vp2 Davis forecast icon
if (preg_match("/Snow/i", $weather["vpforecasttext"]) && anyToC($weather["temp"])<-1)  {echo '<img rel="prefetch" src="forecasticons/snow.svg" class="consoleicon1"  alt="snow forecasted" title="snow forecasted">';} 
else if (preg_match("/Sleet/i", $weather["vpforecasttext"]) && anyToC($weather["temp"])<1)  {echo '<img rel="prefetch" src="forecasticons/sleet.svg" class="consoleicon1" alt="sleet forecasted" title="sleet forecasted">';} 
else if (preg_match("/Rain/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/rainvp.svg" class="consoleicon1" alt="rain forecasted" title="rain forecasted">';} 
else if (preg_match("/Precipitation/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/rainvp.svg" class="consoleicon1" alt="rain forecasted" title="rain forecasted">';} 
else if (preg_match("/Windy/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/windy.svg" class="consoleicon1" alt="windy forecasted" title="windy forecasted">';} 
else if (preg_match("/clear/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/clear.svg" class="consoleicon1" alt="clear forecasted" title="clear forecasted">';}
else if (preg_match("/Partly/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/partly-cloudy-day.svg" class="consoleicon1" alt="partly cloudy forecasted" title="partly cloudy forecasted">';} 
else if (preg_match("/Mostly cloudy/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/mostlycloudy.svg" class="consoleicon1" alt="mostly cloudy forecasted" title="mostly cloudy forecasted">';} 
else if (preg_match("/Scattered/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/scatteredclouds.svg" class="consoleicon1" alt="scattered clouds forecasted" title="scattered clouds forecasted">';} 
?>