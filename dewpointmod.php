<?php include('livedata.php');?>
<div class="modulecaption2"><?php echo $lang['Dewpoint']; ?> &deg;<?php echo $weather["temp_units"]?></div>
<div class="button button-dial">
<div class="button-dial-top"></div>
<realfeel>
<?php 
if ($weather["temp_units"]=='C' && $weather["dewpoint"]>=20){ echo $lang['Discomfort'];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]>=15){ echo $lang['Feels Warm'];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]>=10){ echo $lang['Comfortable'];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]>=5 ){ echo $lang['Cooler'];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]>-50 ){ echo $lang['Feels Colder'];}
//non metric
if ($weather["temp_units"]=='F' && $weather["dewpoint"]>=68){ echo $lang['Discomfort'];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]>=59){  $lang['Feels Warm'];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]>=50){ echo $lang['Comfortable'];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]>=41 ){ echo $lang['Cooler'];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]>-100 ){ echo $lang['Feels Colder'];}
?>
</realfeel>
<div class="button-dial-label">
<?php 
if($weather["temp_units"]=='C' && $weather["dewpoint"]<-10){ echo "<icon-minus10>".$weather["dewpoint"]."&deg;</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<-5){ echo "<icon-minus5>".$weather["dewpoint"]."&deg;</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<0){ echo "<icon-zero>".$weather["dewpoint"]."&deg;</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<6){ echo "<icon-0-5>".$weather["dewpoint"]."&deg;</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<10){ echo "<icon-6-10>".$weather["dewpoint"]."&deg;</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<15){ echo "<icon-11-15>".$weather["dewpoint"]."&deg;</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<20){ echo "<icon-16-20>".$weather["dewpoint"]."&deg;</icon-16-20>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<25){ echo "<icon-21-25>".$weather["dewpoint"]."&deg;</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<30){ echo "<icon-26-30>".$weather["dewpoint"]."&deg;</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<35){ echo "<icon-31-35>".$weather["dewpoint"]."&deg;</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<40){ echo "<icon-36-40>".$weather["dewpoint"]."&deg;</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<100){ echo "<icon-41-45>".$weather["dewpoint"]."&deg;</icon-41-45>";}
//non metric        
if($weather["temp_units"]=='F' && $weather["dewpoint"]<14){ echo "<icon-minus10>".$weather["dewpoint"]."&deg;</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<23){ echo "<icon-minus5>".$weather["dewpoint"]."&deg;</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<32){ echo "<icon-zero>".$weather["dewpoint"]."&deg;</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<42){ echo "<icon-0-5>".$weather["dewpoint"]."&deg;</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<50){ echo "<icon-6-10>".$weather["dewpoint"]."&deg;</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<59){ echo "<icon-11-15>".$weather["dewpoint"]."&deg;</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<68){ echo "<icon-16-20>".$weather["dewpoint"]."&deg;</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<77){ echo "<icon-21-25>".$weather["dewpoint"]."&deg;</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<86){ echo "<icon-26-30>".$weather["dewpoint"]."&deg;</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<95){ echo "<icon-31-35>".$weather["dewpoint"]."&deg;</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<104){ echo "<icon-36-40>".$weather["dewpoint"]."&deg;</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<300){ echo "<icon-41-45>".$weather["dewpoint"]."&deg;</icon-41-45>";}
?></div></div><div>

<?php //unit
echo "<unitindicator>&deg;";echo $weather["temp_units"];echo "</unitindicator>";?>

<?php //feels like man
echo "<tempman>";
if($weather["temp_units"]=='C' && $weather["dewpoint"]<-10){ echo "<icon-minus10>".$tempman."</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<-5){ echo "<icon-minus5>".$tempman."</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<0){ echo "<icon-zero>".$tempman."</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<6){ echo "<icon-0-5>".$tempman."</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<10){ echo "<icon-6-10>".$tempman."</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<15){ echo "<icon-11-15>".$tempman."</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<20){ echo "<icon-16-20>".$tempman."</icon-16-20>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<25){ echo "<icon-21-25>".$tempman."</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<30){ echo "<icon-26-30>".$tempman."</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<35){ echo "<icon-31-35>".$tempman."</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<40){ echo "<icon-36-40>".$tempman."</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<100){ echo "<icon-41-45>".$tempman."</icon-41-45>";}
//non metric
if($weather["temp_units"]=='F' && $weather["dewpoint"]<14){ echo "<icon-minus10>".$tempman."</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<26){ echo "<icon-minus5>".$tempman."</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<32){ echo "<icon-zero>".$tempman."</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<42){ echo "<icon-0-5>".$tempman."</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<50){ echo "<icon-6-10>".$tempman."</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<59){ echo "<icon-11-15>".$tempman."</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<68){ echo "<icon-16-20>".$tempman."</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<77){ echo "<icon-21-25>".$tempman."</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<86){ echo "<icon-26-30>".$tempman."</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<95){ echo "<icon-31-35>".$tempman."</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<104){ echo "<icon-36-40>".$tempman."</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<300){ echo "<icon-41-45>".$tempman."</icon-41-45>";}
echo "</tempman>";?>
</div></div></div>
</div></div>

<div class="heatcircle"><div class="heatcircle-content">
<?php  //dewpoint max Year
echo "<valuetextheading1>".date('Y')." Max <deepblue>".$weather["dewymaxtime"]."</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>";
echo $weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];
?><smalltempunit2></div></div>

<div class="heatcircle2"><div class="heatcircle-content">
<?php  //dewpoint min year
echo "<valuetextheading1>".date('Y')." Min <deepblue>".$weather["dewymintime"]."</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>";
echo $weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"]; 
?></smalltempunit2></div></div>

<div class="heatcircleindoor"><div class="heatcircle-content">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lang['Month']?> <orange>Max</orange>-<deepblue>Min</deepblue></valuetextheading1>
<?php //month max min
echo "<div class=tempmodulehomemaxmin>". $weather["dewmmax"]."&deg;<smalltempunit2>".$weather["temp_units"]."</smalltempunit2>&nbsp;|&nbsp;";
echo $weather["dewmmin"]."&deg;<smalltempunit2>".$weather["temp_units"]."</smalltempunit2>";?>
</div></div>

<div class=thetrendgap>
<?php 
//falling
if($weather["dewpoint_trend"]<0){echo '<div class=thetrendboxblue>'.$lang['Falling']. '';echo '&nbsp;'.$fallingsymbolx.'&nbsp;<blue> '.number_format($weather["temp_trend"],1).'</blue>&deg;';}
//rising
else if($weather["dewpoint_trend"]>0){echo '<div class=thetrendboxorange>&nbsp;'.$lang['Rising']. '';echo '&nbsp;'.$risingsymbolx.'&nbsp;<orange> + '.number_format($weather["temp_trend"],1).'</orange>&deg;';}
//steady
else echo '<div class=thetrendboxblue>'.$lang['Steady']. ' '.$steadysymbol.'';?>
</div></div>

<div class="weather-tempicon-identity">    
<?php //dewpoint id
if($weather["temp_units"]=='C' && $weather["dewpoint"]<-10){ echo "<icon-minus10>".$weather34_temp_icon."</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<-5){ echo "<icon-minus5>".$weather34_temp_icon."</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<0){ echo "<icon-zero>".$weather34_temp_icon."</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<6){ echo "<icon-0-5>".$weather34_temp_icon."</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<10){ echo "<icon-6-10>".$weather34_temp_icon."</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<15){ echo "<icon-11-15>".$weather34_temp_icon."</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<20){ echo "<icon-16-20>".$weather34_temp_icon."</icon-16-20>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<25){ echo "<icon-21-25>".$weather34_temp_icon."</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<30){ echo "<icon-26-30>".$weather34_temp_icon."</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<35){ echo "<icon-31-35>".$weather34_temp_icon."</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<40){ echo "<icon-36-40>".$weather34_temp_icon."</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<100){ echo "<icon-41-45>".$weather34_temp_icon."</icon-41-45>";}
//non metric
if($weather["temp_units"]=='F' && $weather["dewpoint"]<14){ echo "<icon-minus10>".$weather34_temp_icon."</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<26){ echo "<icon-minus5>".$weather34_temp_icon."</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<32){ echo "<icon-zero>".$weather34_temp_icon."</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<42.8){ echo "<icon-0-5>".$weather34_temp_icon."</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<50){ echo "<icon-6-10>".$weather34_temp_icon."</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<59){ echo "<icon-11-15>".$weather34_temp_icon."</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<68){ echo "<icon-16-20>".$weather34_temp_icon."</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<77){ echo "<icon-21-25>".$weather34_temp_icon."</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<86){ echo "<icon-26-30>".$weather34_temp_icon."</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<95){ echo "<icon-31-35>".$weather34_temp_icon."</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<104){ echo "<icon-36-40>".$weather34_temp_icon."</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<300){ echo "<icon-41-45>".$weather34_temp_icon."</icon-41-45>";}
?></div></div></div>

<div class="maxwind">
<?php  //Max-Min
echo "Max ";
if($weather["temp_units"]=='C' && $weather["dewmax"]<-10){ echo "<icon-minus10>".$weather["dewmax"]."</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<-5){ echo "<icon-minus5>".$weather["dewmax"]."</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<0){ echo "<icon-zero>".$weather["dewmax"]."</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<6){ echo "<icon-0-5>".$weather["dewmax"]."</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<10){ echo "<icon-6-10>".$weather["dewmax"]."</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<15){ echo "<icon-11-15>".$weather["dewmax"]."</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<20){ echo "<icon-16-20>".$weather["dewmax"]."</icon-16-20>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<25){ echo "<icon-21-25>".$weather["dewmax"]."</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<30){ echo "<icon-26-30>".$weather["dewmax"]."</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<35){ echo "<icon-31-35>".$weather["dewmax"]."</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<40){ echo "<icon-36-40>".$weather["dewmax"]."</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<100){ echo "<icon-41-45>".$weather["dewmax"]."</icon-41-45>";}
//non metric
if($weather["temp_units"]=='F' && $weather["dewmax"]<14){ echo "<icon-minus10>".$weather["dewmax"]."</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<23){ echo "<icon-minus5>".$weather["dewmax"]."</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<32){ echo "<icon-zero>".$weather["dewmax"]."</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<42.8){ echo "<icon-0-5>".$weather["dewmax"]."</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<50){ echo "<icon-6-10>".$weather["dewmax"]."</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<59){ echo "<icon-11-15>".$weather["dewmax"]."</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<68){ echo "<icon-16-20>".$weather["dewmax"]."</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<77){ echo "<icon-21-25>".$weather["dewmax"]."</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<86){ echo "<icon-26-30>".$weather["dewmax"]."</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<95){ echo "<icon-31-35>".$weather["dewmax"]."</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<104){ echo "<icon-36-40>".$weather["dewmax"]."</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<300){ echo "<icon-41-45>".$weather["dewmax"]."</icon-41-45>";}
echo "&deg; | ";
echo "Min ";
if($weather["temp_units"]=='C' && $weather["dewmin"]<-10){ echo "<icon-minus10>".$weather["dewmin"]."</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<-5){ echo "<icon-minus5>".$weather["dewmin"]."</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<0){ echo "<icon-zero>".$weather["dewmin"]."</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<6){ echo "<icon-0-5>".$weather["dewmin"]."</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<10){ echo "<icon-6-10>".$weather["dewmin"]."</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<15){ echo "<icon-11-15>".$weather["dewmin"]."</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<20){ echo "<icon-16-20>".$weather["dewmin"]."</icon-16-20>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<25){ echo "<icon-21-25>".$weather["dewmin"]."</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<30){ echo "<icon-26-30>".$weather["dewmin"]."</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<35){ echo "<icon-31-35>".$weather["dewmin"]."</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<40){ echo "<icon-36-40>".$weather["dewmin"]."</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<100){ echo "<icon-41-45>".$weather["dewmin"]."</icon-41-45>";}
//non metric
if($weather["temp_units"]=='F' && $weather["dewmin"]<14){ echo "<icon-minus10>".$weather["dewmin"]."</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<23){ echo "<icon-minus5>".$weather["dewmin"]."</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<32){ echo "<icon-zero>".$weather["dewmin"]."</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<42.8){ echo "<icon-0-5>".$weather["dewmin"]."</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<50){ echo "<icon-6-10>".$weather["dewmin"]."</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<59){ echo "<icon-11-15>".$weather["dewmin"]."</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<68){ echo "<icon-16-20>".$weather["dewmin"]."</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<77){ echo "<icon-21-25>".$weather["dewmin"]."</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<86){ echo "<icon-26-30>".$weather["dewmin"]."</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<95){ echo "<icon-31-35>".$weather["dewmin"]."</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<104){ echo "<icon-36-40>".$weather["dewmin"]."</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<300){ echo "<icon-41-45>".$weather["dewmin"]."</icon-41-45>";}
echo "&deg;";?></div>