  
 <?php include('livedata.php');?>
 <div class="modulecaptionchart">Rainfall &nbsp;<blue1><?php echo $weather["rain_units"]; ?></blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/todayrainfallmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legenddewpoint">Total <?php echo $weather["rain_today"] . $weather["rain_units"]?></div>

 