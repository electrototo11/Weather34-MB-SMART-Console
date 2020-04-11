  
 <?php include('livedata.php');?>
 <div class="modulecaptionchart"><?php echo $lang['Rainfall']?> &nbsp;<blue1><?php echo $weather["rain_units"]; ?></blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/monthrainfallmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legenddewpoint">Total <?php echo $weather["rainmmax"]?> <?php echo $weather["rain_units"]; ?></div>