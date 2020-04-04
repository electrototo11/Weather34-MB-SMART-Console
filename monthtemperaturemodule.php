  
 <?php include('livedata.php');?>
 <div class="modulecaptionchart">Temperature &nbsp;<blue1>&deg;<?php echo $weather["temp_units"]; ?></blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/monthtemperaturemodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 


 <div class="legenddewpoint">Min <?php echo $weather["tempmmin"]?>&deg;<?php echo $weather["temp_units"]; ?></div>
 <div class="legendwetbulb" style="background-color:<?php 
 if ($weather["tempmmax"]<=5 ){echo '#4ba0ad';}
 else if ($weather["tempmmax"]<10 ){echo '#9bbc2f';}
 else if ($weather["tempmmax"]<15 ){echo'#e6a141';}
 else if ($weather["tempmmax"]<25 ){echo'#ec5732';}
 else if ($weather["tempmmax"]<50 ){echo'#d35f50';}?>
 " >Max <?php echo $weather["tempmmax"]?>&deg;<?php echo $weather["temp_units"]; ?></div>