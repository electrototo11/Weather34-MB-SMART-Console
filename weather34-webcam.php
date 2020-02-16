<?php include('livedata.php');include('common.php')?>

<div class="modulecaptioncam">Web Cam</div>

<!-- HOMEWEATHER STATION TEMPLATE SIMPLE WEBCAM -add your url as shown below do NOT delete the class='weather34-webcam' !!! -->
<img src="<?php echo $webcamurl?>?v=<?php echo date('YmdGis');?>>" alt="weathercam" class="weather34-webcam">
