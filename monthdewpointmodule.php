  
 <?php include('livedata.php');?>
 <div class="modulecaptionchart">Dewpoint &nbsp;<blue1>&deg;<?php echo $weather["temp_units"]; ?></blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/monthdewpointmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 
<div class="legenddewpoint">Min <?php echo $weather["dewmmin"]?>&deg;<?php echo $weather["temp_units"]; ?></div>
<div class="legendwetbulb" style="background-color:<?php 
 if ($weather["dewmmax"]<=5 ){echo '#4ba0ad';}
 else if ($weather["dewmmax"]<10 ){echo '#9bbc2f';}
 else if ($weather["dewmmax"]<15 ){echo'#e6a141';}
 else if ($weather["dewmmax"]<25 ){echo'#ec5732';}
 else if ($weather["dewmmax"]<50 ){echo'#d35f50';}?>
 " >Max <?php echo $weather["dewmmax"]?>&deg;<?php echo $weather["temp_units"]; ?> </div>