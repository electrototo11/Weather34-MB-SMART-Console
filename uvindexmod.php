<?php include('livedata.php');?>
<div class="modulecaption2">UV-Index</div>
<div class="button button-dial">       
<div class="button-dial-top"></div>
<realfeel>
<?php 
if ($weather["uv"]>=10) {echo "<purple>".$uviclear.'Extreme</purple>';}
else if ($weather["uv"]>=8) {echo "<red>".$uviclear.'Very High</red>';}
else if ($weather["uv"]>=6) {echo "<orange>".$uviclear.'High</orange>';}
else if ($weather["uv"]>=3) {echo "<yellow>".$uviclear.'Moderate</yellow>';}
else if ($weather["uv"]>=0 ) {echo "<green>".$uviclear.'No Caution</green>';}
?>
</realfeel>
<div class="button-dial-label">          
          <?php 
          if ($weather["uv"]>=10){echo "<purple>".$weather["uv"]."</purple>";}
          else if ($weather["uv"]>=8){echo "<red>".$weather["uv"]."</red>";}
          else if ($weather["uv"]>=5){echo "<orange>".$weather["uv"]."</orange>";}
          else if ($weather["uv"]>=3){echo "<yellow>".$weather["uv"]."</yellow>";}
          else if ($weather["uv"]>=0){echo "<green>".$weather["uv"]."</green>";}
          ?>
</div></div><div>

<?php //wind unit
echo "<tempman style='margin-top:-51px;padding-left:4px'>";
if($weather["uv"]>10){ echo "<purple>".$uvicon."</purple>";}
else if($weather["uv"]>8){ echo "<darkred>".$uvicon."</darkred>";}
else if($weather["uv"]>5){ echo "<orange>".$uvicon."</orange>";}
else if($weather["uv"]>3){ echo "<yellow>".$uvicon."</yellow>";}
else if($weather["uv"]>0){ echo "<green>".$uvicon."</green>";}
echo "</tempman>";
?>
</div></div></div></div></div>

</div></div></div></div></div>

<div class="heatcircle"><div class="heatcircle-content">
<?php  //solar
echo "<valuetextheading1>&nbsp;&nbsp;Solar Radiation </valuetextheading1><br>";
if ($weather["solar"]>800){
    echo "
<div class=tempconverter1><div class=tempmodulehome30-35c >".$weather["solar"]."<smalltempunit2> &nbsp;wm/2";
}
else if ($weather["solar"]>=500){
    echo "
<div class=tempconverter1><div class=tempmodulehome20-25c >".$weather["solar"]."<smalltempunit2> &nbsp;wm/2";
}
else if ($weather["solar"]>0){
    echo "
<div class=tempconverter1><div class=tempmodulehome10-15c >".$weather["solar"]."<smalltempunit2> &nbsp;wm/2";
}
else if ($weather["solar"]>=0){
    echo "
<div class=tempconverter1><div class=tempmodulehome0-5c >".$weather["solar"]."<smalltempunit2> &nbsp;wm/2";
}
?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1>&nbsp;Luminance Lux</valuetextheading1>
<?php //lux
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["lux"]."<smalltempunit2> &nbsp;Lux";
?>
</smalltempunit2></div></div></div>

<div class="heatcircleindoor"><div class="heatcircle-content">&nbsp;&nbsp;&nbsp;<?php echo date('Y')?> <orange>Max</orange> UVI <deepblue><?php echo $weather["uvymaxtime"]?> </deepblue></valuetextheading1>
<?php //uv max year
if ($weather["uvymax"]>=10) {
    echo "<div class=tempconverter1><div class=tempmodulehome-50-10c>". $weather["uvymax"]."<smalltempunit2> &nbsp;UVI</smalltempunit2>";
}
else if ($weather["uvymax"]>=8) {
    echo "<div class=tempconverter1><div class=tempmodulehome30-35c>". $weather["uvymax"]."<smalltempunit2> &nbsp;UVI</smalltempunit2>";
}
else if ($weather["uvymax"]>=5) {
    echo "<div class=tempconverter1><div class=tempmodulehome20-25c>". $weather["uvymax"]."<smalltempunit2> &nbsp;UVI</smalltempunit2>";
}
else if ($weather["uvymax"]>=3) {
    echo "<div class=tempconverter1><div class=tempmodulehome10-15c>". $weather["uvymax"]."<smalltempunit2> &nbsp;UVI</smalltempunit2>";
}
else if ($weather["uvymax"]>=0) {
    echo "<div class=tempconverter1><div class=tempmodulehome5-10c>". $weather["uvymax"]."<smalltempunit2> &nbsp;UVI</smalltempunit2>";
}
?>
</div></div></div><div>

<div class=thetrendgap>
<?php 
if ($weather["uv"]>=700) {echo "<div class=theuvred>".$uviclear.'Strong Sun Radiation';}
else if ($weather["solar"]>=300) {echo "<div class=theuvyellow>".$uviclear.'Moderate Radiation';}
else if ($weather["solar"]>=0) {echo "<div class=theuvgreen>Low Radiation";}
?>
</div></div></div></div></div>

<div class="maxwind">
<?php  //Max
echo "Max ";
if ($weather["uvdmax"]>=10){echo "<purple>".$weather["uvdmax"]."</purple>";}
else if ($weather["uvdmax"]>=8){echo "<red>".$weather["uvdmax"]."</red>";}
else if ($weather["uvdmax"]>=5){echo "<orange>".$weather["uvdmax"]."</orange>";}
else if ($weather["uvdmax"]>=3){echo "<yellow>".$weather["uvdmax"]."</yellow>";}
else if ($weather["uvdmax"]>=0){echo "<green>".$weather["uvdmax"]."</green>";}
echo " Time:";echo $weather["uvdmaxtime"];
?>
</div>