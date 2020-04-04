  
 <?php include('livedata.php');?>
 <div class="modulecaptionchart">UV Index &nbsp;<blue1>UVI</blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/todayuvmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legendwetbulb" style="background:<?php 
 if ($weather["uvdmax"]>=10 ){echo '#8680bc';}
 else if ($weather["uvdmax"]>=8 ){echo '#d35f50';}
 else if ($weather["uvdmax"]>=6 ){echo'#e6a141';}
 else if ($weather["uvdmax"]>=3 ){echo'#ec5732';}
 else if ($weather["uvdmax"]>=0 ){echo'#9bbc2f';}?>
 " >Max <?php echo $weather["uvdmax"]?> UVI</div>
