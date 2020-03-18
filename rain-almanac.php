<?php include('livedata.php');include('common.php');?>
<div class="almanac-word"><?php echo $lang['Rainfall'];?></div>
<br><br>
<div class="almanac"><div class="almanac-content">
<?php  //month 
echo "<valuetextheading1>Total<deepblue> ".date('F Y')."</deepblue> </valuetextheading1><br>";   
echo "<div class=tempmodulehome0-5c>".$weather["rainmmax"]."<smalltempunit2>".$weather["rain_units"];
?><smalltempunit2></div></div>

<div class="almanac2"><div class="almanac-content">
<?php  //yesterday
echo "<valuetextheading1>Yesterday <deepblue>Total</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>".$weather["rainydmax"]."<smalltempunit2>".$weather["rain_units"];
?><smalltempunit2></div></div>

<div class="almanac3"><div class="almanac-content">
<?php  //last month
echo "<valuetextheading1>Total Last Month <deepblue>".date("M ",strtotime("-1 month"))."</deepblue> </valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>".$weather['rainlastmonth']."<smalltempunit2>".$weather["rain_units"];
?><smalltempunit2></div></div>

<div class="almanac4"><div class="almanac-content">
<?php  // year
echo "<valuetextheading1>Total<deepblue> ".date('Y')."  </deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>".$weather["rainymax"]."<smalltempunit2>".$weather["rain_units"];
 ?>
</smalltempunit2></div></div>

<div class="almanac5"><div class="almanac-content">
<?php  //last year
echo "<valuetextheading1>Total <deepblue>".date('Y', strtotime('-1 year'))."</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>".$weather['rainlastyear']."<smalltempunit2>".$weather["rain_units"];
?><smalltempunit2></div></div> 

<div class="almanac6"><div class="almanac-content">
<?php  //all time
$totalrain=$weather["rainymax"]+ $weather['rainlastyear'];
echo "<valuetextheading1>Total <deepblue>since ".$mbyear."</deepblue></valuetextheading1><br>";
echo "<div class=tempmodulehome0-5c>".$totalrain."<smalltempunit2>".$weather["rain_units"];
?><smalltempunit2></div></div>

<div class="weather-tempicon-identity" style="margin-top:38px;">   
<?php echo "<icon-16-20>".$weather34_rain_icon."</icon-16-20>"; ?></div>