<?php require_once('livedata.php');require_once('common.php');?>
<div class="modulecaption2"><?php echo $lang['Solarradiation']?></div>
<div class="button button-dial">
        
        <span class="button-dial-spoke"></span>
        <span class="button-dial-spoke"></span>
        <span class="button-dial-spoke"></span>
        <span class="button-dial-spoke"></span>
        <span class="button-dial-spoke"></span>
        <span class="button-dial-spoke"></span>        
        <div class="button-dial-top"></div>
        <div class="button-dial-label">
          
          <?php 
          if ($weather["solar"]>=500){echo "<orange>".$weather["solar"]."</orange>";}
          else if ($weather["solar"]>=0){echo "<yellow>".$weather["solar"]."</yellow>";}
          ?>
        </div>
      </div>
<div>

<?php //wind unit
echo "<tempman style='margin-top:-48px;padding-left:3px'>";
if($weather["solar"]>500){ echo "<orange>".$tempman."</orange>";}
else if($weather["solar"]>=0){ echo "<yellow>".$tempman."</yellow>";}
echo "</tempman>";
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
if ($weather["solar"]>=800) {echo "<div class=theuvorange>Strong Radiation";}
else if ($weather["solar"]>=300) {echo "<div class=theuvyellow>Moderate";}
else echo "<div class=theuvgreen>Low Radiation";
?>
</div></div></div></div></div>
<div class="maxwind">
<?php  //Max-Min
echo "Max ";
echo "<yellow>".$weather["solardmax"]."</yellow>";
echo " Time:";echo $weather["solardmaxtime"];
?>
</div>
