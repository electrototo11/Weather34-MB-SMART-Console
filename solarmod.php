<?php require_once('livedata.php');require_once('common.php');?>
<div class="modulecaption2"><?php echo $lang['Solarradiation']?></div>
<div class="button button-dial">    
<div class="button-dial-top"></div>
<div class="button-dial-label">
          
          <?php 
          if ($weather["solar"]>=500){echo "<orange>".$weather["solar"]."</orange>";}
          else if ($weather["solar"]>=0){echo "<yellow>".$weather["solar"]."</yellow>";}
          ?>
        </div>
      </div>
<div>

<?php //unit
echo "<unitindicator>wm/2</unitindicator>";?>


<?php //solar icon
echo "<solaricon>";
if($weather["solar"]>500){ echo "<orange>".$solarpanelicon."</orange>";}
else if($weather["solar"]>=0){ echo "<yellow>".$solarpanelicon."</yellow>";}
echo "</solaricon>";
?>
</div></div></div></div></div>

</div></div></div></div></div>

<div class="heatcircle"><div class="heatcircle-content">
<?php  //solar
echo "<valuetextheading1>".date('Y')." Max <blue>".$weather["solarymaxtime"]."</blue></valuetextheading1><br>";
if ($weather["solarymax"]>=500){
    echo "
<div class=tempconverter1><div class=tempmodulehome20-25c >".$weather["solarymax"]."<smalltempunit2>&nbsp;wm/2";
}
else if ($weather["solarymax"]>0){
    echo "
<div class=tempconverter1><div class=tempmodulehome10-15c >".$weather["solarymax"]."<smalltempunit2>&nbsp;wm/2";
}
else if ($weather["solarymax"]>=0){
    echo "
<div class=tempconverter1><div class=tempmodulehome0-5c >".$weather["solarymax"]."<smalltempunit2>&nbsp;wm/2";
}
?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1>&nbsp;Luminance Lux</valuetextheading1>
<?php //lux
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["lux"]."<smalltempunit2> &nbsp;Lux";
?>
</smalltempunit2></div></div></div>

<div class="heatcircleindoor"><div class="heatcircle-content">&nbsp;&nbsp;&nbsp;<?php echo $lang['Month']?> <orange>Max</orange> <deepblue><?php echo $weather["solarmmaxtime"]?> </deepblue></valuetextheading1>
<?php //SOLAR max year
    echo "<div class=tempconverter1><div class=tempmodulehome10-15c>". $weather["solarmmax"]."<smalltempunit2> &nbsp;wm/2</smalltempunit2>";
?>
</div></div></div><div>


<div class=thetrendgap>
<?php 
if ($weather["solar"]>=700) {echo "<div class=theuvred><orange>".$solaricon.'</orange> Strong Sun Radiation';}
else if ($weather["solar"]>300) {echo "<div class=theuvyellow><yellow>".$solaricon.'</yellow> Moderate Radiation';}
else if ($weather["solar"]>0) {echo "<div class=theuvyellow><yellow>".$solaricon.'</yellow> Low Radiation';}
else if ($weather["solar"]==0) {echo "<div class=theuvgreen><grey>".$solaricon.'</grey> Low Radiation';}
?>
</div></div></div>

<div class="weather-tempicon-identity">
<?php //uv icon
if($$weather["solar"]>=700){ echo "<orange>".$weather34_sun_icon."</orange>";}
else if($weather["solar"]>0){ echo "<yellow>".$weather34_sun_icon."</yellow>";}
else if($weather["solar"]==0){ echo "<grey>".$weather34_sun_icon."</grey>";}
?>
</div>
</div></div>

<div class="maxwind">
<?php  //Max
echo "Max ";
if ($weather["solardmax"]>800){echo "<orange>".$weather["solardmax"]."</orange>";}
else if ($weather["solardmax"]>0){echo "<yellow>".$weather["solardmax"]."</yellow>";}
echo " Time:";echo $weather["solardmaxtime"];
?>
</div>
