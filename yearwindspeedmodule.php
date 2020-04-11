  
 <?php include('livedata.php');?>
 <div class="modulecaptionchart"><?php echo $lang['Windspeed']?>&nbsp;<blue1><?php echo $weather["wind_units"]; ?></blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/yearwindspeedmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legendwetbulb">Max <?php echo $weather["windymax"]?> <?php echo $weather["wind_units"]; ?></div>