  
 <?php include('livedata.php');?>
 <div class="modulecaptionchart"><?php echo $lang['Barometer']?>&nbsp;<blue1><?php echo $weather["barometer_units"]; ?></blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/yearbarometermodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legenddewpoint">Min <?php echo $weather["thb0seapressymin"]?> </div><div class="legendwetbulb">Max <?php echo $weather["thb0seapressymax"]?></div>