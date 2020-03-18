<?php include('livedata.php');include('common.php');?>
<div class="almanac-word"><?php echo $lang['Solarradiation'];?></div>
<br><br>
<div class="almanac"><div class="almanac-content">
<?php  //month max
echo "<valuetextheading1>".date('F')." Max <deepblue>".$weather["solarmmaxtime"]."</deepblue></valuetextheading1><br>";   
echo "<div class=tempmodulehome0-5c>".$weather["solarmmax"]	."<smalltempunit2>wm/2";
?><smalltempunit2></div></div>

<div class="almanac2"><div class="almanac-content">
<?php  //max year
echo "<valuetextheading1>".date('Y')." Max <deepblue>".$weather["solarymaxtime"]."</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>".$weather["solarymax"]."<smalltempunit2>wm/2";
 ?></smalltempunit2></div></div>

<div class="almanac3"><div class="almanac-content">
<?php  //month min
echo "<valuetextheading1>Yesterday Max <deepblue>".$weather["solarydmaxtime"]."</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>".$weather["solarydmax"]."<smalltempunit2>wm/2";
?><smalltempunit2></div></div>

<div class="almanac4"><div class="almanac-content">
<?php  //min Year
echo "<valuetextheading1>Record Max <deepblue></deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>N/A<smalltempunit2>";
?><smalltempunit2></div></div>

<div class="weather-tempicon-identity" style="margin-top:78px;height:1.25em">   
<?php echo "<icon-16-20>".$solarpanelicon."</icon-16-20>"; ?></div>