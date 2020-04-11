<?php include_once('livedata.php');
 date_default_timezone_set($TZ);

	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: March 2020 					  	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
	if ($clockformat=='24'){
		$timeformat='H:i';
	}
	if ($clockformat=='12'){
		$timeformat='h:ia';
	}

$result = date_sun_info(time(), $lat, $lon);time(); 
$nextday = time() + 86400; 
$result2 = date_sun_info($nextday,$lat, $lon);

//weather34 sunrise 
$nextrise = $result['sunrise']; $now = time(); 
if ($now > $nextrise) { $nextrise = date($timeformat,$result2['sunrise']);
$nextrisetxt = $lang['Tomorrow']   ;} 
else { $nextrisetxt = $lang['Today'];$nextrise = date($timeformat,$nextrise);} 
//weather34 sunset
$nextset = $result['sunset'];if ($now > $nextset) { $nextset = date($timeformat,$result2['sunset']);
$nextsettxt = $lang['Tomorrow'];}else { $nextsettxt = $lang['Today']; $nextset = date($timeformat,$nextset);} 
//weather34 sunrise firstlight
$nextfirstlight = $result['civil_twilight_begin']; $now = time();if ($now > $nextfirstlight) {$nextfirstlight = date($timeformat,$result2['civil_twilight_begin']); } 
else {$nextfirstlight = date($timeformat,$nextfirstlight);} 
//weather34 sunset last light
$nextlastlight = $result['civil_twilight_end'];if ($now > $nextlastlight) { $nextlastlight = date($timeformat,$result2['civil_twilight_end']);}else {$nextlastlight = date($timeformat,$nextlastlight);}
$firstrise = $result['sunrise']; $secondrise = $result2['sunrise']; $firstset = $result ['sunset'];if ($now < $firstrise) { $time = $firstrise - $now; $hrs = gmdate ('G',$time); $min = gmdate ('i',$time); 
$txt = '&nbsp;'.$lang['Darkness Left'].'';} elseif ($now < $firstset) { $time = $firstset - $now; $hrs = gmdate ('G',$time); $min = gmdate ('i',$time); 
$txt = '&nbsp;'.$lang['Daylight Left'].'';} else { $time = $secondrise - $now; $hrs = gmdate ('G',$time); $min = gmdate ('i',$time); 
$txt = '&nbsp;'.$lang['Darkness Left'].'';}echo "";

//sun position based on https://github.com/KiboOst/php-sunPos

	class sunPos{public function getSunPos(){$date=clone $this->date;$date->setTimezone(new DateTimeZone('UTC'));
	$year=$date->format("Y");$month=$date->format("m");$day=$date->format("d");$hour=$date->format("H");$min=$date->format("i");
	$sunimage=$this->getSunPosition($this->latitude,$this->longitude,$year,$month,$day,$hour,$min);
	$this->elevation= $sunimage[0];$this->azimuth= $sunimage[1];return array('elevation'=> $sunimage[0],'azimuth'=> $sunimage[1]);}
	public function getDayPeriod(){$ts=$this->date->getTimestamp();
	$sun_info=date_sun_info($ts,$this->latitude,$this->longitude);
	$sunrise=date("H:i:s",$sun_info["sunrise"]);$transit=date("H:i:s",$sun_info["transit"]);$sunset=date("H:i:s",$sun_info["sunset"]);
	$this->sunrise=$sunrise;$this->transit=$transit;$this->sunset=$sunset;$isDay=0;$isMorning=0;$isNoon=0;$isAfternoon=0;$isEvening=0;$now=$this->date->format('H:i:s');
	if($now>$sunrise and $now<$sunset)$isDay=1;
	if($isDay==1){if($now<='12:00:00')$isMorning=1;
	if($now>'12:00:00' and $now<'14:00:00')$isNoon=1;if($isMorning==0 and $isNoon==0){$sunrise=new DateTime($sunrise);$transit=new DateTime($transit);
	$sunset=new DateTime($sunset);$nowTime=new DateTime($now);$dayLenght=date_diff($sunset,$sunrise);$dayLenght=$dayLenght->h * 60 + $dayLenght->i;$sunsetDelta=date_diff($sunset,$nowTime);$sunsetDelta=$sunsetDelta->h * 60 + $sunsetDelta->i;$portion=pow($dayLenght / 12,2)/ 40;if($sunsetDelta<$portion)$isEvening=1;
	else $isAfternoon=1;}}$this->isDay=$isDay;$this->isMorning=$isMorning;$this->isNoon=$isNoon;$this->isAfternoon=$isAfternoon;$this->isEvening=$isEvening;}public function isSunny($from=0,$to=0){if(is_null($this->azimuth)){ $sunimage=$this->getSunPos();$this->elevation= $sunimage['elevation'];$this->azimuth= $sunimage['azimuth'];}if($to<$from){if($this->azimuth<$to)$this->azimuth+=360;$to+=360;}if($this->azimuth>$from and $this->azimuth<$to)return true;return false;}public function getSunPosition($lat,$long,$year,$month,$day,$hour,$min){$jd=gregoriantojd($month,$day,$year);$dayfrac=$hour / 24 - .5;$frac=$dayfrac + $min / 60 / 24;$jd=$jd + $frac;$time=($jd - 2451545);$mnlong=(280.460 + 0.9856474 * $time);$mnlong=fmod($mnlong,360);if($mnlong<0)$mnlong=($mnlong + 360);$mnanom=(357.528 + 0.9856003 * $time);$mnanom=fmod($mnanom,360);if($mnanom<0)$mnanom=($mnanom + 360);$mnanom=deg2rad($mnanom);$eclong=($mnlong + 1.915 * sin($mnanom)+ 0.020 * sin(2 * $mnanom));$eclong=fmod($eclong,360);if($eclong<0)$eclong=($eclong + 360);$oblqec=(23.439 - 0.0000004 * $time);$eclong=deg2rad($eclong);$oblqec=deg2rad($oblqec);$num=(cos($oblqec)* sin($eclong));$den=(cos($eclong));$ra=(atan($num / $den));if($den<0)$ra=($ra + pi());if($den>=0&&$num<0)$ra=($ra + 2*pi());$dec=(asin(sin($oblqec)* sin($eclong)));$h=$hour + $min / 60;$gmst=(6.697375 + .0657098242 * $time + $h);$gmst=fmod($gmst,24);if($gmst<0)$gmst=($gmst + 24);$lmst=($gmst + $long / 15);$lmst=fmod($lmst,24);if($lmst<0)$lmst=($lmst + 24);$lmst=deg2rad($lmst * 15);$ha=($lmst - $ra);if($ha<pi())$ha=($ha + 2*pi());if($ha>pi())$ha=($ha - 2*pi());$lat=deg2rad($lat);$el=(asin(sin($dec)* sin($lat)+ cos($dec)* cos($lat)* cos($ha)));$az=(asin(-cos($dec)* sin($ha)/ cos($el)));if((sin($dec)- sin($el)* sin($lat))>00){if(sin($az)<0)$az=($az + 2*pi());}else{$az=(pi()- $az);}$el=rad2deg($el);$az=rad2deg($az);$lat=rad2deg($lat);return array(number_format($el,2),number_format($az,2));}public $latitude=null;public $longitude=null;public $date=null;public $timezone=null;public $elevation=null;public $azimuth=null;public $sunrise=null;public $transit=null;public $sunset=null;public $isDay=null;public $isMorning=null;public $isNoon=null;public $isAfternoon=null;public $isEvening=null;protected $dateFormat='Y-m-d';function __construct($latitude=0,$longitude=0,$timezone=false,$date=false,$time=false){$this->latitude=$latitude;$this->longitude=$longitude;if($timezone){$this->timezone=$timezone;date_default_timezone_set($timezone);}else $this->timezone=date_default_timezone_get();if($date)$this->date=DateTime::createFromFormat($this->dateFormat,$date);else $this->date=new DateTime('NOW',new DateTimeZone($this->timezone));if($time){$var=explode(':',$time);$this->date->setTime($var[0],$var[1]);}$this->getSunPos();$this->getDayPeriod();}}$lati=$lat;$long=$lon;$timezone=$TZ;$_SunPos=new sunPos($lati,$long,$timezone);$azimuth=$_SunPos->azimuth ;$elev=$_SunPos->elevation ;
	
	//use meteobridge daylight with some improvements by Josh(milehighweather)
	$light =$weather["daylight"]; $daylight = ltrim($light, '0'); $dark = 24 - str_replace(':','.',$daylight);$lighthours = substr($daylight, 0, 2); 
	$lightmins = substr($daylight, -2);
	$darkhours = 23 - $lighthours; $darkminutes = 60 - $lightmins;if ($darkminutes<10) $darkminutes= '0' .$darkminutes;
	else $darkminutes=$darkminutes;$thehour=date('H');$theminute=date('i');?>

<style>
.weather34sunclock {
-webkit-transform:rotate(<?php echo ((($thehour*15)+($theminute/3))-86.5);?>deg);
transform:rotate(<?php echo ((($thehour*15)+($theminute/3))-86.5);?>deg);
border:5px solid rgba(255, 255,255,0);
width:110px; 
height:110px;
top:0px;
margin-left:104px;
z-index:10;
}
.weather34sunclock #poscircircle {
top: 50%;
left:calc(52% - 53%);
height:8px;
width:8px;
border:0;
-webkit-border-radius:50%;
border-radius:50%;
background:<?php if ($elev<=0){echo "hsla(4, 40%, 48%,.7)";}else echo "#ec5732"?>;
}
</style>
<div class="modulecaptionsun"><?php echo $lang['Sun'];?></div>
<?php 
$fullday = 720;
function fullcircle ($integer){global $fullday ;$h= (int) date ('H',$integer);$m = (int) date ('i',$integer);
$calc = $m + $h*60; $calc= (float) 0.5 + ($calc / $fullday );
if ($calc > 2.0) { $calc = $calc - 2;}return round ($calc,5);}
$daybegins  = fullcircle ($result['sunrise']);
$endofday   = fullcircle ($result['sunset']);
$sunspotpostion    = fullcircle ($now);
if ($now > $result['sunset'] || $now < $result['sunrise'] ){$sunspot = 'rgba(86,95,103,0)';}
else {$sunspot = 'rgba(255, 112,50,1)';}
?>

<script>
//weather34 complete rework clean up very confusing code of the original by Wim Van de Kuil this code attempts to make it somewhat relative
var c = document.getElementById("weather34sundial");
var weather34sundial = c.getContext("2d");
weather34sundial.width=90;
weather34sundial.imageSmoothingEnabled =false;
weather34sundial.beginPath();
weather34sundial.arc(63, 65, 55, 0, 2 * Math.PI);
weather34sundial.lineWidth = 0;
weather34sundial.strokeStyle = "transparent";
weather34sundial.stroke();
weather34sundial.beginPath();
weather34sundial.arc(63, 65, 55, '<?php echo $daybegins?>' * Math.PI, '<?php echo $endofday?>' * Math.PI);
weather34sundial.lineWidth = 10.5;
weather34sundial.strokeStyle ="#00adbd";
weather34sundial.stroke();
weather34sundial.beginPath();
weather34sundial.arc(63, 65, 55, '<?php echo $sunimage?>'* Math.PI, '<?php echo $sunimage?>' * Math.PI);
weather34sundial.lineWidth = 0;
weather34sundial.strokeStyle = "<?php echo  $sunspot?>";
weather34sundial.stroke();
</script> 

<div class="daylightmoduleposition" > 
<div class="circleborder"></div><div class="circleborder2"></div>
<div class="sundialcontainerdiv2" ><div id="sundialcontainer" class=sundialcontainer >
<canvas id="weather34sundial" class="suncanvasstyle" width="160" height="160"></canvas>
<div class="weather34sunclock"><div id="poscircircle"></div></div></div>
</div></div></div>

<div class="daylight2">&nbsp;<?php echo $hrs."<smallminutes>hrs</smallminutes>:". $min."<smallminutes> min</smallminutes>" ?>
<tdiv class=till2><?php echo $txt?></div></div> 

<div class="sunrise-block"><?php echo $sunuphalf.' '. $lang['Rise'];?> 
<?php echo $nextrisetxt.' (<orange>'.$nextrise.'</orange>)<br>'.$sunuphalf.' '. $lang['Daylight'].' (<deepblue>'.$light.'</deepblue>'.$lang['Hrs'].')';?>
</div>

<div class="sunset-block"><?php echo $sundownhalf.' '.$lang['Set'];?> 
<?php echo $nextsettxt.' (<red>'.$nextset.'</red>)<br>'.$sundownhalf.' '. $lang['Darkness'].' ('.$darkhours,":".$darkminutes.''.$lang['Hrs'].')';?>
</div>

<div class="weather-tempicon-identity" style="margin-top:58px;height:1.15em;margin-left:110px">   
<?php echo "<icon-16-20>".$weather34_sun_icon."</icon-16-20>"; ?></div>

