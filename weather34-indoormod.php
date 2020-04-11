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
<div class="sunblock">
<div class="indoordesc"><?php echo $lang['Indoor']?> &deg;<?php echo $weather["temp_units"]?></div>
<div class="button button-dial-small">      
<div class="button-dial-top-small"></div>
<div class="button-dial-label-small">          
<?php 
if($weather["temp_units"]=='C' && $weather["temp_indoor"]<-10){ echo "<icon-minus10>".$weather["temp_indoor"]."&deg;</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<-5){ echo "<icon-minus5>".$weather["temp_indoor"]."&deg;</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<0){ echo "<icon-zero>".$weather["temp_indoor"]."&deg;</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<6){ echo "<icon-0-5>".$weather["temp_indoor"]."&deg;</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<10){ echo "<icon-6-10>".$weather["temp_indoor"]."&deg;</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<15){ echo "<icon-11-15>".$weather["temp_indoor"]."&deg;</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<20){ echo "<icon-16-20>".$weather["temp_indoor"]."&deg;</icon-16-20>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<25){ echo "<icon-21-25>".$weather["temp_indoor"]."&deg;</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<30){ echo "<icon-26-30>".$weather["temp_indoor"]."&deg;</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<35){ echo "<icon-31-35>".$weather["temp_indoor"]."&deg;</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<40){ echo "<icon-36-40>".$weather["temp_indoor"]."&deg;</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<100){ echo "<icon-41-45>".$weather["temp_indoor"]."&deg;</icon-41-45>";}
          
if($weather["temp_units"]=='F' && $weather["temp_indoor"]<14){ echo "<icon-minus10>".$weather["temp_indoor"]."&deg;</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<23){ echo "<icon-minus5>".$weather["temp_indoor"]."&deg;</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<32){ echo "<icon-zero>".$weather["temp_indoor"]."&deg;</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<42){ echo "<icon-0-5>".$weather["temp_indoor"]."&deg;</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<50){ echo "<icon-6-10>".$weather["temp_indoor"]."&deg;</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<59){ echo "<icon-11-15>".$weather["temp_indoor"]."&deg;</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<68){ echo "<icon-16-20>".$weather["temp_indoor"]."&deg;</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<77){ echo "<icon-21-25>".$weather["temp_indoor"]."&deg;</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<86){ echo "<icon-26-30>".$weather["temp_indoor"]."&deg;</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<95){ echo "<icon-31-35>".$weather["temp_indoor"]."&deg;</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<104){ echo "<icon-36-40>".$weather["temp_indoor"]."&deg;</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<300){ echo "<icon-41-45>".$weather["temp_indoor"]."&deg;</icon-41-45>";} 
?>  

<?php //feels like man
echo "<indoortempman>";
//c
if($weather["temp_units"]=='C' && $weather["temp_indoor"]<-10){ echo "<icon-minus10>".$hometemp."</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<-5){ echo "<icon-minus5>".$hometemp."</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<0){ echo "<icon-zero>".$hometemp."</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<6){ echo "<icon-0-5>".$hometemp."</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<10){ echo "<icon-6-10>".$hometemp."</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<15){ echo "<icon-11-15>".$hometemp."</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<20){ echo "<icon-16-20>".$hometemp."</icon-16-20";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<25){ echo "<icon-21-25>".$hometemp."</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<30){ echo "<icon-26-30>".$hometemp."</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<35){ echo "<icon-31-35>".$hometemp."</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<40){ echo "<icon-36-40>".$hometemp."</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<100){ echo "<icon-41-45>".$hometemp."</icon-41-45>";}

if($weather["temp_units"]=='F' && $weather["temp_indoor"]<14){ echo "<icon-minus10>".$hometemp."</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<26){ echo "<icon-minus5>".$hometemp."</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<32){ echo "<icon-zero>".$hometemp."</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<42.8){ echo "<icon-0-5>".$hometemp."</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<50){ echo "<icon-6-10>".$hometemp."</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<59){ echo "<icon-11-15>".$hometemp."</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<68){ echo "<icon-16-20>".$hometemp."</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<77){ echo "<icon-21-25>".$hometemp."</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<86){ echo "<icon-26-30>".$hometemp."</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<95){ echo "<icon-31-35>".$hometemp."</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<104){ echo "<icon-36-40>".$hometemp."</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<300){ echo "<icon-41-45>".$hometemp."</icon-41-45>";}

echo "</indoortempman>";?>




</div>

<div class="indoorhumidity-mod2"> 
<?php echo $lang['Humidity']?>&nbsp;
<?php //indoor humidity
if($weather["humidity_indoor"]>70) {
echo '<blue>'.$weather["humidity_indoor"].'</blue><smalltempunit2>%</smalltempunit2>';}
else if($weather["humidity_indoor"]>=40) {
echo '<green>'.$weather["humidity_indoor"].'</green><smalltempunit2>%</smalltempunit2>';}
else if($weather["humidity_indoor"]<40) {
echo '<red>'.$weather["humidity_indoor"].'</red><smalltempunit2>%</smalltempunit2>';}
if($weather["humidity_indoortrend"] >0)echo "&nbsp;".$risingsymbolsmall;
else if($weather["humidity_indoortrend"]<0)echo "&nbsp;".$fallingsymbolsmall;?>
</div>

<div class="indoorfeels-mod2"> 
<?php echo $lang['Feelslike']?>&nbsp;
<?php //indoor feels
//c
if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]<15) {
echo '<blue>'.$weather["temp_indoor_feel"].'</blue>&deg;';}
else if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>24) {
echo '<red>'.$weather["temp_indoor_feel"].'</red>&deg;';}
else if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>19) {
echo '<orange>'.$weather["temp_indoor_feel"].'</orange>&deg;';}
else if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>=15) {
echo '<yellow>'.$weather["temp_indoor_feel"].'</yellow>&deg;';}
//f
if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]<59) {
echo '<blue>'.$weather["temp_indoor_feel"].'</blue>&deg;';}
else if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>75.2) {
echo '<red>'.$weather["temp_indoor_feel"].'</red>&deg;';}
else if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>66.2) {
echo '<orange>'.$weather["temp_indoor_feel"].'</orange>&deg;';}
else if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>=59) {
echo '<yellow>'.$weather["temp_indoor_feel"].'</yellow>&deg;';}
if($weather["temp_indoor_trend"] >0)echo "&nbsp;".$risingsymbolsmall;
else if($weather["temp_indoor_trend"]<0)echo "&nbsp;".$fallingsymbolsmall;?>
</div>