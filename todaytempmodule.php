  
 <?php include('livedata.php');?>
 <div class="modulecaptionchart">Temperature | -- Feels<blue1> &nbsp;&deg;<?php echo $weather["temp_units"]?></blue1></div>  
 <iframe  class="charttempmodule" src="weather34charts/todaytempmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 


 <div class="legenddewpoint">Min <?php echo $weather["tempdmin"]?>&deg;<?php echo $weather["temp_units"]; ?></div>
 <div class="legendwetbulb" style="background-color:<?php 
 if ($weather["tempdmax"]<=5 ){echo '#4ba0ad';}
 else if ($weather["tempdmax"]<10 ){echo '#9bbc2f';}
 else if ($weather["tempdmax"]<15 ){echo'#e6a141';}
 else if ($weather["tempdmax"]<25 ){echo'#ec5732';}
 else if ($weather["tempdmax"]<50 ){echo'#d35f50';}?>
 " >Max <?php echo $weather["tempdmax"]?>&deg;<?php echo $weather["temp_units"]; ?></div>
 
  