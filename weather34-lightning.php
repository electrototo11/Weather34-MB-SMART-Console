<?php  include('livedata.php');
date_default_timezone_set($TZ);

?>
 
 <?php //weather34 timeago lightning
$lightningseconds = $weather["lightning2timeago"];function convert($lightningseconds){$weather34timeago = "";$days = intval(intval($lightningseconds) / (3600*24));
$hours = (intval($lightningseconds) / 3600) % 24;$minutes = (intval($lightningseconds) / 60) % 60;$seconds = (intval($lightningseconds)) % 60;
if($days> 1){$weather34timeago .= "$days Days  ";}
else {if($days>0){$weather34timeago .= "$days Day  ";}
if($hours > 1){$weather34timeago .= "$hours hrs  ";}
else if($hours >=0){$weather34timeago .= "$hours hr  ";}
if($minutes > 1){$weather34timeago .= "$minutes mins  ";}
else if($minutes >=0){$weather34timeago .= "$minutes min  ";}
}return $weather34timeago;}

?>
<div class="sunblock">
<div class="lightningdesc">Lightning Today</div>
<div class="button button-dial-small">      
<div class="button-dial-top-small"></div>
<div class="button-dial-label-small">   <orange> 
<?php echo number_format($weather["lightning2max"],0);?>
</orange></div></div>

<laststrike>
Last Strike
<?php  //weatherflow air lightning output
if ($lightningseconds <61 ){ echo "<orange> Now </orange>";}
else if ($lightningseconds >=61 ){
    
    if ($weather["lightning2km"]=='--') {
        echo "";
    } elseif ($weather["lightning2km"]<5) {
        echo "".$weather["lightning2km"]." km" ;
    } elseif ($weather["lightning2km"]<30) {
        echo "".$weather["lightning2km"]." km" ;
    } elseif ($weather["lightning2km"]<100) {
        echo "".$weather["lightning2km"]." km" ;
    }
    echo "".convert($lightningseconds),"Ago ";
}?></laststrike>
</div>



<div class="lightningyear-mod2"> Strikes <?php echo date('Y');?> &nbsp; <orange>
<?php echo $weather["lightning2year"]?></orange>
</div>



<div class="lightningmonth-mod2"> Strikes <?php echo date('F');?> &nbsp;<orange>
<?php echo $weather["lightning2month"]?></orange>
</div>