  
 <?php include('livedata.php');include('common.php')?>
 <div class="modulecaptionchart"><?php echo $lang['Avg'], " ", $lang['Windspeed']?> <blue1><?php echo $weather["wind_units"]; ?></blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/yearavgwindspeedmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legenddewpoint"><?php echo $lang['Average']?></div>