<?php include('livedata.php');?>
<div class="modulecaption2"><?php echo $lang['Temperature']; ?> &deg;<?php echo $weather["temp_units"]?></div>
<div class="button button-dial">
<div class="button-dial-top"></div>
<realfeel>
<?php  //heat-index/Feels
if ($weather["temp_units"]=='C' && $weather["windchill"]<0){ echo $lang['Windchill']."<blue> ".$weather["windchill"]."&deg;</blue><smalltempunit2>";}
else if ($weather["temp_units"]=='C' && $weather["realfeel"]>=40){ echo $lang['Feelslike']."<purple> ".$weather['realfeel']."&deg;</purple><smalltempunit2>";}
else if ($weather["temp_units"]=='C' && $weather["realfeel"]>=35){ echo $lang['Feelslike']."<red> ".$weather['realfeel']."&deg;</red><smalltempunit2>";}
else if ($weather["temp_units"]=='C' && $weather["realfeel"]>=30){ echo $lang['Feelslike']."<red> ".$weather['realfeel']."&deg;</red><smalltempunit2>";}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=25){ echo $lang['Feelslike']."<red> ".$weather['realfeel']."&deg;</red><smalltempunit2>";}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=20){ echo $lang['Feelslike']."<orange> ".$weather['realfeel']."</orange>&deg;<smalltempunit2>";}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=15 ){ echo $lang['Feelslike']."<orange> ".$weather['realfeel']."</orange>&deg;<smalltempunit2>";}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=10 ){ echo $lang['Feelslike']."<yellow> ".$weather['realfeel']."</yellow>&deg;<smalltempunit2>";}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=5 ){ echo $lang['Feelslike']."<green> ".$weather['realfeel']."</green>&deg;<smalltempunit2>";}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=0 ){ echo $lang['Feelslike']."<blue> ".$weather['realfeel']."</blue>&deg;<smalltempunit2>";}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>-10 ){ echo $lang['Feelslike']."<blue> ".$weather['realfeel']."</blue>&deg;<smalltempunit2>";}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>-50 ){ echo $lang['Feelslike']."<deepblue> ".$weather['realfeel']."</deepblue>&deg;<smalltempunit2>";}
//non metric
else if ($weather["temp_units"]=='F' && $weather["windchill"]<32){ echo $lang['Windchill']."<blue>".$weather["windchill"]."&deg;</blue><smalltempunit2>";}
else if ($weather["temp_units"]=='F' && $weather["realfeel"]>=104){ echo $lang['Feelslike']."<purple> ".$weather['realfeel']."&deg;</purple><smalltempunit2>";}
else if ($weather["temp_units"]=='F' && $weather["realfeel"]>=95){ echo $lang['Feelslike']."<red> ".$weather['realfeel']."&deg;</red><smalltempunit2>";}
else if ($weather["temp_units"]=='F' && $weather["realfeel"]>=86){ echo $lang['Feelslike']."<red> ".$weather['realfeel']."&deg;</red><smalltempunit2>";}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=77){ echo $lang['Feelslike']."<red> ".$weather['realfeel']."&deg;</red><smalltempunit2>";}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=68){ echo $lang['Feelslike']."<orange> ".$weather['realfeel']."</orange>&deg;<smalltempunit2>";}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=59 ){ echo $lang['Feelslike']."<orange> ".$weather['realfeel']."</orange>&deg;<smalltempunit2>";}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=50 ){ echo $lang['Feelslike']."<yellow> ".$weather['realfeel']."</yellow>&deg;<smalltempunit2>";}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=41 ){ echo $lang['Feelslike']."<green> ".$weather['realfeel']."</green>&deg;<smalltempunit2>";}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=32 ){ echo $lang['Feelslike']."<blue> ".$weather['realfeel']."</blue>&deg;<smalltempunit2>";}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>-14 ){ echo $lang['Feelslike']."<blue> ".$weather['realfeel']."</blue>&deg;<smalltempunit2>";}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>-58 ){ echo $lang['Feelslike']."<deepblue> ".$weather['realfeel']."</deepblue>&deg;<smalltempunit2>";}
?></realfeel>

<div class="button-dial-label">          
<?php 
if($weather["temp_units"]=='C' && $weather["temp"]<-10){ echo "<icon-minus10>".$weather["temp"]."&deg;</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["temp"]<-5){ echo "<icon-minus5>".$weather["temp"]."&deg;</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<0){ echo "<icon-zero>".$weather["temp"]."&deg;</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<6){ echo "<icon-0-5>".$weather["temp"]."&deg;</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<10){ echo "<icon-6-10>".$weather["temp"]."&deg;</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<15){ echo "<icon-11-15>".$weather["temp"]."&deg;</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<20){ echo "<icon-16-20>".$weather["temp"]."&deg;</icon-16-20>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<25){ echo "<icon-21-25>".$weather["temp"]."&deg;</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<30){ echo "<icon-26-30>".$weather["temp"]."&deg;</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<35){ echo "<icon-31-35>".$weather["temp"]."&deg;</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<40){ echo "<icon-36-40>".$weather["temp"]."&deg;</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<100){ echo "<icon-41-45>".$weather["temp"]."&deg;</icon-41-45>";}
//non metric        
if($weather["temp_units"]=='F' && $weather["temp"]<14){ echo "<icon-minus10>".$weather["temp"]."&deg;</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["temp"]<23){ echo "<icon-minus5>".$weather["temp"]."&deg;</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<32){ echo "<icon-zero>".$weather["temp"]."&deg;</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<42){ echo "<icon-0-5>".$weather["temp"]."&deg;</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<50){ echo "<icon-6-10>".$weather["temp"]."&deg;</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<59){ echo "<icon-11-15>".$weather["temp"]."&deg;</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<68){ echo "<icon-16-20>".$weather["temp"]."&deg;</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<77){ echo "<icon-21-25>".$weather["temp"]."&deg;</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<86){ echo "<icon-26-30>".$weather["temp"]."&deg;</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<95){ echo "<icon-31-35>".$weather["temp"]."&deg;</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<104){ echo "<icon-36-40>".$weather["temp"]."&deg;</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<300){ echo "<icon-41-45>".$weather["temp"]."&deg;</icon-41-45>";} 
?></div></div><div>

<?php //unit
echo "<unitindicator>&deg;";echo $weather["temp_units"];echo "</unitindicator>";?>

<?php //feels like man
echo "<tempman>";
if($weather["temp_units"]=='C' && $weather["temp"]<-10){ echo "<icon-minus10>".$tempman."</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["temp"]<-5){ echo "<icon-minus5>".$tempman."</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<0){ echo "<icon-zero>".$tempman."</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<6){ echo "<icon-0-5>".$tempman."</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<10){ echo "<icon-6-10>".$tempman."</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<15){ echo "<icon-11-15>".$tempman."</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<20){ echo "<icon-16-20>".$tempman."</icon-16-20";}
else if($weather["temp_units"]=='C' && $weather["temp"]<25){ echo "<icon-21-25>".$tempman."</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<30){ echo "<icon-26-30>".$tempman."</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<35){ echo "<icon-31-35>".$tempman."</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<40){ echo "<icon-36-40>".$tempman."</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<100){ echo "<icon-41-45>".$tempman."</icon-41-45>";}
//non metric
if($weather["temp_units"]=='F' && $weather["temp"]<14){ echo "<icon-minus10>".$tempman."</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["temp"]<26){ echo "<icon-minus5>".$tempman."</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<32){ echo "<icon-zero>".$tempman."</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<42.8){ echo "<icon-0-5>".$tempman."</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<50){ echo "<icon-6-10>".$tempman."</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<59){ echo "<icon-11-15>".$tempman."</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<68){ echo "<icon-16-20>".$tempman."</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<77){ echo "<icon-21-25>".$tempman."</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<86){ echo "<icon-26-30>".$tempman."</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<95){ echo "<icon-31-35>".$tempman."</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<104){ echo "<icon-36-40>".$tempman."</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<300){ echo "<icon-41-45>".$tempman."</icon-41-45>";}
echo "</tempman>";?>
</div></div></div></div></div>

<div class="heatcircle"><div class="heatcircle-content">
<?php  //temp max Year
echo "<valuetextheading1>".date('Y')." Max <deepblue>".$weather["tempymaxtime"]."</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>";
echo $weather["tempymax"]."&deg;<smalltempunit2>".$weather["temp_units"];
?><smalltempunit2></div></div>

<div class="heatcircle2"><div class="heatcircle-content">
<?php  //TEMP min year
echo "<valuetextheading1>".date('Y')." Min <deepblue>".$weather["tempymintime"]."</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>";
echo $weather["tempymin"]."&deg;<smalltempunit2>".$weather["temp_units"];
?></smalltempunit2></div></div>

<div class="heatcircleindoor"><div class="heatcircle-content">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lang['Month']?> <orange>Max</orange>-<deepblue>Min</deepblue></valuetextheading1>
<?php //month mac=x min
echo "<div class=tempmodulehomemaxmin>". $weather["tempmmax"]."&deg;<smalltempunit2>".$weather["temp_units"]."</smalltempunit2>&nbsp;|&nbsp;";
echo $weather["tempmmin"]."&deg;<smalltempunit2>".$weather["temp_units"]."</smalltempunit2>";?>
</div></div>

<div class=thetrendgap>
<?php 
//falling
if($weather["temp_trend"]<0){echo '<div class=thetrendboxblue>'.$lang['Falling']. '';echo '&nbsp;'.$fallingsymbolx.'&nbsp;<blue> '.number_format($weather["temp_trend"],1).'</blue>&deg;';}
//rising
else if($weather["temp_trend"]>0){echo '<div class=thetrendboxorange>&nbsp;'.$lang['Rising']. '';echo '&nbsp;'.$risingsymbolx.'&nbsp;<orange> + '.number_format($weather["temp_trend"],1).'</orange>&deg;';}
//steady
else echo '<div class=thetrendboxblue>'.$lang['Steady']. ' '.$steadysymbol.'';?>
</div></div>

<div class="weather-tempicon-identity">    
<?php //dewpoint id
if($weather["temp_units"]=='C' && $weather["temp"]<-10){ echo "<icon-minus10>".$weather34_temp_icon."</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["temp"]<-5){ echo "<icon-minus5>".$weather34_temp_icon."</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<0){ echo "<icon-zero>".$weather34_temp_icon."</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<6){ echo "<icon-0-5>".$weather34_temp_icon."</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<10){ echo "<icon-6-10>".$weather34_temp_icon."</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<15){ echo "<icon-11-15>".$weather34_temp_icon."</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<20){ echo "<icon-16-20>".$weather34_temp_icon."</icon-16-20>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<25){ echo "<icon-21-25>".$weather34_temp_icon."</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<30){ echo "<icon-26-30>".$weather34_temp_icon."</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<35){ echo "<icon-31-35>".$weather34_temp_icon."</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<40){ echo "<icon-36-40>".$weather34_temp_icon."</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["temp"]<100){ echo "<icon-41-45>".$weather34_temp_icon."</icon-41-45>";}
//non metric
if($weather["temp_units"]=='F' && $weather["temp"]<14){ echo "<icon-minus10>".$weather34_temp_icon."</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["temp"]<26){ echo "<icon-minus5>".$weather34_temp_icon."</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<32){ echo "<icon-zero>".$weather34_temp_icon."</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<42.8){ echo "<icon-0-5>".$weather34_temp_icon."</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<50){ echo "<icon-6-10>".$weather34_temp_icon."</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<59){ echo "<icon-11-15>".$weather34_temp_icon."</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<68){ echo "<icon-16-20>".$weather34_temp_icon."</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<77){ echo "<icon-21-25>".$weather34_temp_icon."</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<86){ echo "<icon-26-30>".$weather34_temp_icon."</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<95){ echo "<icon-31-35>".$weather34_temp_icon."</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<104){ echo "<icon-36-40>".$weather34_temp_icon."</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["temp"]<300){ echo "<icon-41-45>".$weather34_temp_icon."</icon-41-45>";}
?></div></div></div>

<div class="maxwind">
<?php  //Max-Min
echo "Max ";
if($weather["temp_units"]=='C' && $weather["temp_today_high"]<-10){ echo "<icon-minus10>".$weather["temp_today_high"]."</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["temp_today_high"]<-5){ echo "<icon-minus5>".$weather["temp_today_high"]."</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_high"]<0){ echo "<icon-zero>".$weather["temp_today_high"]."</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_high"]<6){ echo "<icon-0-5>".$weather["temp_today_high"]."</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_high"]<10){ echo "<icon-6-10>".$weather["temp_today_high"]."</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_high"]<15){ echo "<icon-11-15>".$weather["temp_today_high"]."</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_high"]<20){ echo "<icon-16-20>".$weather["temp_today_high"]."</icon-16-20>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_high"]<25){ echo "<icon-21-25>".$weather["temp_today_high"]."</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_high"]<30){ echo "<icon-26-30>".$weather["temp_today_high"]."</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_high"]<35){ echo "<icon-31-35>".$weather["temp_today_high"]."</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_high"]<40){ echo "<icon-36-40>".$weather["temp_today_high"]."</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_high"]<100){ echo "<icon-41-45>".$weather["temp_today_high"]."</icon-41-45>";}
//non metric
if($weather["temp_units"]=='F' && $weather["temp_today_high"]<14){ echo "<icon-minus10>".$weather["temp_today_high"]."</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["temp_today_high"]<23){ echo "<icon-minus5>".$weather["temp_today_high"]."</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_high"]<32){ echo "<icon-zero>".$weather["temp_today_high"]."</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_high"]<42.8){ echo "<icon-0-5>".$weather["temp_today_high"]."</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_high"]<50){ echo "<icon-6-10>".$weather["temp_today_high"]."</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_high"]<59){ echo "<icon-11-15>".$weather["temp_today_high"]."</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_high"]<68){ echo "<icon-16-20>".$weather["temp_today_high"]."</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_high"]<77){ echo "<icon-21-25>".$weather["temp_today_high"]."</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_high"]<86){ echo "<icon-26-30>".$weather["temp_today_high"]."</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_high"]<95){ echo "<icon-31-35>".$weather["temp_today_high"]."</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_high"]<104){ echo "<icon-36-40>".$weather["temp_today_high"]."</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_high"]<300){ echo "<icon-41-45>".$weather["temp_today_high"]."</icon-41-45>";}
echo "&deg; | ";
echo "Min ";
if($weather["temp_units"]=='C' && $weather["temp_today_low"]<-10){ echo "<icon-minus10>".$weather["temp_today_low"]."</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["temp_today_low"]<-5){ echo "<icon-minus5>".$weather["temp_today_low"]."</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_low"]<0){ echo "<icon-zero>".$weather["temp_today_low"]."</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_low"]<6){ echo "<icon-0-5>".$weather["temp_today_low"]."</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_low"]<10){ echo "<icon-6-10>".$weather["temp_today_low"]."</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_low"]<15){ echo "<icon-11-15>".$weather["temp_today_low"]."</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_low"]<20){ echo "<icon-16-20>".$weather["temp_today_low"]."</icon-16-20>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_low"]<25){ echo "<icon-21-25>".$weather["temp_today_low"]."</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_low"]<30){ echo "<icon-26-30>".$weather["temp_today_low"]."</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_low"]<35){ echo "<icon-31-35>".$weather["temp_today_low"]."</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_low"]<40){ echo "<icon-36-40>".$weather["temp_today_low"]."</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["temp_today_low"]<100){ echo "<icon-41-45>".$weather["temp_today_low"]."</icon-41-45>";}
//non metric
if($weather["temp_units"]=='F' && $weather["temp_today_low"]<14){ echo "<icon-minus10>".$weather["temp_today_low"]."</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["temp_today_low"]<23){ echo "<icon-minus5>".$weather["temp_today_low"]."</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_low"]<32){ echo "<icon-zero>".$weather["temp_today_low"]."</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_low"]<42.8){ echo "<icon-0-5>".$weather["temp_today_low"]."</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_low"]<50){ echo "<icon-6-10>".$weather["temp_today_low"]."</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_low"]<59){ echo "<icon-11-15>".$weather["temp_today_low"]."</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_low"]<68){ echo "<icon-16-20>".$weather["temp_today_low"]."</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_low"]<77){ echo "<icon-21-25>".$weather["temp_today_low"]."</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_low"]<86){ echo "<icon-26-30>".$weather["temp_today_low"]."</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_low"]<95){ echo "<icon-31-35>".$weather["temp_today_low"]."</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_low"]<104){ echo "<icon-36-40>".$weather["temp_today_low"]."</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["temp_today_low"]<300){ echo "<icon-41-45>".$weather["temp_today_low"]."</icon-41-45>";}
echo "&deg;"?>
</div>