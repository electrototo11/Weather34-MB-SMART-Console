  
 <?php include('livedata.php');?>
 <div class="modulecaptionchart">Dewpoint | --Wetbulb<blue1> &nbsp;&deg;<?php echo $weather["temp_units"]?></blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/todaydewpointmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 
<div class="legenddewpoint">Min <?php echo $weather["dewmin"]?>&deg;<?php echo $weather["temp_units"]; ?></div>
 <div class="legendwetbulb" style="background-color:<?php 
 if ($weather["dewmax"]<=5 ){echo '#4ba0ad';}
 else if ($weather["dewmax"]<10 ){echo '#9bbc2f';}
 else if ($weather["dewmax"]<15 ){echo'#e6a141';}
 else if ($weather["dewmax"]<25 ){echo'#ec5732';}
 else if ($weather["dewmax"]<50 ){echo'#d35f50';}?>
 " >Max <?php echo $weather["dewmax"]?>&deg;<?php echo $weather["temp_units"]; ?></div>