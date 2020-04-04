  
 <?php include('livedata.php');?>
 <div class="modulecaptionchart">Solar Radiation <blue1>Wm/2</blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/todaysolarmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legendwetbulb" style="background:<?php 
 if ($weather["solardmax"]>=700 ){echo '#d35f50';}
 else if ($weather["solardmax"]>=500 ){echo'#ec5732';}
 else if ($weather["solardmax"]>=0 ){echo'#e6a241';} 
 ?>" >Max <?php echo $weather["solardmax"]?> wm/2</div>
