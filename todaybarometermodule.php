  
 <?php include('livedata.php');?>
 <div class="modulecaptionchart"><?php echo $lang['Barometer']?> &nbsp;<blue1><?php echo $weather["barometer_units"]; ?></blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/todaybarometermodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
  <div class="legenddewpoint">Min <?php echo $weather["barometer_min"]?><?php echo $weather["barometer_units"]; ?></div>
 <div class="legendwetbulb" style="background-color:<?php 
 if ($weather["barometer_max"]<=5 ){echo '#4ba0ad';}
 else if ($weather["barometer_max"]<10 ){echo '#9bbc2f';}
 else if ($weather["barometer_max"]<15 ){echo'#e6a141';}
 else if ($weather["barometer_max"]<25 ){echo'#ec5732';}
 else if ($weather["barometer_max"]<50 ){echo'#d35f50';}?>
 " >Max <?php echo $weather["barometer_max"]?><?php echo $weather["barometer_units"]; ?></div>