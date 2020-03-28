<?php include('livedata.php');include('common.php');?>
<div class="modulecaption2" >Beaufort</div>
<div class="button button-dial">      
<div class="button-dial-top"></div>

<realfeel>BFT <?php echo $lang['Wind']?></realfeel>
<div class="button-dial-label">
          <?php 
          if ($weather['wind_speed_bft']>=7){echo '<red>'.$weather['wind_speed_bft']."</red>";}
          elseif ($weather['wind_speed_bft']>=5){echo '<orange>'.$weather['wind_speed_bft']."</orange>";}
          elseif ($weather['wind_speed_bft']>=3){echo '<yellow>'.$weather['wind_speed_bft']."</yellow>";}
          elseif ($weather['wind_speed_bft']>=0){echo '<blue>'.$weather['wind_speed_bft']."</blue>";}
          ?>        
          </div></div></div>

<?php //unit
echo "<windunitindicator>";echo "BFT</windunitindicator>";?>

<?php //man walking-running
echo "<windindicator>";
if ($weather['wind_speed_bft']>=7) {echo "<red>".$walkingman. "</red>";}          
          else if ($weather['wind_speed_bft']>=5) {echo "<orange>".$walkingman. "</orange>";} 
          else if ($weather['wind_speed_bft']>=4) {echo "<yellow>".$walkingman. "</yellow>";}        
          else if ($weather['wind_speed_bft']>=3) {echo "<yellow>".$walkingman. "</yellow>";}          
          else if ($weather['wind_speed_bft']>=0) {echo "<blue>".$walkingman. "</blue>";}  
echo "</windindicator>";?>
</div></div></div></div></div>

<div class="heatcircle"><div class="heatcircle-content">
<valuetextheading1>Wind Barb Scale</valuetextheading1>
<?php  //bft
echo "<div class=tempmodulehome0-5c>";
if ($weather['wind_speed_bft']>=12) {echo " &nbsp;".$beaufort12;}
else if ($weather['wind_speed_bft']>=11){echo " &nbsp;".$beaufort11 ;}
else if ($weather['wind_speed_bft']>=10){echo " &nbsp;".$beaufort10 ;}
else if ($weather['wind_speed_bft']>=9) {echo " &nbsp;".$beaufort9 ;}
else if ($weather['wind_speed_bft']>=8) {echo " &nbsp;".$beaufort8 ;}    
else if ($weather['wind_speed_bft']>=7) {echo " &nbsp;".$beaufort7 ;}
else if ($weather['wind_speed_bft']>=6) {echo " &nbsp;".$beaufort6 ;}
else if ($weather['wind_speed_bft']>=5) {echo " &nbsp;".$beaufort5 ;} 
else if ($weather['wind_speed_bft']>=4) {echo " &nbsp;".$beaufort4 ;}        
else if ($weather['wind_speed_bft']>=3) {echo " &nbsp;".$beaufort3 ;}
else if ($weather['wind_speed_bft']>=2) {echo " &nbsp;".$beaufort2 ;}
else if ($weather['wind_speed_bft']>=1) {echo " &nbsp;".$beaufort1 ;} 
else if ($weather['wind_speed_bft']>=0) {echo " &nbsp;".$beaufort0 ;}   
?><smalltempunit2></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1>Beaufort</valuetextheading1>
<?php //bft txt
echo "<div class=tempmodulehome0-5c><valuebeaufort>";
if ( $weather['wind_speed_bft']>=12){echo $lang['Hurricane'];echo "&nbsp;".$heatindexalert8;}
else if ( $weather['wind_speed_bft']>=11){echo $lang['Violentstorm'];echo "&nbsp;".$heatindexalert8;}
else if ( $weather['wind_speed_bft']>=10){echo $lang['Storm'] ;echo "&nbsp;".$heatindexalert8;}
else if ( $weather['wind_speed_bft']>=9){echo $lang['Stronggale'];echo "&nbsp;".$heatindexalert8;}
else if ( $weather['wind_speed_bft']>=8){echo $lang['Galeforce'];echo "&nbsp;".$heatindexalert8;}
else if ( $weather['wind_speed_bft']>=7){echo $lang['Neargale']; echo "&nbsp;".$heatindexalert8;}
else if ( $weather['wind_speed_bft']>=6){echo $lang['Strongbreeze'];}
else if ( $weather['wind_speed_bft']>=5){echo $lang['Freshbreeze'];}
else if ( $weather['wind_speed_bft']>=4){echo $lang['Moderatebreeze'];}
else if ( $weather['wind_speed_bft']>=3){echo $lang['Gentelbreeze'];}
else if ( $weather['wind_speed_bft']>=2){echo $lang['Lightbreeze'];}
else if ( $weather['wind_speed_bft']>=1){echo $lang['Lightair'];}
else if ( $weather['wind_speed_bft']>=0){echo $lang['Calm'];}
?></smalltempunit2></valuebeaufort></div></div>

<div class="heatcirclerain1" ><div class="heatcircle-content">
<div class="rainrateextra">
<valuetextheading1 style="margin-left:-17px;font-size:8.5px">
<?php // weather34 simple css bft wind speed scale 
if ( $weather['wind_speed_bft']>=10){echo "0&nbsp;1&nbsp;2&nbsp;3&nbsp;4&nbsp;5&nbsp;6&nbsp7&nbsp8&nbsp9&nbsp<red>10+</red>&nbsp";}
else if ( $weather['wind_speed_bft']>=9){echo "0&nbsp;1&nbsp;2&nbsp;3&nbsp;4&nbsp;5&nbsp;6&nbsp7&nbsp8&nbsp<red>9</red>&nbsp10+&nbsp";}
else if ( $weather['wind_speed_bft']>=8){echo "0&nbsp;1&nbsp;2&nbsp;3&nbsp;4&nbsp;5&nbsp;6&nbsp7&nbsp<red>8</red>&nbsp9&nbsp10+&nbsp";}
else if ( $weather['wind_speed_bft']>=7){echo "0&nbsp;1&nbsp;2&nbsp;3&nbsp;4&nbsp;5&nbsp;6&nbsp<red>7</red>&nbsp8&nbsp9&nbsp10+&nbsp";}
else if ( $weather['wind_speed_bft']>=6){echo "0&nbsp;1&nbsp;2&nbsp;3&nbsp;4&nbsp;5&nbsp;<orange>6</orange>&nbsp7&nbsp8&nbsp9&nbsp10+&nbsp";}
else if ( $weather['wind_speed_bft']>=5){echo "0&nbsp;1&nbsp;2&nbsp;3&nbsp;4&nbsp;<orange>5</orange>&nbsp;6&nbsp7&nbsp8&nbsp9&nbsp10+&nbsp";}
else if ( $weather['wind_speed_bft']>=4){echo "0&nbsp;1&nbsp;2&nbsp;3&nbsp;<yellow>4</yellow>&nbsp;5&nbsp;6&nbsp7&nbsp8&nbsp9&nbsp10+&nbsp";}
else if ( $weather['wind_speed_bft']>=3){echo "0&nbsp;1&nbsp;2&nbsp;<yellow>3</yellow>&nbsp;4&nbsp;5&nbsp;6&nbsp7&nbsp8&nbsp9&nbsp10+&nbsp";}
else if ( $weather['wind_speed_bft']>=2){echo "0&nbsp;1&nbsp;<blue>2</blue>&nbsp;3&nbsp;4&nbsp;5&nbsp;6&nbsp7&nbsp8&nbsp9&nbsp10+&nbsp";}
else if ( $weather['wind_speed_bft']>=1){echo "0&nbsp;<blue>1</blue>&nbsp;2&nbsp;3&nbsp;4&nbsp;5&nbsp;6&nbsp7&nbsp8&nbsp9&nbsp10+&nbsp";}
else if ( $weather['wind_speed_bft']>=0){echo "<blue>0</blue>&nbsp;1&nbsp;2&nbsp;3&nbsp;4&nbsp;5&nbsp;6&nbsp7&nbsp8&nbsp9&nbsp10+&nbsp";}
echo "<smalltempunit2>&nbsp;BFT";?></smalltempunit2>
</valuetextheading1>
<div class=rainratebar>
<div class="weather34ratebar" 
style="width:
<?php echo $weather['wind_speed_bft']*9;?>px;
background:<?php 
if ($weather['wind_speed_bft']>=7){echo '#d35f50';}
elseif ($weather['wind_speed_bft']>=5){echo '#d87040';}
elseif ($weather['wind_speed_bft']>=3){echo '#e6a241';}
elseif ($weather['wind_speed_bft']>=0){echo '#00adbd';}
?>;"></div></div>

<div class=thetrendgapwind>
<?php 
//windrun
echo '<div class=thetrendboxblue>'.$lang['Avg'].' '.$lang['Today'].'';echo '&nbsp;<blue>'.number_format($weather["wind_speed_avg30"],1).'</blue><smalltempunit2>&nbsp;'.$windunit.'</smalltempunit2>';?>
</div></div>

<div class="weather-icon-identity-wind"><?php 
if ($weather['wind_speed_bft']>=7){echo '<red>'.$weather34_wind_icon;}
elseif ($weather['wind_speed_bft']>=5){echo '<orange>'.$weather34_wind_icon;}
elseif ($weather['wind_speed_bft']>=3){echo '<yellow>'.$weather34_wind_icon;}
elseif ($weather['wind_speed_bft']>=0){echo '<blue>'.$weather34_wind_icon;}
?></div></div></div>

<div class="maxwind2">
<?php  //MAX Today
echo "Max ";echo $lang['Today']." ";
//kmh to bft
if($weather["winddmax"]>=118 && $weather["wind_units"]=="km/h"){echo "<red>12</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=103 && $weather["wind_units"]=="km/h"){echo "<red>11</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=89 && $weather["wind_units"]=="km/h"){echo "<red>10</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=75 && $weather["wind_units"]=="km/h"){echo "<red>9</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=62 && $weather["wind_units"]=="km/h"){echo "<red>8</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=50 && $weather["wind_units"]=="km/h"){echo "<red>7</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=39 && $weather["wind_units"]=="km/h"){echo "<orange>6</orange>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=29 && $weather["wind_units"]=="km/h"){echo "<orange>5</orange>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=20 && $weather["wind_units"]=="km/h"){echo "<yellow>4</yellow>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=12 && $weather["wind_units"]=="km/h"){echo "<yellow>3</yellow>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=7.41 && $weather["wind_units"]=="km/h"){echo "<blue>2</blue>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=1.85 && $weather["wind_units"]=="km/h"){echo "<blue>1</blue>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=0 && $weather["wind_units"]=="km/h"){echo "<blue>0</blue>&nbsp;<smalltempunit2>BFT";}
//mph to bft
if($weather["winddmax"]>=73.64 && $weather["wind_units"]=="mph"){echo "<red>12</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=64.44 && $weather["wind_units"]=="mph"){echo "<red>11</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=55.23 && $weather["wind_units"]=="mph"){echo "<red>10</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=47.18 && $weather["wind_units"]=="mph"){echo "<red>9</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=39.12 && $weather["wind_units"]=="mph"){echo "<red>8</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=32.22 && $weather["wind_units"]=="mph"){echo "<red>7</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=25.32 && $weather["wind_units"]=="mph"){echo "<orange>6</orange>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=18.41 && $weather["wind_units"]=="mph"){echo "<orange>5</orange>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=12.66 && $weather["wind_units"]=="mph"){echo "<yellow>4</yellow>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=8.05 && $weather["wind_units"]=="mph"){echo "<yellow>3</yellow>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=4.6 && $weather["wind_units"]=="mph"){echo "<blue>2</blue>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=1.15 && $weather["wind_units"]=="mph"){echo "<blue>1</blue>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=0 && $weather["wind_units"]=="mph"){echo "<blue>0</blue>&nbsp;<smalltempunit2>BFT";}
//kts to bft
if($weather["winddmax"]>=64 && $weather["wind_units"]=="kts"){echo "<red>12</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=56 && $weather["wind_units"]=="kts"){echo "<red>11</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=48 && $weather["wind_units"]=="kts"){echo "<red>10</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=41 && $weather["wind_units"]=="kts"){echo "<red>9</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=34 && $weather["wind_units"]=="kts"){echo "<red>8</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=28 && $weather["wind_units"]=="kts"){echo "<red>7</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=22 && $weather["wind_units"]=="kts"){echo "<orange>6</orange>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=16 && $weather["wind_units"]=="kts"){echo "<orange>5</orange>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=11 && $weather["wind_units"]=="kts"){echo "<yellow>4</yellow>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=7 && $weather["wind_units"]=="kts"){echo "<yellow>3</yellow>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=4 && $weather["wind_units"]=="kts"){echo "<blue>2</blue>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=1 && $weather["wind_units"]=="kts"){echo "<blue>1</blue>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=0 && $weather["wind_units"]=="kts"){echo "<blue>0</blue>&nbsp;<smalltempunit2>BFT";}
//ms to bft
if($weather["winddmax"]>=32.92 && $weather["wind_units"]=="m/s"){echo "<red>12</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=28.81 && $weather["wind_units"]=="m/s"){echo "<red>11</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=24.69 && $weather["wind_units"]=="m/s"){echo "<red>10</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=21.09 && $weather["wind_units"]=="m/s"){echo "<red>9</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=17.49 && $weather["wind_units"]=="m/s"){echo "<red>8</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=14.4 && $weather["wind_units"]=="m/s"){echo "<red>7</red>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=11.32 && $weather["wind_units"]=="m/s"){echo "<orange>6</orange>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=8.23 && $weather["wind_units"]=="m/s"){echo "<orange>5</orange>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=5.66 && $weather["wind_units"]=="m/s"){echo "<yellow>4</yellow>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=3.6 && $weather["wind_units"]=="m/s"){echo "<yellow>3</yellow>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=2.06 && $weather["wind_units"]=="m/s"){echo "<blue>2</blue>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=0.51 && $weather["wind_units"]=="m/s"){echo "<blue>1</blue>&nbsp;<smalltempunit2>BFT";}
else if($weather["winddmax"]>=0 && $weather["wind_units"]=="m/s"){echo "<blue>0</blue>&nbsp;<smalltempunit2>BFT";}
?>
</div>