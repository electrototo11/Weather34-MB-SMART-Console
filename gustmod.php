<?php include('livedata.php');include('common.php');?>
<div class="modulecaption2" ><?php echo $lang['Windspeed'];?></div>
<div class="button button-dial">            
<div class="button-dial-top"></div>
<realfeel>
<?php  //max last 10 mins
echo '10" Max ';
//kmh
if($weather["wind_speed_max"]>=50 && $weather["wind_units"]=="km/h"){echo "<red>" .number_format($weather["wind_speed_max"],1)."</red>&nbsp;";}
else if($weather["wind_speed_max"]>=30 && $weather["wind_units"]=="km/h"){echo "<orange>" .number_format($weather["wind_speed_max"],1)."</orange>&nbsp;";}
else if($weather["wind_speed_max"]>=10 && $weather["wind_units"]=="km/h"){echo "<yellow>" .number_format($weather["wind_speed_max"],1)."</yellow>&nbsp;";}
else if($weather["wind_speed_max"]>=0 && $weather["wind_units"]=="km/h"){echo "<green>" .number_format($weather["wind_speed_max"],1)."</green>&nbsp;";}
//mph
if($weather["wind_speed_max"]>=31 && $weather["wind_units"]=="mph"){echo "<red>" .number_format($weather["wind_speed_max"],1)."</red>&nbsp;";}
else if($weather["wind_speed_max"]>=18.6 && $weather["wind_units"]=="mph"){echo "<orange>" .number_format($weather["wind_speed_max"],1)."</orange>&nbsp;";}
else if($weather["wind_speed_max"]>=6.2 && $weather["wind_units"]=="mph"){echo "<yellow>" .number_format($weather["wind_speed_max"],1)."</yellow>&nbsp;";}
else if($weather["wind_speed_max"]>=0 && $weather["wind_units"]=="mph"){echo "<green>" .number_format($weather["wind_speed_max"],1)."</green>&nbsp;";}
?>
</realfeel>
 <div class="button-dial-label">
          
          <?php 
          //kmh
          if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<10){ echo "<icon-0-5>".$weather["wind_gust_speed"]."</icon-0-5>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<30){ echo "<icon-6-10>".number_format($weather["wind_gust_speed"],1)."</icon-6-10>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<40){ echo "<icon-11-15>".number_format($weather["wind_gust_speed"],1)."</icon-11-15>";}         
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<50){ echo "<icon-21-25>".number_format($weather["wind_gust_speed"],1)."</icon-21-25>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<60){ echo "<icon-26-30>".number_format($weather["wind_gust_speed"],1)."</icon-26-30>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<70){ echo "<icon-31-35>".number_format($weather["wind_gust_speed"],1)."</icon-31-35>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<300){ echo "<icon-36-40>".number_format($weather["wind_gust_speed"],1)."</icon-36-40>";}
          //mph
          if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<6.2){ echo "<icon-0-5>".$weather["wind_gust_speed"]."</icon-0-5>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<18.6){ echo "<icon-6-10>".number_format($weather["wind_gust_speed"],1)."</icon-6-10>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<24.8){ echo "<icon-11-15>".number_format($weather["wind_gust_speed"],1)."</icon-11-15>";}         
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<31){ echo "<icon-21-25>".number_format($weather["wind_gust_speed"],1)."</icon-21-25>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<37.2){ echo "<icon-26-30>".number_format($weather["wind_gust_speed"],1)."</icon-26-30>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<43.4){ echo "<icon-31-35>".number_format($weather["wind_gust_speed"],1)."</icon-31-35>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<300){ echo "<icon-36-40>".number_format($weather["wind_gust_speed"],1)."</icon-36-40>";}
          //ms
          if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<6.2){ echo "<icon-0-5>".$weather["wind_gust_speed"]."</icon-0-5>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<18.6){ echo "<icon-6-10>".$weather["wind_gust_speed"]."</icon-6-10>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<24.8){ echo "<icon-11-15>".$weather["wind_gust_speed"]."</icon-11-15>";}         
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<31){ echo "<icon-21-25>".$weather["wind_gust_speed"]."</icon-21-25>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<37.2){ echo "<icon-26-30>".$weather["wind_gust_speed"]."</icon-26-30>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<43.4){ echo "<icon-31-35>".$weather["wind_gust_speed"]."</icon-31-35>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<300){ echo "<icon-36-40>".$weather["wind_gust_speed"]."</icon-36-40>";}
          //kts
          if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<6.2){ echo "<icon-0-5>".$weather["wind_gust_speed"]."</icon-0-5>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<18.6){ echo "<icon-6-10>".$weather["wind_gust_speed"]."</icon-6-10>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<24.8){ echo "<icon-11-15>".$weather["wind_gust_speed"]."</icon-11-15>";}         
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<31){ echo "<icon-21-25>".$weather["wind_gust_speed"]."</icon-21-25>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<37.2){ echo "<icon-26-30>".$weather["wind_gust_speed"]."</icon-26-30>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<43.4){ echo "<icon-31-35>".$weather["wind_gust_speed"]."</icon-31-35>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<300){ echo "<icon-36-40>".$weather["wind_gust_speed"]."</icon-36-40>";}
          ?>
        </div>
      </div>
<div>

<?php //unit
echo "<windunitindicator>";echo $weather["wind_units"];echo "</windunitindicator>";?>

<?php //man walking-running
echo "<windindicator>";
if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<10){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<30){ echo "<icon-6-10>".$walkingman."</icon-6-10>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<40){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<50){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<60){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<70){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
          else if($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]<300){ echo "<icon-36-40>".$walkingman."</icon-36-40>";}

          if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<6.2){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<18.6){ echo "<icon-6-10>".$walkingman."</icon-6-10>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<24.8){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<31){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<37.2){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<43.4){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
          else if($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]<300){ echo "<icon-36-40>".$walkingman."</icon-36-40>";}

          if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<6.2){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<18.6){ echo "<icon-6-10>".$walkingman."</icon-6-10>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<24.8){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<31){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<37.2){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<43.4){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
          else if($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]<300){ echo "<icon-36-40>".$walkingman."</icon-36-40>";}

          if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<6.2){ echo "<icon-0-5>".$walkingman."</icon-0-5>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<18.6){ echo "<icon-6-10>".$walkingman."</icon-6-10>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<24.8){ echo "<icon-11-15>".$walkingman."</icon-11-15>";}         
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<31){ echo "<icon-21-25>".$walkingman."</icon-21-25>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<37.2){ echo "<icon-26-30>".$walkingman."</icon-26-30>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<43.4){ echo "<icon-31-35>".$walkingman."</icon-31-35>";}
          else if($weather["wind_units"]=="kts" && $weather["wind_gust_speed"]<300){ echo "<icon-36-40>".$walkingman."</icon-36-40>";}

echo "</windindicator>";?>
</div></div></div></div></div>

<div class="heatcircle"><div class="heatcircle-content">  

<valuetextheading1><?php echo date('Y')?> Max <deepblue><?php echo $weather["windymaxtime"]?></deepblue></valuetextheading1>
<?php  //wind year max
//kmh
if ($weather['windymax']>=75 && $weather["wind_units"]=="km/h") {
echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=40 && $weather["wind_units"]=="km/h") {
echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=30 && $weather["wind_units"]=="km/h") {
echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windymax']>=10 && $weather["wind_units"]=="km/h") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=0 && $weather["wind_units"]=="km/h") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
//mph
if ($weather['windymax']>=46 && $weather["wind_units"]=="mph") {
echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=24.8 && $weather["wind_units"]=="mph") {
echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=18.6 && $weather["wind_units"]=="mph") {
echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windymax']>=6.2 && $weather["wind_units"]=="mph") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=0 && $weather["wind_units"]=="mph") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
//ms
if ($weather['windymax']>=46 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
    else if ($weather['windymax']>=24.8 && $weather["wind_units"]=="m/s") {
 echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
    else if ($weather['windymax']>=18.6 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
    else if ($weather['windymax']>=6.2 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
    else if ($weather['windymax']>=0 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
//kts
if ($weather['windymax']>=46 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
    else if ($weather['windymax']>=24.8 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
    else if ($weather['windymax']>=18.6 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
    else if ($weather['windymax']>=6.2 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
    else if ($weather['windymax']>=0 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
//end year max
?><smalltempunit2></div></div></div>


<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1><?php echo $lang['Month']?> Max <deepblue><?php echo $weather["windmmaxtime"]?></deepblue></valuetextheading1>
<?php  //month wind max
if ($weather['windmmax']>=75 && $weather["wind_units"]=="km/h") {
echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=40 && $weather["wind_units"]=="km/h") {
echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=30 && $weather["wind_units"]=="km/h") {
 echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windmmax']>=10 && $weather["wind_units"]=="km/h") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=0 && $weather["wind_units"]=="km/h") {
 echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
//mph
if ($weather['windmmax']>=46 && $weather["wind_units"]=="mph") {
echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=24.8 && $weather["wind_units"]=="mph") {
echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=18.6 && $weather["wind_units"]=="mph") {
echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windmmax']>=6.2 && $weather["wind_units"]=="mph") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=0 && $weather["wind_units"]=="mph") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}

//ms
if ($weather['windmmax']>=46 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=24.8 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=18.6 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windmmax']>=6.2 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=0 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
                        
//kts
if ($weather['windmmax']>=46 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=24.8 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=18.6 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windmmax']>=6.2 && $weather["wind_units"]=="kts") {
 echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
 else if ($weather['windmmax']>=0 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
    //end max month
?></div></div>

<div class=thetrendgapwind>
<?php 
//windrun
echo '<div class=thetrendboxblue>'.$lang['Wind'].' Run';echo '&nbsp;<blue>'.number_format($weather["windrun34"],1).'</blue><smalltempunit2>&nbsp;';if ($weather["wind_units"]=='km/h'){echo 'km';}else echo 'mi';?>
</div></div></div></div>

<div class="maxwind">
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
if($weather["wind_gust_speed_max"]>=31 && $weather["wind_units"]=="m/s"){echo "<red>" .number_format($weather["wind_gust_speed_max"],1)."</red>&nbsp;<smalltempunit2> ".$weather["wind_units"];}
else if($weather["wind_gust_speed_max"]>=18.6 && $weather["wind_units"]=="m/s"){echo "<orange>" .number_format($weather["wind_gust_speed_max"],1)."</orange>&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if($weather["wind_gust_speed_max"]>=6.2 && $weather["wind_units"]=="m/s"){echo "<yellow>" .number_format($weather["wind_gust_speed_max"],1)."</yellow>&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if($weather["wind_gust_speed_max"]>=0 && $weather["wind_units"]=="m/s"){echo "<green>" .number_format($weather["wind_gust_speed_max"],1)."</green>&nbsp;<smalltempunit2>".$weather["wind_units"];}
//kts
if($weather["wind_gust_speed_max"]>=31 && $weather["wind_units"]=="kts"){echo "<red>" .number_format($weather["wind_gust_speed_max"],1)."</red>&nbsp;<smalltempunit2> ".$weather["wind_units"];}
else if($weather["wind_gust_speed_max"]>=18.6 && $weather["wind_units"]=="kts"){echo "<orange>" .number_format($weather["wind_gust_speed_max"],1)."</orange>&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if($weather["wind_gust_speed_max"]>=6.2 && $weather["wind_units"]=="kts"){echo "<yellow>" .number_format($weather["wind_gust_speed_max"],1)."</yellow>&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if($weather["wind_gust_speed_max"]>=0 && $weather["wind_units"]=="kts"){echo "<green>" .number_format($weather["wind_gust_speed_max"],1)."</green>&nbsp;<smalltempunit2>".$weather["wind_units"];}
echo "</smalltempunit2> Time:";echo $weather["winddmaxtime"];
?> 
</div>