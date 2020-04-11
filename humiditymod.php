<?php include('livedata.php');?>
<div class="modulecaption2"><?php echo $lang['Humidity']; ?></div>
<div class="button button-dial">
<div class="button-dial-top"></div>
<realfeel>
<?php  
//saturation
if ($weather["humidity"]>90){ echo $lang['High']." ".$lang['Saturation'];echo " ".$humidityhighalert;}
else if ($weather["humidity"]>=40){echo "&nbsp;&nbsp; ".$lang['Saturation'];}
else if ($weather["humidity"]<40){echo $lang['Low']." ".$lang['Saturation'];echo " ".$humiditylowalert;}
?></realfeel>

<div class="button-dial-label">          
<?php 
if($weather["humidity"]<=30){ echo "<icon-26-30>".$weather["humidity"]."<smallhumidityunit>%</smallhumidityunit></icon-26-30>";}
else if($weather["humidity"]<=50){ echo "<icon-6-10>".$weather["humidity"]."<smallhumidityunit>%</smallhumidityunit></icon-6-10>";}
else if($weather["humidity"]<=70){ echo "<icon-11-15>".$weather["humidity"]."<smallhumidityunit>%</smallhumidityunit></icon-11-15>";}
else if($weather["humidity"]<=100){ echo "<icon-zero>".$weather["humidity"]."<smallhumidityunit>%</smallhumidityunit></icon-zero>";}
?></div></div><div>

<windunitindicator>RH</windunitindicator>

<?php //humidity man
echo "<tempman>";
if($weather["humidity"]<=30){ echo "<icon-26-30>".$tempman."</icon-26-30>";}
else if($weather["humidity"]<=50){ echo "<icon-6-10>".$tempman."</icon-6-10>";}
else if($weather["humidity"]<=70){ echo "<icon-11-15>".$tempman."</icon-11-15>";}
else if($weather["humidity"]<=100){ echo "<icon-zero>".$tempman."</icon-zero>";}
echo "</tempman>";
?></div></div></div></div></div>

<div class="heatcircle"><div class="heatcircle-content">
<?php //humidity max year
echo "<valuetextheading1>".date('Y')." ".$lang['Max']." <deepblue>".$weather["humidity_ymaxtime"]."</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>";
echo $weather["humidity_ymax"]."<smalltempunit2>%";
?><smalltempunit2></div></div>

<div class="heatcircle2"><div class="heatcircle-content">
<?php //humidity min year
echo "<valuetextheading1>".date('Y')." ".$lang['Min']." <deepblue>".$weather["humidity_ymintime"]."</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>";
echo $weather["humidity_ymin"]."<smalltempunit2>%";
?></smalltempunit2></div></div>

<div class="heatcircleindoor"><div class="heatcircle-content">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lang['Month']?> <orange><?php echo $lang['Max']?></orange>-<deepblue><?php echo $lang['Min']?> </deepblue></valuetextheading1>
<?php //month max min
echo "<div class=tempmodulehomemaxmin>". $weather["humidity_mmax"]."<smalltempunit2>%</smalltempunit2>&nbsp;|&nbsp;";
echo $weather["humidity_mmin"]."<smalltempunit2>%</smalltempunit2>";?>
</div></div>

<div class=thetrendgap>
<?php 
//falling
if($weather["humidity_trend"]<0){echo '<div class=thetrendboxblue>'.$lang['Falling']. '';echo '&nbsp;'.$fallingsymbolx.'&nbsp;<blue> '.number_format($weather["humidity_trend"],0).'</blue>%';}
//rising
else if($weather["humidity_trend"]>0){echo '<div class=thetrendboxorange>&nbsp;'.$lang['Rising']. '';echo '&nbsp;'.$risingsymbolx.'&nbsp;<orange> + '.number_format($weather["humidity_trend"],0).'</orange>%';}
//steady
else echo '<div class=thetrendboxblue>'.$lang['Steady']. ' '.$steadysymbol.'';?>
</div></div>

<div class="weather-tempicon-identity">    
<?php //humidity id
if($weather["humidity"]<=30){ echo "<icon-26-30>".$weather34_humidity_icon."</icon-26-30>";}
else if($weather["humidity"]<=50){ echo "<icon-6-10>".$weather34_humidity_icon."</icon-6-10>";}
else if($weather["humidity"]<=70){ echo "<icon-11-15>".$weather34_humidity_icon."</icon-11-15>";}
else if($weather["humidity"]<=100){ echo "<icon-zero>".$weather34_humidity_icon."</icon-zero>";}
?></div></div></div>

<div class="maxwind">
<?php  //Max-Min
echo $lang['Max']." " ;
if($weather["humidity_max"]<=30){ echo "<icon-26-30>".$weather["humidity_max"]."</icon-26-30>";}
else if($weather["humidity_max"]<=50){ echo "<icon-6-10>".$weather["humidity_max"]."</icon-6-10>";}
else if($weather["humidity_max"]<=70){ echo "<icon-11-15>".$weather["humidity_max"]."</icon-11-15>";}
else if($weather["humidity_max"]<=100){ echo "<icon-zero>".$weather["humidity_max"]."</icon-zero>";}
echo "% | ";
echo $lang['Min']." "  ;
if($weather["humidity_min"]<=30){ echo "<icon-26-30>".$weather["humidity_min"]."</icon-26-30>";}
else if($weather["humidity_min"]<=50){ echo "<icon-6-10>".$weather["humidity_min"]."</icon-6-10>";}
else if($weather["humidity_min"]<=70){ echo "<icon-11-15>".$weather["humidity_min"]."</icon-11-15>";}
else if($weather["humidity_min"]<=100){ echo "<icon-zero>".$weather["humidity_min"]."</icon-zero>";}
echo "%"
?></div>