<?php include('livedata.php');include('common.php');?>
<div class="modulecaption2">UV-Index</div>
<div class="button button-dial">       
<div class="button-dial-top"></div>
<realfeel>
<?php 
if ($weather["uv"]>=10) {echo "<purple>".$lang['Extreme Caution']."</purple>";}
else if ($weather["uv"]>=8) {echo "<red>".$lang['Very High Caution']."</red>";}
else if ($weather["uv"]>=6) {echo "<orange>".$lang['High Caution']."</orange>";}
else if ($weather["uv"]>=3) {echo "<yellow>".$lang['Moderate Caution']."</yellow>";}
else if ($weather["uv"]>=0 ) {echo "<green>".$lang['Low Caution']."</green>";}
?>
</realfeel>
<div class="button-dial-label">          
          <?php 
          if ($weather["uv"]>=10){echo "<purple>".$weather["uv"]."</purple>";}
          else if ($weather["uv"]>=8){echo "<red>".$weather["uv"]."</red>";}
          else if ($weather["uv"]>=6){echo "<orange>".$weather["uv"]."</orange>";}
          else if ($weather["uv"]>=3){echo "<yellow>".$weather["uv"]."</yellow>";}
          else if ($weather["uv"]>=0){echo "<green>".$weather["uv"]."</green>";}
          ?>
</div></div><div>

<?php //uv unit
echo "<uvicon>";
if($weather["uv"]>10){ echo "<purple>".$uvicon."</purple>";}
else if($weather["uv"]>=8){ echo "<red>".$uvicon."</red>";}
else if($weather["uv"]>=6){ echo "<orange>".$uvicon."</orange>";}
else if($weather["uv"]>=3){ echo "<yellow>".$uvicon."</yellow>";}
else if($weather["uv"]>=0){ echo "<green>".$uvicon."</green>";}
echo "</uvicon>";
?>
</div></div></div></div></div>

<div class="heatcircle"><div class="heatcircle-content">
<?php  //solar
echo "<valuetextheading1>&nbsp;&nbsp;".$lang['Solarradiation']." </valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c >".$weather["solar"]."<smalltempunit2> &nbsp;wm/2";
?><smalltempunit2></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1>&nbsp;Luminance Lux</valuetextheading1>
<?php //lux
echo "<div class=tempmodulehome0-5c>". $weather["lux"]."<smalltempunit2> &nbsp;Lux";
?>
</smalltempunit2></div></div>

<div class="heatcirclerain1" ><div class="heatcircle-content">
<div class="rainrateextra">
<valuetextheading1 style="margin-left:-22px;font-size:8.5px">
<?php // weather34 simple css avg wind speed scale 
if ($weather['uv']>=10 ){echo "0 1  2  3  4  5  6  7  8  9  <purple>10+</purple> ";}
else if ($weather['uv']>=9 ){echo "0 1  2  3  4  5  6  7  8   <red>9</red>  10+ ";}
else if ($weather['uv']>=8 ){echo "0 1  2  3  4  5  6  7  <red>8</red>  9  10+ ";}
else if ($weather['uv']>=7 ){echo "0 1  2  3  4  5  6  <orange>7</orange>  8  9  10+ ";}
else if ($weather['uv']>=6 ){echo "0 1  2  3  4  5  <orange>6</orange>  7  8  9  10+ ";}
else if ($weather['uv']>=5 ){echo "0 1  2  3  4  <yellow>5</yellow>  6  7  8  9  10+ ";}
else if ($weather['uv']>=4 ){echo "0 1  2  3  <yellow>4</yellow>  5  6  7  8  9  10+ ";}
else if ($weather['uv']>=3 ){echo "0 1  2  <yellow>3</yellow>  4  5  6  7  8  9  10+ ";}
else if ($weather['uv']>=2 ){echo "0 1  <green>2</green>  3  4  5  6  7  8  9  10+ ";}
else if ($weather['uv']>=1 ){echo "0 <green>1</green>  2  3  4  5  6  7  8  9  10+ ";}
else if ($weather['uv']>=0 ){echo "<green>0</green> 1  2  3  4  5  6  7  8  9  10+ ";}

echo "<smalltempunit2>UVI</smalltempunit2>";
?></smalltempunit2>
</valuetextheading1>
<div class=rainratebar>
<div class="weather34ratebar" 
style="width:
<?php echo $weather['uv']*8.75;?>px;
background:
<?php 
if ($weather['uv']>=10 ){echo ' #8680bc';}
elseif ($weather['uv']>=8 ){echo '#e64b24';}
elseif ($weather['uv']>=6 ){echo '#d87040';}
elseif ($weather['uv']>=3 ){echo '#e6a241';}
elseif ($weather['uv']>0 ){echo '#9bbc2f';}
?>;">
</div></div>

<div class=thetrendgapwind>
<?php 
if ($weather["solar"]>=700) {echo "<div class=theuvred style='width:150px'><orange>".$solaricon.'</orange>'.$lang['Good-solar'] .'';}
else if ($weather["solar"]>300) {echo "<div class=theuvyellow style='width:150px'><orange>".$solaricon.'</orange>'.$lang['Moderate-solar'].'';}
else if ($weather["solar"]>0) {echo "<div class=theuvyellow style='width:150px'><yellow>".$solaricon.'</yellow>'.$lang['Low-solar'].'';}
else if ($weather["solar"]==0) {echo "<div class=theuvgreen style='width:150px'><grey>".$solaricon.'</grey>'.$lang['Low-solar'].'';}
?>
</div></div>

<div class="weather-icon-identity-wind">
<?php //uv icon
if($weather["uv"]>=8){ echo "<red>".$weather34_sun_icon."</red>";}
else if($weather["uv"]>=6){ echo "<orange>".$weather34_sun_icon."</orange>";}
else if($weather["uv"]>0){ echo "<yellow>".$weather34_sun_icon."</yellow>";}
else if($weather["uv"]==0){ echo "<grey>".$weather34_sun_icon."</grey>";}
?>
</div></div></div>

<div class="maxwind2">
<?php  //Max-Min
echo "Max ";
if ($weather["uvdmax"]>=10){echo "<purple>".$weather["uvdmax"]."</purple>";}
else if ($weather["uvdmax"]>=8){echo "<red>".$weather["uvdmax"]."</red>";}
else if ($weather["uvdmax"]>=6){echo "<orange>".$weather["uvdmax"]."</orange>";}
else if ($weather["uvdmax"]>=3){echo "<yellow>".$weather["uvdmax"]."</yellow>";}
else if ($weather["uvdmax"]>=0){echo "<green>".$weather["uvdmax"]."</green>";}
echo "<span style='position:relative;top:1px'> ".$maxclock." </span>";echo $weather["uvdmaxtime"];
?></div>