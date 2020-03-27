<?php include('livedata.php');include('common.php');?>
<div class="modulecaption2" ><?php echo $lang['Windspeed'];?></div>
<div class="button button-dial">            
<div class="button-dial-top"></div>
<realfeel>
<?php  //max last 10 mins
echo '10" Max ';
//kmh
if($weather["wind_speed_max"]>=50 && $weather["wind_units"]=="km/h"){echo "<red>" .number_format($weather["wind_speed_max"],1)."</red>&nbsp;";}
else if($weather["wind_speed_max"]>=40 && $weather["wind_units"]=="km/h"){echo "<orange>" .number_format($weather["wind_speed_max"],1)."</orange>&nbsp;";}
else if($weather["wind_speed_max"]>=20 && $weather["wind_units"]=="km/h"){echo "<yellow>" .number_format($weather["wind_speed_max"],1)."</yellow>&nbsp;";}
else if($weather["wind_speed_max"]>=0 && $weather["wind_units"]=="km/h"){echo "<green>" .number_format($weather["wind_speed_max"],1)."</green>&nbsp;";}
//mph
if($weather["wind_speed_max"]>=31 && $weather["wind_units"]=="mph"){echo "<red>" .number_format($weather["wind_speed_max"],1)."</red>&nbsp;";}
else if($weather["wind_speed_max"]>=24.85 && $weather["wind_units"]=="mph"){echo "<orange>" .number_format($weather["wind_speed_max"],1)."</orange>&nbsp;";}
else if($weather["wind_speed_max"]>=12.43 && $weather["wind_units"]=="mph"){echo "<yellow>" .number_format($weather["wind_speed_max"],1)."</yellow>&nbsp;";}
else if($weather["wind_speed_max"]>=0 && $weather["wind_units"]=="mph"){echo "<green>" .number_format($weather["wind_speed_max"],1)."</green>&nbsp;";}
//ms
if($weather["wind_speed_max"]>=13.89 && $weather["wind_units"]=="m/s"){echo "<red>" .number_format($weather["wind_speed_max"],1)."</red>&nbsp;";}
else if($weather["wind_speed_max"]>=11.11 && $weather["wind_units"]=="m/s"){echo "<orange>" .number_format($weather["wind_speed_max"],1)."</orange>&nbsp;";}
else if($weather["wind_speed_max"]>=5.56 && $weather["wind_units"]=="m/s"){echo "<yellow>" .number_format($weather["wind_speed_max"],1)."</yellow>&nbsp;";}
else if($weather["wind_speed_max"]>=0 && $weather["wind_units"]=="m/s"){echo "<green>" .number_format($weather["wind_speed_max"],1)."</green>&nbsp;";}
//kts
if($weather["wind_speed_max"]>=27 && $weather["wind_units"]=="kts"){echo "<red>" .number_format($weather["wind_speed_max"],1)."</red>&nbsp;";}
else if($weather["wind_speed_max"]>=21.6 && $weather["wind_units"]=="kts"){echo "<orange>" .number_format($weather["wind_speed_max"],1)."</orange>&nbsp;";}
else if($weather["wind_speed_max"]>=10.8 && $weather["wind_units"]=="kts"){echo "<yellow>" .number_format($weather["wind_speed_max"],1)."</yellow>&nbsp;";}
else if($weather["wind_speed_max"]>=0 && $weather["wind_units"]=="kts"){echo "<green>" .number_format($weather["wind_speed_max"],1)."</green>&nbsp;";}
?>
</realfeel>
 <div class="button-dial-label">          
 <?php 
          //kmh
          if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<=10){ echo "<icon-0-5>".$weather["wind_gust_speed"]."</icon-0-5>";}          
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<=30){ echo "<icon-11-15>".number_format($weather["wind_gust_speed"],1)."</icon-11-15>";}         
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<=50){ echo "<icon-21-25>".number_format($weather["wind_gust_speed"],1)."</icon-21-25>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<=60){ echo "<icon-26-30>".number_format($weather["wind_gust_speed"],1)."</icon-26-30>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<=70){ echo "<icon-31-35>".number_format($weather["wind_gust_speed"],1)."</icon-31-35>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<300){ echo "<icon-31-35>".number_format($weather["wind_gust_speed"],1)."</icon-31-35>";}
          //mph
          if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<=6.2){ echo "<icon-0-5>".$weather["wind_gust_speed"]."</icon-0-5>";}          
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<=18.64){ echo "<icon-11-15>".number_format($weather["wind_gust_speed"],1)."</icon-11-15>";}         
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<=31.07){ echo "<icon-21-25>".number_format($weather["wind_gust_speed"],1)."</icon-21-25>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<=37.28){ echo "<icon-26-30>".number_format($weather["wind_gust_speed"],1)."</icon-26-30>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<=43.49){ echo "<icon-31-35>".number_format($weather["wind_gust_speed"],1)."</icon-31-35>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<300){ echo "<icon-31-35>".number_format($weather["wind_gust_speed"],1)."</icon-31-35>";}
          //ms
          if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<=2.78){ echo "<icon-0-5>".$weather["wind_gust_speed"]."</icon-0-5>";}          
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<=8.33){ echo "<icon-11-15>".number_format($weather["wind_gust_speed"],1)."</icon-11-15>";}         
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<=13.89){ echo "<icon-21-25>".number_format($weather["wind_gust_speed"],1)."</icon-21-25>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<=16.67){ echo "<icon-26-30>".number_format($weather["wind_gust_speed"],1)."</icon-26-30>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<=19.44){ echo "<icon-31-35>".number_format($weather["wind_gust_speed"],1)."</icon-31-35>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<300){ echo "<icon-31-35>".number_format($weather["wind_gust_speed"],1)."</icon-31-35>";}
          //kts
          if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<=5.4){ echo "<icon-0-5>".$weather["wind_gust_speed"]."</icon-0-5>";}          
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<=16.2){ echo "<icon-11-15>".number_format($weather["wind_gust_speed"],1)."</icon-11-15>";}         
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<=27){ echo "<icon-21-25>".number_format($weather["wind_gust_speed"],1)."</icon-21-25>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<=32.4){ echo "<icon-26-30>".number_format($weather["wind_gust_speed"],1)."</icon-26-30>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<=37.8){ echo "<icon-31-35>".number_format($weather["wind_gust_speed"],1)."</icon-31-35>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<300){ echo "<icon-31-35>".number_format($weather["wind_gust_speed"],1)."</icon-31-35>";}
          ?>
</div></div><div>

<?php //unit
echo "<windunitindicator>";echo $weather["wind_units"];echo "</windunitindicator>";?>

<?php //man walking-running
echo "<windindicator>";
if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<=10){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}          
else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<=30){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<=50){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<=60){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<=70){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<=300){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
//mph
if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<=6.2){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}          
else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<=18.64){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<=31.07){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<=37.28){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<=43.49){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<=300){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
//ms
if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<=2.78){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}          
else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<=8.33){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<=13.89){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<=16.67){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<=19.44){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<=300){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
//kts
if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<=5.4){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}          
else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<=16.2){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<=27){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<=32.4){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<=37.8){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<=300){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}


echo "</windindicator>";?>
</div></div></div></div></div>

<div class="heatcircle"><div class="heatcircle-content">  
<valuetextheading1><?php echo date('Y')?> Max <deepblue><?php echo $weather["windymaxtime"]?></deepblue></valuetextheading1>
<?php  //wind year max
echo "<br><div class=tempmodulehome0-5c>";
echo $weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];
?><smalltempunit2></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1><?php echo $lang['Month']?> Max <deepblue><?php echo $weather["windmmaxtime"]?></deepblue></valuetextheading1>
<?php //month wind max
echo "<br><div class=tempmodulehome0-5c>";
echo $weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];
?><smalltempunit2></div></div>

<div class="heatcirclerain1" ><div class="heatcircle-content">
<div class="rainrateextra">
<valuetextheading1 style="margin-left:-15px;font-size:8.5px">
<?php // weather34 simple css wind speed scale 
if ($weather["wind_units"]=="km/h" && $weather['wind_gust_speed']>=60){echo "0&nbsp;10&nbsp;20&nbsp;30&nbsp;40&nbsp;50&nbsp;<red>60+</red>&nbsp";}
else if ($weather["wind_units"]=="km/h" && $weather['wind_gust_speed']>=50){echo "0&nbsp;10&nbsp;20&nbsp;30&nbsp;40&nbsp;<red>50</red>&nbsp;60+&nbsp";}
else if ($weather["wind_units"]=="km/h" && $weather['wind_gust_speed']>=40){echo "0&nbsp;10&nbsp;20&nbsp;30&nbsp;<orange>40</orange>&nbsp;50&nbsp;60+&nbsp";}
else if ($weather["wind_units"]=="km/h" && $weather['wind_gust_speed']>=39.9){echo "0&nbsp;10&nbsp;20&nbsp;30&nbsp;<orange>40</orange>&nbsp;50&nbsp;60+&nbsp";}
else if ($weather["wind_units"]=="km/h" && $weather['wind_gust_speed']>=30){echo "0&nbsp;10&nbsp;20&nbsp;<orange>30</orange>&nbsp;40&nbsp;50&nbsp;60+&nbsp";}
else if ($weather["wind_units"]=="km/h" && $weather['wind_gust_speed']>=20){echo "0&nbsp;10&nbsp;<yellow>20</yellow>&nbsp;30&nbsp;40&nbsp;50&nbsp;60+&nbsp";}
else if ($weather["wind_units"]=="km/h" && $weather['wind_gust_speed']>=10){echo "0&nbsp;<yellow>10</yellow>&nbsp;20&nbsp;30&nbsp;40&nbsp;50&nbsp;60+&nbsp";}
else if ($weather["wind_units"]=="km/h" && $weather['wind_gust_speed']<10){echo "<blue>0</blue>&nbsp;10&nbsp;20&nbsp;30&nbsp;40&nbsp;50&nbsp;60+&nbsp";}
//mph
if ($weather["wind_units"]=="mph" && $weather['wind_gust_speed']>=45){echo "0&nbsp;6&nbsp;12&nbsp;18&nbsp;24&nbsp;31&nbsp;<red>37</red>&nbsp;<red>45+</red>";}
else if ($weather["wind_units"]=="mph" && $weather['wind_gust_speed']>=37.2){echo "0&nbsp;6&nbsp;12&nbsp;18&nbsp;24&nbsp;31&nbsp;<red>37</red>&nbsp;45+";}
else if ($weather["wind_units"]=="mph" && $weather['wind_gust_speed']>=31){echo "0&nbsp;6&nbsp;12&nbsp;18&nbsp;24&nbsp;<red>31</red>&nbsp;37&nbsp;45+";}
else if ($weather["wind_units"]=="mph" && $weather['wind_gust_speed']>=24.8){echo "0&nbsp;6&nbsp;12&nbsp;18&nbsp;<orange>24</orange>&nbsp;31&nbsp;37&nbsp;45+";}
else if ($weather["wind_units"]=="mph" && $weather['wind_gust_speed']>=18.6){echo "0&nbsp;6&nbsp;12&nbsp;<yellow>18</yellow>&nbsp;24&nbsp;31&nbsp;37&nbsp;45+";}
else if ($weather["wind_units"]=="mph" && $weather['wind_gust_speed']>=12){echo "0&nbsp;6&nbsp;<green>12</green>&nbsp;18&nbsp;24&nbsp;31&nbsp;37&nbsp;45+";}
else if ($weather["wind_units"]=="mph" && $weather['wind_gust_speed']>=6.2){echo "0&nbsp;<green>6</green>&nbsp;12&nbsp;18&nbsp;24&nbsp;31&nbsp;37&nbsp;45+";}
else if ($weather["wind_units"]=="mph" && $weather['wind_gust_speed']>=0){echo "<blue>0</blue>&nbsp;6&nbsp;12&nbsp;18&nbsp;24&nbsp;31&nbsp;37&nbsp;45+";}
//kts
if ($weather["wind_units"]=="kts" && $weather['wind_gust_speed']>=32){echo "0&nbsp;5&nbsp;10&nbsp;16&nbsp;21&nbsp;26&nbsp;<red>32+</red>&nbsp;";}
else if ($weather["wind_units"]=="kts" && $weather['wind_gust_speed']>=26){echo "0&nbsp;5&nbsp;10&nbsp;16&nbsp;21&nbsp;<red>26</red>&nbsp;32+&nbsp;";}
else if ($weather["wind_units"]=="kts" && $weather['wind_gust_speed']>=21){echo "0&nbsp;5&nbsp;10&nbsp;16&nbsp;<orange>21</orange>&nbsp;26&nbsp;32+&nbsp;";}
else if ($weather["wind_units"]=="kts" && $weather['wind_gust_speed']>=16){echo "0&nbsp;5&nbsp;10&nbsp;<yellow>16</yellow>&nbsp;21&nbsp;26&nbsp;32+&nbsp;";}
else if ($weather["wind_units"]=="kts" && $weather['wind_gust_speed']>=10){echo "0&nbsp;5&nbsp;<green>10</green>&nbsp;16&nbsp;21&nbsp;26&nbsp;32+&nbsp;";}
else if ($weather["wind_units"]=="kts" && $weather['wind_gust_speed']>=5){echo "0&nbsp;<green>5</green>&nbsp;10&nbsp;16&nbsp;21&nbsp;26&nbsp;32+&nbsp;";}
else if ($weather["wind_units"]=="kts" && $weather['wind_gust_speed']>=0){echo "<blue>0</blue>&nbsp;5&nbsp;10&nbsp;16&nbsp;21&nbsp;26&nbsp;32+&nbsp;";}
//ms
if ($weather["wind_units"]=="m/s" && $weather['wind_gust_speed']>=16){echo  "0&nbsp;&nbsp;2&nbsp;&nbsp;5&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;<red>16+</red>&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_gust_speed']>=14){echo  "0&nbsp;&nbsp;2&nbsp;&nbsp;5&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;<red>14</red>&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_gust_speed']>=11){echo  "0&nbsp;&nbsp;2&nbsp;&nbsp;5&nbsp;&nbsp;8&nbsp;&nbsp;<orange>11</orange>&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_gust_speed']>=8){echo  "0&nbsp;&nbsp;2&nbsp;&nbsp;5&nbsp;&nbsp;<yellow>8</yellow>&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_gust_speed']>=5){echo  "0&nbsp;&nbsp;2&nbsp;&nbsp;<green>5</green>&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_gust_speed']>=2){echo  "0&nbsp;&nbsp;<green>2</green>&nbsp;&nbsp;5&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_gust_speed']>=0){echo  "<blue>0</blue>&nbsp;&nbsp;2&nbsp;&nbsp;5&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
echo "<smalltempunit2>&nbsp;".$weather["wind_units"];?></smalltempunit2>
</valuetextheading1>
<div class=rainratebar>
<div class="weather34ratebar" 
style="width:
<?php 
if ($weather["wind_units"]=="km/h"){echo $weather['wind_gust_speed']*1.375;}
if ($weather["wind_units"]=="mph"){echo $weather['wind_gust_speed']*2;}
if ($weather["wind_units"]=="kts"){echo $weather['wind_gust_speed']*2.85;}
if ($weather["wind_units"]=="m/s"){echo $weather['wind_gust_speed']*4.4;}
?>px;

background:<?php 
if ($weather['wind_gust_speed']>=70 && $weather["wind_units"]=="km/h"){echo '#d35f50';}
elseif ($weather['wind_gust_speed']>=50 && $weather["wind_units"]=="km/h"){echo '#d35f50';}
elseif ($weather['wind_gust_speed']>=40 && $weather["wind_units"]=="km/h"){echo '#d87040';}
elseif ($weather['wind_gust_speed']>=30 && $weather["wind_units"]=="km/h"){echo '#e6a241';}
elseif ($weather['wind_gust_speed']>=10 && $weather["wind_units"]=="km/h"){echo '#9bbc2f';}
elseif ($weather['wind_gust_speed']>=0 && $weather["wind_units"]=="km/h"){echo '#00adbd';}
//mph
if ($weather['wind_gust_speed']>=46 && $weather["wind_units"]=="mph"){echo '#d35f50';}
elseif ($weather['wind_gust_speed']>=31.06 && $weather["wind_units"]=="mph"){echo '#d35f50';}
elseif ($weather['wind_gust_speed']>=24.8 && $weather["wind_units"]=="mph"){echo '#d87040';}
elseif ($weather['wind_gust_speed']>=18.6 && $weather["wind_units"]=="mph"){echo '#e6a241';}
elseif ($weather['wind_gust_speed']>=6.2 && $weather["wind_units"]=="mph"){echo '#9bbc2f';}
elseif ($weather['wind_gust_speed']>=0 && $weather["wind_units"]=="mph"){echo '#00adbd';}
//kts
if ($weather['wind_gust_speed']>=40 && $weather["wind_units"]=="kts"){echo '#d35f50';}
elseif ($weather['wind_gust_speed']>=26 && $weather["wind_units"]=="kts"){echo '#d35f50';}
elseif ($weather['wind_gust_speed']>=21 && $weather["wind_units"]=="kts"){echo '#d87040';}
elseif ($weather['wind_gust_speed']>=16 && $weather["wind_units"]=="kts"){echo '#e6a241';}
elseif ($weather['wind_gust_speed']>=10 && $weather["wind_units"]=="kts"){echo '#9bbc2f';}
elseif ($weather['wind_gust_speed']>=5 && $weather["wind_units"]=="kts"){echo '#9bbc2f';}
elseif ($weather['wind_gust_speed']>=0 && $weather["wind_units"]=="kts"){echo '#00adbd';}
//ms
if ($weather['wind_gust_speed']>=20.83 && $weather["wind_units"]=="m/s"){echo '#d35f50';}
elseif ($weather['wind_gust_speed']>=13.88 && $weather["wind_units"]=="m/s"){echo '#d35f50';}
elseif ($weather['wind_gust_speed']>=11.11 && $weather["wind_units"]=="m/s"){echo '#d87040';}
elseif ($weather['wind_gust_speed']>=8.33 && $weather["wind_units"]=="m/s"){echo '#e6a241';}
elseif ($weather['wind_gust_speed']>=2.77 && $weather["wind_units"]=="m/s"){echo '#9bbc2f';}
elseif ($weather['wind_gust_speed']>=0 && $weather["wind_units"]=="m/s"){echo '#00adbd';}
?>;">
</div></div>

<div class=thetrendgapwind>
<?php 
//average today
echo '<div class=thetrendboxblue>'.$lang['Avg'].' '.$lang['Today'].'';echo '&nbsp;<blue>'.number_format($weather["wind_speed_avg30"],1).'</blue><smalltempunit2>&nbsp;'.$windunit.'</smalltempunit2>';?>
</div></div>

<div class="weather-icon-identity-wind"><?php 
if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<10){ echo "<icon-0-5>".$weather34_wind_icon."</icon-0-5>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<30){ echo "<icon-6-10>".$weather34_wind_icon."</icon-6-10>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<40){ echo "<icon-11-15>".$weather34_wind_icon."</icon-11-15>";}         
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<50){ echo "<icon-21-25>".$weather34_wind_icon."</icon-21-25>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<60){ echo "<icon-26-30>".$weather34_wind_icon."</icon-26-30>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<70){ echo "<icon-31-35>".$weather34_wind_icon."</icon-31-35>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<300){ echo "<icon-31-35>".$weather34_wind_icon."</icon-31-35>";}
//mph
          if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<6.2){ echo "<icon-0-5>".$weather34_wind_icon."</icon-0-5>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<18.6){ echo "<icon-6-10>".$weather34_wind_icon."</icon-6-10>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<24.8){ echo "<icon-11-15>".$weather34_wind_icon."</icon-11-15>";}         
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<31){ echo "<icon-21-25>".$weather34_wind_icon."</icon-21-25>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<37.2){ echo "<icon-26-30>".$weather34_wind_icon."</icon-26-30>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<43.4){ echo "<icon-31-35>".$weather34_wind_icon."</icon-31-35>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<300){ echo "<icon-31-35>".$weather34_wind_icon."</icon-31-35>";}
//ms
          if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<2.7){ echo "<icon-0-5>".$weather34_wind_icon."</icon-0-5>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<8.33){ echo "<icon-6-10>".$weather34_wind_icon."</icon-6-10>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<11.11){ echo "<icon-11-15>".$weather34_wind_icon."</icon-11-15>";}         
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<13.88){ echo "<icon-21-25>".$weather34_wind_icon."</icon-21-25>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<16.66){ echo "<icon-26-30>".$weather34_wind_icon."</icon-26-30>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<19.44){ echo "<icon-31-35>".$weather34_wind_icon."</icon-31-35>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<300){ echo "<icon-31-35>".$weather34_wind_icon."</icon-31-35>";}
//kts
          if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<5){ echo "<icon-0-5>".$weather34_wind_icon."</icon-0-5>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<16){ echo "<icon-6-10>".$weather34_wind_icon."</icon-6-10>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<21){ echo "<icon-11-15>".$weather34_wind_icon."</icon-11-15>";}         
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<26){ echo "<icon-21-25>".$weather34_wind_icon."</icon-21-25>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<32){ echo "<icon-26-30>".$weather34_wind_icon."</icon-26-30>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<37){ echo "<icon-31-35>".$weather34_wind_icon."</icon-31-35>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<300){ echo "<icon-31-35>".$weather34_wind_icon."</icon-31-35>";}
?>
</div></div></div>

<div class="maxwind2">
<?php  //max Today
echo "Max ";
//kmh
if($weather["wind_gust_speed_max"]>=50 && $weather["wind_units"]=="km/h"){echo "<red>" .number_format($weather["wind_gust_speed_max"],1)."</red>&nbsp;<smalltempunit2> ".$weather["wind_units"];}
else if($weather["wind_gust_speed_max"]>=30 && $weather["wind_units"]=="km/h"){echo "<orange>" .number_format($weather["wind_gust_speed_max"],1)."</orange>&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if($weather["wind_gust_speed_max"]>=10 && $weather["wind_units"]=="km/h"){echo "<yellow>" .number_format($weather["wind_gust_speed_max"],1)."</yellow>&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if($weather["wind_gust_speed_max"]>=0 && $weather["wind_units"]=="km/h"){echo "<green>" .number_format($weather["wind_gust_speed_max"],1)."</green>&nbsp;<smalltempunit2>".$weather["wind_units"];}
//mph
if($weather["wind_gust_speed_max"]>=31 && $weather["wind_units"]=="mph"){echo "<red>" .number_format($weather["wind_gust_speed_max"],1)."</red>&nbsp;<smalltempunit2> ".$weather["wind_units"];}
else if($weather["wind_gust_speed_max"]>=18.6 && $weather["wind_units"]=="mph"){echo "<orange>" .number_format($weather["wind_gust_speed_max"],1)."</orange>&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if($weather["wind_gust_speed_max"]>=6.2 && $weather["wind_units"]=="mph"){echo "<yellow>" .number_format($weather["wind_gust_speed_max"],1)."</yellow>&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if($weather["wind_gust_speed_max"]>=0 && $weather["wind_units"]=="mph"){echo "<green>" .number_format($weather["wind_gust_speed_max"],1)."</green>&nbsp;<smalltempunit2>".$weather["wind_units"];}
//ms
if($weather["wind_gust_speed_max"]>=13.88 && $weather["wind_units"]=="m/s"){echo "<red>" .number_format($weather["wind_gust_speed_max"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_gust_speed_max"]>=8.33 && $weather["wind_units"]=="m/s"){echo "<orange>" .number_format($weather["wind_gust_speed_max"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_gust_speed_max"]>=6.2 && $weather["wind_units"]=="m/s"){echo "<yellow>" .number_format($weather["wind_gust_speed_max"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_gust_speed_max"]>=0 && $weather["wind_units"]=="m/s"){echo "<blue>" .number_format($weather["wind_gust_speed_max"],1)."</blue>&nbsp;<smalltempunit2>".$windunit;}
//kts
if($weather["wind_gust_speed_max"]>=26 && $weather["wind_units"]=="kts"){echo "<red>" .number_format($weather["wind_gust_speed_max"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_gust_speed_max"]>=16 && $weather["wind_units"]=="kts"){echo "<orange>" .number_format($weather["wind_gust_speed_max"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_gust_speed_max"]>=2 && $weather["wind_units"]=="kts"){echo "<yellow>" .number_format($weather["wind_gust_speed_max"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_gust_speed_max"]>=0 && $weather["wind_units"]=="kts"){echo "<blue>" .number_format($weather["wind_gust_speed_max"],1)."</blue>&nbsp;<smalltempunit2>".$windunit;}
echo "</smalltempunit2>";echo "<span style='position:relative;top:1px'>".$maxclock."</span>"; echo $weather["winddmaxtime"];
?></div>