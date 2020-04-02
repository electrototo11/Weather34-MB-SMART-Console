<?php 
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-20                                       #
	#	CREATED FOR HOMEWEATHERSTATION STANDALONE       	 										   #
	#   https://weather34.com/homeweatherstation/index.html 										   # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	WEATHER34 HARDWARE: 02 April 2020                                                  			   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
//original weather34 script original css/svg/php by weather34 2015-2020 clearly marked as original by weather34//
include('livedata.php'); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather Station Hardware Information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@font-face{font-family:weathertext2;src:url(fonts/verbatim-regular.woff) format("woff"),url(fonts/verbatim-regular.woff2) format("woff2"),url(fonts/verbatim-regular.ttf) format("truetype")}
html,body{font-size:13px;font-family: "weathertext2", Helvetica, Arial, sans-serif;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;}
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-gap: 5px;
  align-items: stretch;
  color:#f5f7fc;
  overflow:hidden
  
  }
.grid > article {
   border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);
  padding:5px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;
  background:0;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  height:280px ;
  overflow:hidden
}
 a{color:#aaa;text-decoration:none;font-size:1.25em} 
.weather34darkbrowser{position:relative;background:0;width:97%;height:30px;margin:auto;margin-top:-5px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:10px;}
.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:10px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 10px 0 auto;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
 
  
 
 blue{color:#01a4b4}orange{color:#009bb4}orange1{position:relative;color:#009bb4;margin:0 auto;text-align:center;margin-left:5%;font-size:1.1rem}green{color:#aaa}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}
.actualt{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:160px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;
align-items:center;justify-content:center;margin-bottom:10px;top:0}
.hardwareimage{position:relative;display:flex;margin:0 auto;margin-top:-0px;}
.hardwareimagewf{position:relative;display:flex;margin:0 auto;margin-top:10px;opacity:.8}
.hardwareimagenano{position:relative;display:flex;margin:0 auto;margin-top:20px;}

.hardwareimageups{position:absolute;display:flex;margin-left:160px;margin-top:-50px;}

.hardwareimageaq{position:relative;display:flex;margin:0 auto;margin-top:10px;
border:solid 2px #4b545c;border-bottom:solid 15px #4b545c;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;padding-right:3px;opacity:.8}
.batterypower{position:absolute;margin-left:103px;top:74px}

icontext{vertical-align:top;position:relative;top:8px }

</style>
<div class="weather34darkbrowser" url="Template | Hardware Info"></div>
  
<main class="grid">
   <article>  
   <div class=actualt>Interface Hardware</div> 
    <?php echo $info?> Interface: Meteobridge <blue><?php echo $mbplatform?></blue><br>
    <?php echo $info?> Meteobridge Uptime: <blue><?php echo convert($nanosduptime)?></blue><br>
    <?php echo $info?> Meteobridge Firmware:<?php echo "<orange>",$weather["swversion"];echo "-",$weather["build"]?></orange><br>

<?php 
if($mbplatform=='Nano'){echo '<img src="images/nano.svg" width="120px"class="hardwareimagenano" alt="Meteobridge NANOSD" title="Meteobridge NANOSD">';}
if($mbplatform=='Pro'){echo '<img src="images/MeteobridgePRO.svg" width="120px"class="hardwareimagenano" alt="Meteobridge Pro" title="Meteobridge Pro>';}
if($mbplatform=='TPlink'){echo '<img src="images/TPLINK.svg" width="120px"class="hardwareimagenano" alt="Meteobridge TP-Link" title="Meteobridge TP-Link">';}
    ?>        
    <div style="position:relative;float:left;margin-left:0;top:35px;font-size:0.8em">
  <?php echo $info?> <a href="https://www.meteobridge.com" title="https://www.meteobridge.com" target="_blank"> <?php echo $chartinfo?> Meteobridge  Information</a>.
 </span></div>  
    
</article> 

<article>  
   <div class=actualt>ICONS UNITS </div> 
    <?php echo $weather34F?> <icontext>Fahrenheit with Wind MPH</icontext><br>
    <?php echo $weather34C?> <icontext>Celsius with Wind KM/H</icontext><br>
    <?php echo $weather34UK?> <icontext>Celsius with Wind MPH</icontext><br>
    <?php echo $weather34MS?> <icontext>Celsius with Wind M/S</icontext><br>
    <?php echo $weather34KTS?> <icontext>Celsius with Wind KTS</icontext><br>  <br> 
     
</article> 



<article>  
   <div class=actualt>ICONS Others</div>
   <?php echo $weatherforecast?> <icontext>Forecast 5 Day</icontext><br>
    <?php echo $weatherforecast2?> <icontext>Forecast 5 Day Text Summary</icontext><br>
    <?php echo $weather34TV?> <icontext>SMART TV Layout</icontext>
    <br><br>
    <?php echo $charts?> <icontext>Day/Month/Year Charts</icontext><br>
    <?php echo $almanacicon?> <icontext>Alamanac Data </icontext><br>
         
    

</article> 

<article style="height:40px;">  
  <?php echo $info?> <a href="https://weather34.com/homeweatherstation" title="weather34.com" target="_blank" style="font-size:10px;">CSS/SVG/PHP scripts were developed by weather34.com  for use in the weather34 template &copy; 2015-<?php echo date('Y');?>
  </a></div>
  
  
  
  </article>

</main>