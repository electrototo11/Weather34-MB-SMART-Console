<?php include('livedata.php');include('common.php');?>
<div class="almanac-word"><?php echo $lang['Barometer'];?></div>
<br><br>
<div class="almanac"><div class="almanac-content">
<?php  //month max
echo "<valuetextheading1>".$lang['Month']." Max <deepblue>".$weather["thb0seapressmonthmaxtime"]."</deepblue></valuetextheading1><br>";   
echo "<div class=tempmodulehome0-5c>".$weather["thb0seapressmmax"]."<smalltempunit2>".$weather["barometer_units"] ;
?><smalltempunit2></div></div>

<div class="almanac2"><div class="almanac-content">
<?php  //max year
echo "<valuetextheading1>".date('Y')." Max <deepblue>".$weather["thb0seapressyearmaxtime"]."</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>".$weather["thb0seapressymax"]."<smalltempunit2>".$weather["barometer_units"] ;
 ?>
</smalltempunit2></div></div>

<div class="almanac3"><div class="almanac-content">
<?php  //month min
echo "<valuetextheading1>".$lang['Month']." Min <deepblue>".$weather["thb0seapressmonthmintime"]."</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>".$weather["thb0seapressmmin"]."<smalltempunit2>".$weather["barometer_units"] ;
?><smalltempunit2></div></div>

<div class="almanac4"><div class="almanac-content">
<?php  //min Year
echo "<valuetextheading1>".date('Y')." Min <deepblue>".$weather["thb0seapressyearmintime"]."</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>".$weather["thb0seapressymin"]."<smalltempunit2>".$weather["barometer_units"] ;
?><smalltempunit2></div></div>

<div class="almanac5"><div class="almanac-content">
<?php  //alltime max
echo "<valuetextheading1>Record Max <deepblue>".$weather["thb0seapressamaxtime"]."</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>".$weather["thb0seapressamax"]."<smalltempunit2>".$weather["barometer_units"] ;
?><smalltempunit2></div></div>

<div class="almanac6"><div class="almanac-content">
<?php  //alltime min
echo "<valuetextheading1>Record Min <deepblue>".$weather["thb0seapressamintime"]."</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>".$weather["thb0seapressamin"]."<smalltempunit2>".$weather["barometer_units"] ;
?><smalltempunit2></div></div>

<div class="weather-tempicon-identity" style="margin-top:38px;">   
<?php echo "<icon-0-5>".$weather34_pressure_icon."</icon-0-5>"; ?></div>