<?php include('livedata.php');include('common.php');?>
<div class="modulecaption2" ><?php echo $lang['Avg Wind'];?></div>
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
          if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<10){ echo "<icon-0-5>".$weather["wind_speed"]."</icon-0-5>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<30){ echo "<icon-6-10>".number_format($weather["wind_speed"],1)."</icon-6-10>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<40){ echo "<icon-11-15>".number_format($weather["wind_speed"],1)."</icon-11-15>";}         
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<50){ echo "<icon-21-25>".number_format($weather["wind_speed"],1)."</icon-21-25>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<60){ echo "<icon-26-30>".number_format($weather["wind_speed"],1)."</icon-26-30>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<70){ echo "<icon-31-35>".number_format($weather["wind_speed"],1)."</icon-31-35>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<300){ echo "<icon-36-40>".number_format($weather["wind_speed"],1)."</icon-36-40>";}

          if($weather["wind_units"]=="mph" && $weather["wind_speed"]<6.2){ echo "<icon-0-5>".$weather["wind_speed"]."</icon-0-5>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<18.6){ echo "<icon-6-10>".number_format($weather["wind_speed"],1)."</icon-6-10>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<24.8){ echo "<icon-11-15>".number_format($weather["wind_speed"],1)."</icon-11-15>";}         
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<31){ echo "<icon-21-25>".number_format($weather["wind_speed"],1)."</icon-21-25>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<37.2){ echo "<icon-26-30>".number_format($weather["wind_speed"],1)."</icon-26-30>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<43.4){ echo "<icon-31-35>".number_format($weather["wind_speed"],1)."</icon-31-35>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<300){ echo "<icon-36-40>".number_format($weather["wind_speed"],1)."</icon-36-40>";}

          if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<6.2){ echo "<icon-0-5>".$weather["wind_speed"]."</icon-0-5>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<18.6){ echo "<icon-6-10>".$weather["wind_speed"]."</icon-6-10>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<24.8){ echo "<icon-11-15>".$weather["wind_speed"]."</icon-11-15>";}         
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<31){ echo "<icon-21-25>".$weather["wind_speed"]."</icon-21-25>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<37.2){ echo "<icon-26-30>".$weather["wind_speed"]."</icon-26-30>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<43.4){ echo "<icon-31-35>".$weather["wind_speed"]."</icon-31-35>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<300){ echo "<icon-36-40>".$weather["wind_speed"]."</icon-36-40>";}

          if($weather["wind_units"]=="kts" && $weather["wind_speed"]<6.2){ echo "<icon-0-5>".$weather["wind_speed"]."</icon-0-5>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<18.6){ echo "<icon-6-10>".$weather["wind_speed"]."</icon-6-10>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<24.8){ echo "<icon-11-15>".$weather["wind_speed"]."</icon-11-15>";}         
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<31){ echo "<icon-21-25>".$weather["wind_speed"]."</icon-21-25>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<37.2){ echo "<icon-26-30>".$weather["wind_speed"]."</icon-26-30>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<43.4){ echo "<icon-31-35>".$weather["wind_speed"]."</icon-31-35>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<300){ echo "<icon-36-40>".$weather["wind_speed"]."</icon-36-40>";}
          ?>
        </div>
      </div>
<div>

<?php //unit
echo "<windunitindicator>";echo $weather["wind_units"];echo "</windunitindicator>";?>

<?php //man walking-running
echo "<windindicator>";
if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<10){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<30){ echo "<icon-6-10>".$walkingman."</icon-6-10>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<40){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<50){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<60){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<70){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_speed"]<300){ echo "<icon-36-40>".$walkingman."</icon-36-40>";}

          if($weather["wind_units"]=="mph" && $weather["wind_speed"]<6.2){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<18.6){ echo "<icon-6-10>".$walkingman."</icon-6-10>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<24.8){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<31){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<37.2){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<43.4){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_speed"]<300){ echo "<icon-36-40>".$walkingman."</icon-36-40>";}

          if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<6.2){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<18.6){ echo "<icon-6-10>".$walkingman."</icon-6-10>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<24.8){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<31){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<37.2){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<43.4){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_speed"]<300){ echo "<icon-36-40>".$walkingman."</icon-36-40>";}

          if($weather["wind_units"]=="kts" && $weather["wind_speed"]<6.2){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<18.6){ echo "<icon-6-10>".$walkingman."</icon-6-10>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<24.8){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<31){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<37.2){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_speed"]<43.4){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
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
</smalltempunit2></div></div>

<div class=thetrendgapwind>
<?php 
//windrun
echo '<div class=thetrendboxblue>'.$lang['Avg'].' '.$lang['Today'].'';echo '&nbsp;<blue>'.number_format($weather["wind_speed_avg30"],1).'</blue><smalltempunit2>&nbsp;'.$weather["wind_units"].'</smalltempunit2>';?>
</div></div></div></div>

<div class="maxwind">
<?php  //60 Min Avg
echo "60 Min Avg ";
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
if($weather["wind_speed_avg"]>=31 && $weather["wind_units"]=="m/s"){echo "<red>" .number_format($weather["wind_speed_avg"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_speed_avg"]>=18.6 && $weather["wind_units"]=="m/s"){echo "<orange>" .number_format($weather["wind_speed_avg"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=6.2 && $weather["wind_units"]=="m/s"){echo "<yellow>" .number_format($weather["wind_speed_avg"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=0 && $weather["wind_units"]=="m/s"){echo "<blue>" .number_format($weather["wind_speed_avg"],1)."</blue>&nbsp;<smalltempunit2>".$windunit;}

//kts
if($weather["wind_speed_avg"]>=31 && $weather["wind_units"]=="kts"){echo "<red>" .number_format($weather["wind_speed_avg"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_speed_avg"]>=18.6 && $weather["wind_units"]=="kts"){echo "<orange>" .number_format($weather["wind_speed_avg"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=6.2 && $weather["wind_units"]=="kts"){echo "<yellow>" .number_format($weather["wind_speed_avg"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=0 && $weather["wind_units"]=="kts"){echo "<blue>" .number_format($weather["wind_speed_avg"],1)."</blue>&nbsp;<smalltempunit2>".$windunit;}

?>
</div>