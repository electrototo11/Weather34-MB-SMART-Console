<?php include('settings.php');?>
<?php
// weather34 weather underground  curl based
$url4c = 'https://api.weather.com/v3/wx/forecast/daily/5day?geocode='.$lat.','.$lon.'&language='.$wulanguage.'&format=json&units='.$wuapiunit.'&apiKey='.$wuapikey ;
$ch4c = curl_init($url4c);
$filename4c = 'jsondata/wuforecast.txt';
$complete_save_loc4c = $filename4c;
$fp4c = fopen($complete_save_loc4c, 'wb');
curl_setopt($ch4c, CURLOPT_FILE, $fp4c);
curl_setopt($ch4c, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch4c, CURLOPT_HEADER, 0);
curl_exec($ch4c);
curl_close($ch4c);
fclose($fp4c);?>


<?php // weather34 purple air quality  curl based
if($purpleairhardware=='yes'){
$url4 = 'https://www.purpleair.com/json?show='.$purpleairID.'';
$ch4 = curl_init($url4);
$filename4 = 'jsondata/purpleair.txt';
$complete_save_loc4 = $filename4;
$fp4 = fopen($complete_save_loc4, 'wb');
curl_setopt($ch4, CURLOPT_FILE, $fp4);
curl_setopt($ch4, CURLOPT_HEADER, 0);
curl_exec($ch4);
curl_close($ch4);
fclose($fp4);}
?>
