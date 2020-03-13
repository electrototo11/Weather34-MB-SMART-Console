<?php include('livedata.php');include('common.php');?>
<div class="modulecaption2" ><?php echo $lang['Avg']; echo " ".$lang['Windspeed'];?></div>
<div class="button button-dial">       
<div class="button-dial-top"></div>
<realfeel>
<?php  //average last 10 mins
//kmh
if($weather["wind_speed"]>=30 && $weather["wind_units"]=="km/h"){echo $lang['Very Windy'];}
else if($weather["wind_speed"]>=20 && $weather["wind_units"]=="km/h"){echo $lang['Windy'];}
else if($weather["wind_speed"]>=10 && $weather["wind_units"]=="km/h"){echo $lang['Breezy'];}
else if($weather["wind_speed"]>=5 && $weather["wind_units"]=="km/h"){echo $lang['Light Winds'];}
else if($weather["wind_speed"]>=0 && $weather["wind_units"]=="km/h"){echo $lang['Calm'];}
//mph
if($weather["wind_speed"]>=18 && $weather["wind_units"]=="mph"){echo $lang['Very Windy'];}
else if($weather["wind_speed"]>=12.4 && $weather["wind_units"]=="mph"){echo $lang['Windy'];}
else if($weather["wind_speed"]>=6.2 && $weather["wind_units"]=="mph"){echo $lang['Breezy'];}
else if($weather["wind_speed"]>=3.1 && $weather["wind_units"]=="mph"){echo $lang['Light Winds'];}
else if($weather["wind_speed"]>=0 && $weather["wind_units"]=="mph"){echo $lang['Calm'];}

//ms
if($weather["wind_speed"]>=8.33 && $weather["wind_units"]=="m/s"){echo $lang['Very Windy'];}
else if($weather["wind_speed"]>=5.5 && $weather["wind_units"]=="m/s"){echo $lang['Windy'];}
else if($weather["wind_speed"]>=2.7 && $weather["wind_units"]=="m/s"){echo $lang['Breezy'];}
else if($weather["wind_speed"]>=1.3 && $weather["wind_units"]=="m/s"){echo $lang['Light Winds'];}
else if($weather["wind_speed"]>=0 && $weather["wind_units"]=="m/s"){echo $lang['Calm'];}

//kts
if($weather["wind_speed"]>=16.1 && $weather["wind_units"]=="kts"){echo $lang['Very Windy'];}
else if($weather["wind_speed"]>=10.7 && $weather["wind_units"]=="kts"){echo $lang['Windy'];}
else if($weather["wind_speed"]>=5.3 && $weather["wind_units"]=="kts"){echo $lang['Breezy'];}
else if($weather["wind_speed"]>=2.6 && $weather["wind_units"]=="kts"){echo $lang['Light Winds'];}
else if($weather["wind_speed"]>=0 && $weather["wind_units"]=="kts"){echo $lang['Calm'];}
?>
</realfeel>

        <div class="button-dial-label">
          
          <?php 
          //kmh
          if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<10){ echo "<icon-0-5>".$weather["wind_speed"]."</icon-0-5>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<30){ echo "<icon-6-10>".number_format($weather["wind_speed"],1)."</icon-6-10>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<40){ echo "<icon-11-15>".number_format($weather["wind_speed"],1)."</icon-11-15>";}         
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<50){ echo "<icon-21-25>".number_format($weather["wind_speed"],1)."</icon-21-25>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<60){ echo "<icon-26-30>".number_format($weather["wind_speed"],1)."</icon-26-30>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<70){ echo "<icon-31-35>".number_format($weather["wind_speed"],1)."</icon-31-35>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<300){ echo "<icon-36-40>".number_format($weather["wind_speed"],1)."</icon-36-40>";}
          //mph
          if($weather["wind_units"]=="mph" && $weather["wind_speed"]<6.2){ echo "<icon-0-5>".$weather["wind_speed"]."</icon-0-5>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<18.6){ echo "<icon-6-10>".number_format($weather["wind_speed"],1)."</icon-6-10>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<24.8){ echo "<icon-11-15>".number_format($weather["wind_speed"],1)."</icon-11-15>";}         
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<31){ echo "<icon-21-25>".number_format($weather["wind_speed"],1)."</icon-21-25>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<37.2){ echo "<icon-26-30>".number_format($weather["wind_speed"],1)."</icon-26-30>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<43.4){ echo "<icon-31-35>".number_format($weather["wind_speed"],1)."</icon-31-35>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<300){ echo "<icon-36-40>".number_format($weather["wind_speed"],1)."</icon-36-40>";}
          //ms
          if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<2.7){ echo "<icon-0-5>".$weather["wind_speed"]."</icon-0-5>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<8.33){ echo "<icon-6-10>".$weather["wind_speed"]."</icon-6-10>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<11.11){ echo "<icon-11-15>".$weather["wind_speed"]."</icon-11-15>";}         
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<13.88){ echo "<icon-21-25>".$weather["wind_speed"]."</icon-21-25>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<16.66){ echo "<icon-26-30>".$weather["wind_speed"]."</icon-26-30>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<19.44){ echo "<icon-31-35>".$weather["wind_speed"]."</icon-31-35>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<300){ echo "<icon-36-40>".$weather["wind_speed"]."</icon-36-40>";}
          //kts
          if($weather["wind_units"]=="kts" && $weather["wind_speed"]<5.9){ echo "<icon-0-5>".$weather["wind_speed"]."</icon-0-5>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<16.19){ echo "<icon-6-10>".$weather["wind_speed"]."</icon-6-10>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<21.59){ echo "<icon-11-15>".$weather["wind_speed"]."</icon-11-15>";}         
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<26.99){ echo "<icon-21-25>".$weather["wind_speed"]."</icon-21-25>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<32.3){ echo "<icon-26-30>".$weather["wind_speed"]."</icon-26-30>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<37.7){ echo "<icon-31-35>".$weather["wind_speed"]."</icon-31-35>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<300){ echo "<icon-36-40>".$weather["wind_speed"]."</icon-36-40>";}
          ?>
        </div>
      </div>
<div>

<?php //unit
echo "<windunitindicator>";echo $weather["wind_units"];echo "</windunitindicator>";?>
<?php //man walking-running
echo "<windindicator>";
          //kmh
          if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<10){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<30){ echo "<icon-6-10>".$walkingman."</icon-6-10>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<40){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<50){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<60){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<70){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<300){ echo "<icon-36-40>".$walkingman."</icon-36-40>";}
          //mph
          if($weather["wind_units"]=="mph" && $weather["wind_speed"]<6.2){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<18.6){ echo "<icon-6-10>".$walkingman."</icon-6-10>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<24.8){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<31){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<37.2){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<43.4){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<300){ echo "<icon-36-40>".$walkingman."</icon-36-40>";}
          //ms
          if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<2.7){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<8.33){ echo "<icon-6-10>".$walkingman."</icon-6-10>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<11.11){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<13.88){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<16.66){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<19.44){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<300){ echo "<icon-36-40>".$walkingman."</icon-36-40>";}
          //kts
          if($weather["wind_units"]=="kts" && $weather["wind_speed"]<5.9){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<16.19){ echo "<icon-6-10>".$walkingman."</icon-6-10>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<21.59){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<26.99){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<32.3){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<37.7){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<300){ echo "<icon-36-40>".$walkingman."</icon-36-40>";}
echo "</windindicator>";?>
</div></div></div></div></div>

<div class="heatcircle"><div class="heatcircle-content">
<valuetextheading1>Beaufort</valuetextheading1>
<?php  //heat-index/real feel

if ($weather['wind_speed_bft']>=12) {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. "&nbsp; $beaufort12";}
else if ($weather['wind_speed_bft']>=11) {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. "&nbsp; $beaufort11";}
else if ($weather['wind_speed_bft']>=10) {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. " &nbsp;$beaufort10";}
else if ($weather['wind_speed_bft']>=9) {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. " $beaufort9";}
else if ($weather['wind_speed_bft']>=8) {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. " $beaufort8";}
    
else if ($weather['wind_speed_bft']>=7) {
        echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. " &nbsp;$beaufort7";}
else if ($weather['wind_speed_bft']>=6) {
        echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['wind_speed_bft']. " &nbsp;$beaufort6";}
else if ($weather['wind_speed_bft']>=5) {
        echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['wind_speed_bft']. " &nbsp;$beaufort5";} 
else if ($weather['wind_speed_bft']>=4) {
        echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['wind_speed_bft']. " &nbsp;$beaufort4";}   
        
else if ($weather['wind_speed_bft']>=3) {
            echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['wind_speed_bft']. " &nbsp;$beaufort3";}
else if ($weather['wind_speed_bft']>=2) {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['wind_speed_bft']. " &nbsp;$beaufort2";}
else if ($weather['wind_speed_bft']>=1) {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['wind_speed_bft']. " &nbsp;$beaufort1";} 
else if ($weather['wind_speed_bft']==0) {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['wind_speed_bft']. " &nbsp;$beaufort0";}   
?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1>Beaufort</valuetextheading1>
<?php //avg today
if ( $weather['wind_speed_bft']>=12){echo "<div class=tempconverter1><div class=tempmodulehome40-50c><valuebeaufort>".$lang['Hurricane'];echo $heatindexalert8;}
else if (  $weather['wind_speed_bft']>=11){echo "<div class=tempconverter1><div class=tempmodulehome35-40c><valuebeaufort>".$lang['Violentstorm'];echo $heatindexalert8;}
else if (  $weather['wind_speed_bft']>=10){echo "<div class=tempconverter1><div class=tempmodulehome30-35c><valuebeaufort>".$lang['Storm'] ;echo $heatindexalert8;}
else if ( $weather['wind_speed_bft']>=9){echo "<div class=tempconverter1><div class=tempmodulehome30-35c><valuebeaufort>".$lang['Stronggale'];echo $heatindexalert8;}
else if ( $weather['wind_speed_bft']>=8){echo "<div class=tempconverter1><div class=tempmodulehome30-35c><valuebeaufort>".$lang['Galeforce'];echo $heatindexalert8;}
else if ( $weather['wind_speed_bft']>=7){echo "<div class=tempconverter1><div class=tempmodulehome30-35c><valuebeaufort>".$lang['Neargale']; echo $heatindexalert8;}
else if ( $weather['wind_speed_bft']>=6){echo "<div class=tempconverter1><div class=tempmodulehome20-25c><valuebeaufort>".$lang['Strongbreeze'];}
else if ( $weather['wind_speed_bft']>=5){echo "<div class=tempconverter1><div class=tempmodulehome20-25c><valuebeaufort>".$lang['Freshbreeze'];}
else if ( $weather['wind_speed_bft']>=4){echo "<div class=tempconverter1><div class=tempmodulehome10-15c><valuebeaufort>".$lang['Moderatebreeze'];}
else if ( $weather['wind_speed_bft']>=3){echo "<div class=tempconverter1><div class=tempmodulehome10-15c><valuebeaufort>".$lang['Gentelbreeze'];}
else if ( $weather['wind_speed_bft']>=2){echo "<div class=tempconverter1><div class=tempmodulehome0-5c><valuebeaufort>".$lang['Lightbreeze'];}
else if ( $weather['wind_speed_bft']>=1){echo "<div class=tempconverter1><div class=tempmodulehome0-5c><valuebeaufort>".$lang['Lightair'];}
else if ( $weather['wind_speed_bft']>=0){echo "<div class=tempconverter1><div class=tempmodulehome0-5c><valuebeaufort>".$lang['Calm'];}
?>
</smalltempunit2>
</div></div></div>

<div class="heatcirclerain1" ><div class="heatcircle-content">
<div class="rainrateextra">
<valuetextheading1 style="margin-left:-15px;font-size:8.5px">
<?php // weather34 simple css wind avg speed scale 
//kmh
if ($weather["wind_units"]=="km/h" && $weather['wind_speed']>=60){echo "0&nbsp;10&nbsp;20&nbsp;30&nbsp;40&nbsp;50&nbsp;<darkred>60+</darkred>&nbsp";}
else if ($weather["wind_units"]=="km/h" && $weather['wind_speed']>=50){echo "0&nbsp;10&nbsp;20&nbsp;30&nbsp;40&nbsp;<red>50</red>&nbsp;60+&nbsp";}
else if ($weather["wind_units"]=="km/h" && $weather['wind_speed']>=40){echo "0&nbsp;10&nbsp;20&nbsp;30&nbsp;<orange>40</orange>&nbsp;50&nbsp;60+&nbsp";}
else if ($weather["wind_units"]=="km/h" && $weather['wind_speed']>=30){echo "0&nbsp;10&nbsp;20&nbsp;<yellow>30</yellow>&nbsp;40&nbsp;50&nbsp;60+&nbsp";}
else if ($weather["wind_units"]=="km/h" && $weather['wind_speed']>=20){echo "0&nbsp;10&nbsp;<green>20</green>&nbsp;30&nbsp;40&nbsp;50&nbsp;60+&nbsp";}
else if ($weather["wind_units"]=="km/h" && $weather['wind_speed']>=10){echo "0&nbsp;<green>10</green>&nbsp;20&nbsp;30&nbsp;40&nbsp;50&nbsp;60+&nbsp";}
else if ($weather["wind_units"]=="km/h" && $weather['wind_speed']>=0){echo "<blue>0</blue>&nbsp;10&nbsp;20&nbsp;30&nbsp;40&nbsp;50&nbsp;60+&nbsp";}
//mph
if ($weather["wind_units"]=="mph" && $weather['wind_speed']>=45){echo "0&nbsp;6&nbsp;12&nbsp;18&nbsp;24&nbsp;31&nbsp;<darkred>37</darkred>&nbsp;<darkred>45+</darkred>";}
else if ($weather["wind_units"]=="mph" && $weather['wind_speed']>=37.2){echo "0&nbsp;6&nbsp;12&nbsp;18&nbsp;24&nbsp;31&nbsp;<darkred>37</darkred>&nbsp;45+";}
else if ($weather["wind_units"]=="mph" && $weather['wind_speed']>=31){echo "0&nbsp;6&nbsp;12&nbsp;18&nbsp;24&nbsp;<red>31</red>&nbsp;37&nbsp;45+";}
else if ($weather["wind_units"]=="mph" && $weather['wind_speed']>=24.8){echo "0&nbsp;6&nbsp;12&nbsp;18&nbsp;<orange>24</orange>&nbsp;31&nbsp;37&nbsp;45+";}
else if ($weather["wind_units"]=="mph" && $weather['wind_speed']>=18.6){echo "0&nbsp;6&nbsp;12&nbsp;<yellow>18</yellow>&nbsp;24&nbsp;31&nbsp;37&nbsp;45+";}
else if ($weather["wind_units"]=="mph" && $weather['wind_speed']>=12){echo "0&nbsp;6&nbsp;<green>12</green>&nbsp;18&nbsp;24&nbsp;31&nbsp;37&nbsp;45+";}
else if ($weather["wind_units"]=="mph" && $weather['wind_speed']>=6.2){echo "0&nbsp;<green>6</green>&nbsp;12&nbsp;18&nbsp;24&nbsp;31&nbsp;37&nbsp;45+";}
else if ($weather["wind_units"]=="mph" && $weather['wind_speed']>=0){echo "<blue>0</blue>&nbsp;6&nbsp;12&nbsp;18&nbsp;24&nbsp;31&nbsp;37&nbsp;45+";}
//kts
if ($weather["wind_units"]=="kts" && $weather['wind_speed']>=32){echo "0&nbsp;5&nbsp;10&nbsp;16&nbsp;21&nbsp;26&nbsp;<darkred>32+</darkred>&nbsp;";}
else if ($weather["wind_units"]=="kts" && $weather['wind_speed']>=26.99){echo "0&nbsp;5&nbsp;10&nbsp;16&nbsp;21&nbsp;<red>26</red>&nbsp;32+&nbsp;";}
else if ($weather["wind_units"]=="kts" && $weather['wind_speed']>=21.59){echo "0&nbsp;5&nbsp;10&nbsp;16&nbsp;<orange>21</orange>&nbsp;26&nbsp;32+&nbsp;";}
else if ($weather["wind_units"]=="kts" && $weather['wind_speed']>=16.10){echo "0&nbsp;5&nbsp;10&nbsp;<yellow>16</yellow>&nbsp;21&nbsp;26&nbsp;32+&nbsp;";}
else if ($weather["wind_units"]=="kts" && $weather['wind_speed']>=10.7){echo "0&nbsp;5&nbsp;<yellow>10</yellow>&nbsp;16&nbsp;21&nbsp;26&nbsp;32+&nbsp;";}
else if ($weather["wind_units"]=="kts" && $weather['wind_speed']>=5.3){echo "0&nbsp;<green>5</green>&nbsp;10&nbsp;16&nbsp;21&nbsp;26&nbsp;32+&nbsp;";}
else if ($weather["wind_units"]=="kts" && $weather['wind_speed']>=0){echo "<blue>0</blue>&nbsp;5&nbsp;10&nbsp;16&nbsp;21&nbsp;26&nbsp;32+&nbsp;";}
//ms
if ($weather["wind_units"]=="m/s" && $weather['wind_speed']>=16){echo  "0&nbsp;&nbsp;2&nbsp;&nbsp;5&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;<darkred>16+</darkred>&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_speed']>=14){echo  "0&nbsp;&nbsp;2&nbsp;&nbsp;5&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;<red>14</red>&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_speed']>=11){echo  "0&nbsp;&nbsp;2&nbsp;&nbsp;5&nbsp;&nbsp;8&nbsp;&nbsp;<orange>11</orange>&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_speed']>=8){echo  "0&nbsp;&nbsp;2&nbsp;&nbsp;5&nbsp;&nbsp;<yellow>8</yellow>&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_speed']>=5){echo  "0&nbsp;&nbsp;2&nbsp;&nbsp;<green>5</green>&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_speed']>=2){echo  "0&nbsp;&nbsp;<green>2</green>&nbsp;&nbsp;5&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_speed']>=0){echo  "<blue>0</blue>&nbsp;&nbsp;2&nbsp;&nbsp;5&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
echo "<smalltempunit2>&nbsp;".$weather["wind_units"];?></smalltempunit2>
</valuetextheading1>
<div class=rainratebar>
<div class="weather34ratebar" 
style="width:
<?php 
if ($weather["wind_units"]=="km/h"){echo $weather['wind_speed']*1.375;}
if ($weather["wind_units"]=="mph"){echo $weather['wind_speed']*2;}
if ($weather["wind_units"]=="kts"){echo $weather['wind_speed']*2;}
if ($weather["wind_units"]=="m/s"){echo $weather['wind_speed']*4.4;}
?>px;

background:<?php 
if ($weather['wind_speed']>=70 && $weather["wind_units"]=="km/h"){echo '#703232';}
elseif ($weather['wind_speed']>=50 && $weather["wind_units"]=="km/h"){echo '#cc504c';}
elseif ($weather['wind_speed']>=40 && $weather["wind_units"]=="km/h"){echo '#d87040';}
elseif ($weather['wind_speed']>=30 && $weather["wind_units"]=="km/h"){echo '#e6a241';}
elseif ($weather['wind_speed']>=10 && $weather["wind_units"]=="km/h"){echo '#9bbc2f';}
elseif ($weather['wind_speed']>=0 && $weather["wind_units"]=="km/h"){echo '#00adbd';}

if ($weather['wind_speed']>=46 && $weather["wind_units"]=="mph"){echo '#703232';}
elseif ($weather['wind_speed']>=31.06 && $weather["wind_units"]=="mph"){echo '#cc504c';}
elseif ($weather['wind_speed']>=24.8 && $weather["wind_units"]=="mph"){echo '#d87040';}
elseif ($weather['wind_speed']>=18.6 && $weather["wind_units"]=="mph"){echo '#e6a241';}
elseif ($weather['wind_speed']>=6.2 && $weather["wind_units"]=="mph"){echo '#9bbc2f';}
elseif ($weather['wind_speed']>=0 && $weather["wind_units"]=="mph"){echo '#00adbd';}

if ($weather['wind_speed']>=40.4 && $weather["wind_units"]=="kts"){echo '#703232';}
elseif ($weather['wind_speed']>=26.99 && $weather["wind_units"]=="kts"){echo '#cc504c';}
elseif ($weather['wind_speed']>=21.5 && $weather["wind_units"]=="kts"){echo '#d87040';}
elseif ($weather['wind_speed']>=16.19 && $weather["wind_units"]=="kts"){echo '#e6a241';}
elseif ($weather['wind_speed']>=5.3 && $weather["wind_units"]=="kts"){echo '#9bbc2f';}
elseif ($weather['wind_speed']>=0 && $weather["wind_units"]=="kts"){echo '#00adbd';}

if ($weather['wind_speed']>=20.83 && $weather["wind_units"]=="m/s"){echo '#703232';}
elseif ($weather['wind_speed']>=13.88 && $weather["wind_units"]=="m/s"){echo '#cc504c';}
elseif ($weather['wind_speed']>=11.11 && $weather["wind_units"]=="m/s"){echo '#d87040';}
elseif ($weather['wind_speed']>=8.33 && $weather["wind_units"]=="m/s"){echo '#e6a241';}
elseif ($weather['wind_speed']>=2.77 && $weather["wind_units"]=="m/s"){echo '#9bbc2f';}
elseif ($weather['wind_speed']>=0 && $weather["wind_units"]=="m/s"){echo '#00adbd';}




?>;">
</div></div>



<div class=thetrendgapwind>
<?php 
//windrun
echo '<div class=thetrendboxblue>'.$lang['Avg'].' '.$lang['Today'].'';echo '&nbsp;<blue>'.number_format($weather["wind_speed_avg30"],1).'</blue><smalltempunit2>&nbsp;'.$windunit.'</smalltempunit2>';?>
</div></div>
<div class="weather-icon-identity-wind"><?php 
if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<10){ echo "<icon-0-5>".$weather34_wind_icon."</icon-0-5>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<30){ echo "<icon-6-10>".$weather34_wind_icon."</icon-6-10>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<40){ echo "<icon-11-15>".$weather34_wind_icon."</icon-11-15>";}         
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<50){ echo "<icon-21-25>".$weather34_wind_icon."</icon-21-25>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<60){ echo "<icon-26-30>".$weather34_wind_icon."</icon-26-30>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<70){ echo "<icon-31-35>".$weather34_wind_icon."</icon-31-35>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<300){ echo "<icon-36-40>".$weather34_wind_icon."</icon-36-40>";}

          if($weather["wind_units"]=="mph" && $weather["wind_speed"]<6.2){ echo "<icon-0-5>".$weather34_wind_icon."</icon-0-5>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<18.6){ echo "<icon-6-10>".$weather34_wind_icon."</icon-6-10>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<24.8){ echo "<icon-11-15>".$weather34_wind_icon."</icon-11-15>";}         
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<31){ echo "<icon-21-25>".$weather34_wind_icon."</icon-21-25>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<37.2){ echo "<icon-26-30>".$weather34_wind_icon."</icon-26-30>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<43.4){ echo "<icon-31-35>".$weather34_wind_icon."</icon-31-35>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<300){ echo "<icon-36-40>".$weather34_wind_icon."</icon-36-40>";}


          if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<2.7){ echo "<icon-0-5>".$weather34_wind_icon."</icon-0-5>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<8.33){ echo "<icon-6-10>".$weather34_wind_icon."</icon-6-10>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<11.11){ echo "<icon-11-15>".$weather34_wind_icon."</icon-11-15>";}         
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<13.88){ echo "<icon-21-25>".$weather34_wind_icon."</icon-21-25>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<16.66){ echo "<icon-26-30>".$weather34_wind_icon."</icon-26-30>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<19.44){ echo "<icon-31-35>".$weather34_wind_icon."</icon-31-35>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<300){ echo "<icon-36-40>".$weather34_wind_icon."</icon-36-40>";}

          if($weather["wind_units"]=="kts" && $weather["wind_speed"]<5.9){ echo "<icon-0-5>".$weather34_wind_icon."</icon-0-5>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<16.19){ echo "<icon-6-10>".$weather34_wind_icon."</icon-6-10>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<21.59){ echo "<icon-11-15>".$weather34_wind_icon."</icon-11-15>";}         
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<26.99){ echo "<icon-21-25>".$weather34_wind_icon."</icon-21-25>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<32.3){ echo "<icon-26-30>".$weather34_wind_icon."</icon-26-30>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<37.7){ echo "<icon-31-35>".$weather34_wind_icon."</icon-31-35>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<300){ echo "<icon-36-40>".$weather34_wind_icon."</icon-36-40>";}
?>
</div>



</div></div>

<div class="maxwind2">
<?php  //60 Min Avg
echo '60" ';echo $lang['Avg']." ";
//kmh
if($weather["wind_speed_avg"]>=50 && $weather["wind_units"]=="km/h"){echo "<red>" .number_format($weather["wind_speed_avg"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_speed_avg"]>=30 && $weather["wind_units"]=="km/h"){echo "<orange>" .number_format($weather["wind_speed_avg"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=10 && $weather["wind_units"]=="km/h"){echo "<yellow>" .number_format($weather["wind_speed_avg"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=0 && $weather["wind_units"]=="km/h"){echo "<blue>" .number_format($weather["wind_speed_avg"],1)."</blue>&nbsp;<smalltempunit2>".$windunit;}
//mph
if($weather["wind_speed_avg"]>=31 && $weather["wind_units"]=="mph"){echo "<red>" .number_format($weather["wind_speed_avg"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_speed_avg"]>=18.6 && $weather["wind_units"]=="mph"){echo "<orange>" .number_format($weather["wind_speed_avg"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=6.2 && $weather["wind_units"]=="mph"){echo "<yellow>" .number_format($weather["wind_speed_avg"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=0 && $weather["wind_units"]=="mph"){echo "<blue>" .number_format($weather["wind_speed_avg"],1)."</blue>&nbsp;<smalltempunit2>".$windunit;}

//ms
if($weather["wind_speed_avg"]>=13.88 && $weather["wind_units"]=="m/s"){echo "<red>" .number_format($weather["wind_speed_avg"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_speed_avg"]>=8.33 && $weather["wind_units"]=="m/s"){echo "<orange>" .number_format($weather["wind_speed_avg"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=6.2 && $weather["wind_units"]=="m/s"){echo "<yellow>" .number_format($weather["wind_speed_avg"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=0 && $weather["wind_units"]=="m/s"){echo "<blue>" .number_format($weather["wind_speed_avg"],1)."</blue>&nbsp;<smalltempunit2>".$windunit;}

//kts
if($weather["wind_speed_avg"]>=26.90 && $weather["wind_units"]=="kts"){echo "<red>" .number_format($weather["wind_speed_avg"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_speed_avg"]>=16.19 && $weather["wind_units"]=="kts"){echo "<orange>" .number_format($weather["wind_speed_avg"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=2.77 && $weather["wind_units"]=="kts"){echo "<yellow>" .number_format($weather["wind_speed_avg"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=0 && $weather["wind_units"]=="kts"){echo "<blue>" .number_format($weather["wind_speed_avg"],1)."</blue>&nbsp;<smalltempunit2>".$windunit;}

?>
</div>