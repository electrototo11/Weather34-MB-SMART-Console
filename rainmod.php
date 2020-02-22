<?php include('livedata.php');include('common.php');date_default_timezone_set($TZ);$raintimeago=$originalDate124;$seconds_ago = (time() - strtotime($raintimeago));?>
<div class=modulecaptionrainrate>
<?php
// *rainfall hours or minutes ago if within last 24 hours
// *rain yesterday if greater than 0 is displayed if no rain last 24 hours 
if ($seconds_ago >= 86400) {
// rain last 24hr is displayed 
echo $lang['Last-Twenty-Four-Hour'].'&nbsp;<blue>'.$weather["rain_24hrs"]. '</blue>&nbsp;<smalltempunit2>'.$weather["rain_units"].'</smalltempunit2>';}
// weather34 sez lets get rainfall hours or minutes ago if within last 24 hours
else if ($seconds_ago >= 7200) {   
  echo 'Rainfall &nbsp;<blue>'.intval($seconds_ago / 3600) .'</blue>&nbsp; Hours Ago'; }
else if ($seconds_ago >= 3600) {
  echo 'Rainfall &nbsp;<blue>'.intval($seconds_ago / 3600) .'</blue>&nbsp; Hour Ago'; }
else if ($seconds_ago > 60) {
  echo 'Rainfall &nbsp;<blue>'.intval($seconds_ago / 60) .'</blue>&nbsp; Mins Ago'; }
else if ($seconds_ago <= 60) {
  echo 'Rainfall &nbsp;<blue>'.intval($seconds_ago / 3600) .'</blue>&nbsp; Min Ago'; }
?>
</div>
<div class="modulecaptionrain"><?php echo $lang['Rainfall']?></div>

<div class="tempcontainer" style="margin-left:40px;margin-right:35px;">
<div class="weather34i-rairate-bar">
<div id="raincontainer">
<div id="weather34rainbeaker">
<div id="weather34rainwater" style="height:<?php if ($weather["rain_units"] =='mm' && $weather["rain_today"]){echo $weather["rain_today"]*2.5+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_today"]){echo $weather["rain_today"]*25.4*2.5;}?>px;">      
</div></div></div></div> 

<?php //if rain last hour show rain umbrella icon
echo "<umbrella>";if($weather["rain_lasthour"]>0){ echo "<blue>".$umbrella."</blue>";}echo "</umbrella>";?>

<div class="raincontainer1">
<?php if ($weather["rain_units"] =='in'){	echo '<div class=raintoday1>'.number_format($weather["rain_today"],2);}
else if ($weather["rain_units"] =='mm' && $weather["rain_today"]<10){echo '<div class=raintoday1>'.number_format($weather["rain_today"],2);}
else if ($weather["rain_units"] =='mm'){  echo '<div class=raintoday1>'.number_format($weather["rain_today"],1);}
?></div>
<?php //rain units
if ($weather["rain_units"] =='mm'){echo "<rainunitmm>mm </rainunitmm>";}
if ($weather["rain_units"] =='in'){echo "<rainunitin>in </rainunitin>";}
?></div>

<div class="heatcirclerain"><div class="heatcircle-content">
<?php  //Current Year Total
echo "<valuetextheading1>".date('Y')."<deepblue> ".$lang['Total']."</deepblue></valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome0-5c >".$weather["rain_year"]."&nbsp;
<smalltempunit2>".$weather["rain_units"];
?><smalltempunit2></div></div></div>
<div class="heatcircle2"><div class="heatcircle-content">
<valuetextheading1><?php echo $lang['Month'];?> <deepblue><?php echo $lang['Total']?></deepblue></valuetextheading1>
<?php //Current Month Total
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["rain_month"]."&nbsp;<smalltempunit2>".$weather["rain_units"];?>
</smalltempunit2></div></div></div>

<div class="heatcirclerain1" ><div class="heatcircle-content">
<div class="rainrateextra">
<valuetextheading1><?php echo $lang['Rain']?> Rate <deepblue>per/hr</deepblue></valuetextheading1>
<div class=rainratebar>
<div class="weather34ratebar" style="width:
<?php //weather34 rain rate bar 
if ($weather["rain_rate"]>1.1811 && $weather["rain_units"] =='in'){echo 'background: rgb(58,139,156);
background: linear-gradient(90deg, rgba(58,139,156,1) 0%, rgba(58,139,156,1) 57%, rgba(238,95,117,0.03632478632478631) 100%);';}
if ($weather["rain_rate"]>30 && $weather["rain_units"] =='mm'){echo 'background: rgb(58,139,156);
background: linear-gradient(90deg, rgba(58,139,156,1) 0%, rgba(58,139,156,1) 57%, rgba(238,95,117,0.03632478632478631) 100%);';}  
else if ($weather["rain_units"] =='mm'){echo $weather["rain_rate"]*3;}
else if ($weather["rain_units"] =='in'){echo $weather["rain_rate"]*80;}?>px;">
<rainratevalue>
<?php echo $weather["rain_rate"]."&nbsp;<smalltempunit2>".$weather["rain_units"]."</smalltempunit2>";?></rainratevalue>
</div></div>

<?php //rain id
if ($weather["rain_lasthour"]==0) {echo '<div class="weather-rain-icon-identity">'.$weather34_rain_icon;echo '</div>';}?>
</div>

<?php //weather34 clean notifications 
//offline
if(file_exists($livedata)&&time()- filemtime($livedata)>300){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$wirelessoffline.'
    </div>
    <div class="weather34alert-body">
      <p>Weather Station</p>
      <valuealertorange>Offline</alertunit>
    </div>
  </div>';}   
    
//snowfall
else if ($weather["temp_units"]=='C' &&  $weather["rain"]>0 && $weather["temp"]<0){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$snowalert.'
      </div>
      <div class="weather34alert-body">
        <p>Alert</p>
        <valuealertcold>Snow/Sleet</valuealertwarm></alertunit>
      </div>
    </div>';}
//F
  else if ($weather["temp_units"]=='F' &&  $weather["rain"]>0 && $weather["temp"]<32){echo '
      <div class="weather34alert" id="weather34message">
        <div class="weather34alert-icon">
          '.$snowalert.'
        </div>
        <div class="weather34alert-body">
          <p>Alert</p>
          <valuealertcold>Snow/Sleet</valuealertwarm></alertunit>
        </div>
      </div>';}

//windchill
else if ($weather["temp_units"]=='C' && $weather["windchill"]<0){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$snowalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Windchill '.$snowflakesvg.'</p>
      <valuealertcold>'.$weather["windchill"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
    </div>
  </div>';}

  else if ($weather["temp_units"]=='F' && $weather["windchill"]<32){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$snowalert.'
      </div>
      <div class="weather34alert-body">
        <p>Alert Windchill '.$snowflakesvg.'</p>
        <valuealertcold>'.$weather["windchill"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
      </div>
    </div>';}

//low dewpoint
else if ($weather["temp_units"]=='C' && $weather["dewpoint"]<=1 ){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Alert Dewpoint '.$snowflakesvg.'</p>
        <valuealertcold>'.$weather["dewpoint"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
      </div>
    </div>';}

  //F
else if ($weather["temp_units"]=='F' && $weather["dewpoint"]<=33.8 ){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Dewpoint '.$snowflakesvg.'</p>
      <valuealertcold>'.$weather["dewpoint"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
    </div>
  </div>';}


  //feels like cold
else if ($weather["temp_units"]=='C' && $weather["realfeel"]<0){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Feels '.$snowflakesvg.'</p>
      <valuealertcold>'.$weather["realfeel"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
    </div>
  </div>';}

  else if ($weather["temp_units"]=='F' && $weather["realfeel"]<32){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Alert Feels '.$snowflakesvg.'</p>
        <valuealertcold>'.$weather["realfeel"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
      </div>
    </div>';}  

 //fog
else if ($weather["temp_units"]=='C' && $weather["temp"]>12 && $weather["temp"]-$weather["dewpoint"]<1){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Fog Alert</p>
        <valuealertcold>Fog/Mist</valuealertwarm></alertunit>
      </div>
    </div>';}

//cold temp
else if ($weather["temp_units"]=='C' && $weather["temp"]<2){echo '
<div class="weather34alert" id="weather34message">
  <div class="weather34alert-icon">
    '.$coldalert.'
  </div>
  <div class="weather34alert-body">
    <p>Alert Temperature '.$snowflakesvg.'</p>
    <valuealertcold>'.$weather["temp"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
  </div>
</div>';}

//F
else if ($weather["temp_units"]=='F' && $weather["temp"]<35){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Temperature '.$snowflakesvg.'</p>
      <valuealertcold>'.$weather["temp"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
    </div>
  </div>';}


  else if ($weather["temp_units"]=='C' && $weather["barometer_trend"]<=-1.2 ){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Pressure Falling '.$heatindexalert8.'</p>
        <valuealertcold>Rapidly</valuealertcold></alertunit>
      </div>
    </div>';}


    else if ($weather["temp_units"]=='F' && $weather["barometer_trend"]<=-0.04 ){echo '
      <div class="weather34alert" id="weather34message">
        <div class="weather34alert-icon">
          '.$coldalert.'
        </div>
        <div class="weather34alert-body">
          <p>Pressure Falling '.$heatindexalert8.'</p>
          <valuealertcold>Rapidly</valuealertcold></alertunit>
        </div>
      </div>';}

//heat index >30 
else if ($weather["temp_units"]=='C' && $weather["heat_index"]>37){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Heat Index '.$heatindexalert8.'</p>
      <valuealertwarm>'.$weather["heat_index"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertwarm></alertunit>
    </div>
  </div>';}

//F
  else if ($weather["temp_units"]=='F' && $weather["heat_index"]>100){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$warmalert.'
      </div>
      <div class="weather34alert-body">
        <p>Alert Heat Index '.$heatindexalert8.'</p>
        <valuealertwarm>'.$weather["heat_index"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertwarm></alertunit>
      </div>
    </div>';}


//high temperature
else if ($weather["temp_units"]=='C' && $weather["temp"]>30){echo '
<div class="weather34alert" id="weather34message">
  <div class="weather34alert-icon">
    '.$warmalert.'
  </div>
  <div class="weather34alert-body">
    <p>Alert Temperature '.$heatindexalert8.'</p>
    <valuealertwarm>'.$weather["temp"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertwarm></alertunit>
  </div>
</div>';}

//F
else if ($weather["temp_units"]=='F' && $weather["temp"]>90){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Temperature '.$heatindexalert8.'</p>
      <valuealertwarm>'.$weather["temp"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertwarm></alertunit>
    </div>
  </div>';}

//rainfall
else if ($weather["rain_units"]=='mm' && $weather["rain_rate"]>20){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Flooding Possible</p>
        <valuealertcold>'.$weather["rain_rate"].'<alertunit>'.$weather["rain_units"].' per/hr</valuealertcold></alertunit>
      </div>
    </div>';}

  //inches
else if ($weather["rain_units"]=='in' && $weather["rain_rate"]>0.7){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Flooding Possible</p>
      <valuealertcold>'.$weather["rain_rate"].'<alertunit>'.$weather["rain_units"].' per/hr</valuealertcold></alertunit>
    </div>
  </div>';} 

//Wind Gust Speed above 60kmh or 37mph 
else if ($weather["wind_units"]=='km/h' && $weather["wind_speed_max"]>60){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gale Force</p>
      <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
    </div>
  </div>';} 

//mph
  else if ($weather["wind_units"]=='mph' && $weather["wind_speed_max"]>37){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$warmalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gale Force</p>
        <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
      </div>
    </div>';} 

 //kts
 else if ($weather["wind_units"]=='kts' && $weather["wind_speed_max"]>32){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gale Force</p>
      <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
    </div>
  </div>';} 
  
  
  //ms
  else if ($weather["wind_units"]=='m/s' && $weather["wind_speed_max"]>16.6){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$warmalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gale Force</p>
        <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
      </div>
    </div>';} 



 //Wind Gust Speed above 55kmh or 34mph 
else if ($weather["wind_units"]=='km/h' && $weather["wind_speed_max"]>55){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Strong Winds</p>
      <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
    </div>
  </div>';}  

//mph
  else if ($weather["wind_units"]=='mph' && $weather["wind_speed_max"]>34){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$warmalert.'
      </div>
      <div class="weather34alert-body">
        <p>Strong Winds</p>
        <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
      </div>
    </div>';}  


 //kts
 else if ($weather["wind_units"]=='kts' && $weather["wind_speed_max"]>29.6){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Strong Winds</p>
      <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
    </div>
  </div>';}    


  //ms
 else if ($weather["wind_units"]=='m/s' && $weather["wind_speed_max"]>15.2){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Strong Winds</p>
      <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
    </div>
  </div>';}  




//MAX 10 MIN Wind Gust Speed above 45kmh 
else if ($weather["wind_units"]=='km/h' && $weather["wind_speed_max"]>45){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gusty Winds</p>
      <valuealertcold>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
    </div>
  </div>';} 


//mph
  else if ($weather["wind_units"]=='mph' && $weather["wind_speed_max"]>27.9){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gusty Winds</p>
        <valuealertcold>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
      </div>
    </div>';} 


 //kts
 else if ($weather["wind_units"]=='kts' && $weather["wind_speed_max"]>24.2){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gusty Winds</p>
      <valuealertcold>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
    </div>
  </div>';}    


  //ms
 else if ($weather["wind_units"]=='m/s' && $weather["wind_speed_max"]>12.5){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gusty Winds</p>
      <valuealertcold>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
    </div>
  </div>';}    




//Wind Gust Speed above 50kmh or 31mph 
  else if ($weather["wind_units"]=='km/h' && $weather["wind_gust_speed"]>50){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Strong Winds</p>
        <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
      </div>
    </div>';} 

   //mph
    else if ($weather["wind_units"]=='mph' && $weather["wind_gust_speed"]>31){echo '
      <div class="weather34alert" id="weather34message">
        <div class="weather34alert-icon">
          '.$coldalert.'
        </div>
        <div class="weather34alert-body">
          <p>Strong Winds</p>
          <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
        </div>
      </div>';}  

    //ms
      else if ($weather["wind_units"]=='m/s' && $weather["wind_gust_speed"]>13){echo '
        <div class="weather34alert" id="weather34message">
          <div class="weather34alert-icon">
            '.$coldalert.'
          </div>
          <div class="weather34alert-body">
            <p>Strong Winds</p>
            <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
          </div>
        </div>';}   

    //kts
        else if ($weather["wind_units"]=='kts' && $weather["wind_gust_speed"]>26){echo '
          <div class="weather34alert" id="weather34message">
            <div class="weather34alert-icon">
              '.$coldalert.'
            </div>
            <div class="weather34alert-body">
              <p>Strong Winds</p>
              <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
            </div>
          </div>';}   

//Wind Speed 10 min Average 25kmh or 15mph 
else if ($weather["wind_units"]=='km/h' && $weather["wind_speed"]>25){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gusty Conditions</p>
      <valuealertcold>40-50+ <alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
    </div>
  </div>';} 
//mph
  else if ($weather["wind_units"]=='mph' && $weather["wind_speed"]>15){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gusty Conditions</p>
        <valuealertcold>30-40+ <alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
      </div>
    </div>';} 

    //kts
  else if ($weather["wind_units"]=='kts' && $weather["wind_speed"]>13){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gusty Conditions</p>
        <valuealertcold>16-26+ <alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
      </div>
    </div>';} 

    //ms
  else if ($weather["wind_units"]=='m/s' && $weather["wind_speed"]>6.9){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gusty Conditions</p>
        <valuealertcold>11-13+ <alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
      </div>
    </div>';} 

?>
<script> //fire the weather34 notification
function closeweather34alert(el) { el.addClass('weather34alert-hide');}
$('.js-messageClose').on('click', function(e) { closeweather34alert($(this).closest('.weather34alert'));});
$(document).ready(function() {  setTimeout(function() { closeweather34alert($('#weather34message')); }, 10000);});
</script>
