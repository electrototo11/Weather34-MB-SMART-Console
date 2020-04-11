  
 <?php include('livedata.php');?>
 
 <div class="modulecaptionchart"><?php echo $lang['Humidity']?> &nbsp;<blue1>%</blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/todayhumiditymodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 
 <div class="legenddewpoint" style="background:<?php 
 if ($weather["humidity_max"]<=100 ){echo '#4ba0ad';}
 else if ($weather["humidity_max"]<70 ){echo '#9bbc2f';}
 else if ($weather["humidity_max"]<60 ){echo'#e6a141';}
 else if ($weather["humidity_max"]<40 ){echo'#ec5732';}
 else if ($weather["humidity_max"]<35 ){echo'#d35f50';}?>
 " >Min <?php echo $weather["humidity_min"]?>%</div>

<div class="legendwetbulb" style="background:<?php 
 if ($weather["humidity_min"]<=100 ){echo '#4ba0ad';}
 else if ($weather["humidity_min"]<70 ){echo '#9bbc2f';}
 else if ($weather["humidity_min"]<60 ){echo'#e6a141';}
 else if ($weather["humidity_min"]<40 ){echo'#ec5732';}
 else if ($weather["humidity_min"]<35 ){echo'#d35f50';}?>
 " >Max <?php echo $weather["humidity_max"]?>%</div>