<?php include('console-settings.php');
$strike='<svg width="10pt" height="10pt"  fill="#d87040" viewBox="0 0 1024 1024" version="weather34 strike icon">
<path d="M718.933333 106.666667L469.333333 362.666667l320 106.666666-334.933333 313.6 108.8 59.733334L256 917.333333l57.6-315.733333 61.866667 
108.8L576 512l-320-106.666667L533.333333 106.666667h185.6z" fill="#d87040" />
</svg>';

$lightningalert='<svg id="weather34 lightning alert" width="28pt" height="28pt" fill="#d87040" viewBox="0 0 20 20">
<path d="M19.64 16.36L11.53 2.3A1.85 1.85 0 0 0 10 1.21 1.85 1.85 0 0 0 8.48 2.3L.36 16.36C-.48 17.81.21 19 1.88 19h16.24c1.67 0 2.36-1.19 1.52-2.64zM11 
16H9v-2h2zm0-4H9V6h2z"/></svg>';

$file_live2=file_get_contents('mbridge2/MBrealtimeupload.txt');
    $weather34lightning=explode(" ", $file_live2);    
    //weather34 sensor lightning
    $weather["lightning"]          = $weather34lightning[76];
    $weather["lightningkm"]        = $weather34lightning[75];
    $weather["lightningmi"]        = $weather34lightning[75];
	$weather["lightningmax"]       = $weather34lightning[77];
	$weather["lightningmaxdist"]   = $weather34lightning[75];
	$weather["lightningtimeago"]   = $weather34lightning[76];
	$weather["lightningmonth"]     = $weather34lightning[78];
	$weather["lightningyear"]      = $weather34lightning[79];
?>
 
 <?php //weather34 timeago lightning
$lightningseconds = $weather["lightningtimeago"];function convert($lightningseconds){$weather34timeago = "";$days = intval(intval($lightningseconds) / (3600*24));
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
<?php //strike
echo "<strikeicon>";echo "<darkred>".$strike."</darkred>";
echo "</strikeicon>";?>     
<div class="button-dial-top-small"></div>
<div class="button-dial-label-small">   <orange> 
<?php echo number_format($weather["lightningmax"],0);?>
</orange></div></div>

<laststrike>
Last Strike
<?php  //weatherflow air lightning output
if ($lightningseconds <61 ){ echo "<orange> Now </orange>";}
else if ($distanceunit=="km" && $lightningseconds >=61 ){    
if ($weather["lightningkm"]=='--') {
        echo "";
    } else { echo "".number_format($weather["lightningkm"],0)." ".$distanceunit ;}
        echo " ".convert($lightningseconds)," Ago ";}
        
else if ($distanceunit=="mi" && $lightningseconds >=61 ){    
if ($weather["lightningmi"]=='--') {
                echo "";
            } else { echo "".number_format($weather["lightningkm"]*0.621371,0)." ".$distanceunit ;}
                echo " ".convert($lightningseconds)," Ago ";}
             
        
        ?></laststrike>
</div>



<div class="lightningyear-mod2"> Strikes <?php echo date('Y');?> &nbsp; <orange>
<?php echo $weather["lightningyear"]?></orange></div>

<div class="lightningmonth-mod2"> Strikes <?php echo date('F');?> &nbsp;<orange>
<?php echo $weather["lightningmonth"]?></orange></div>

<?php

//lightning
if($distanceunit=='km' && $weather["lightningtimeago"]>1 && $weather["lightningtimeago"]<=580){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$lightningalert.'
      </div>
      <div class="weather34alert-body">
        <p>Lightning '.number_format($weather["lightningkm"],0).'km</p>
        <valuealertorange>'.gmdate("i",$weather["lightningtimeago"]).'<alertunit> min ago</valuealertorange></alertunit>
      </div>
    </div>';}  
    
if($distanceunit=='mi' && $weather["lightningtimeago"]>1 && $weather["lightningtimeago"]<=580){echo '
        <div class="weather34alert" id="weather34message">
          <div class="weather34alert-icon">
            '.$lightningalert.'
          </div>
          <div class="weather34alert-body">
            <p>Lightning '.number_format($weather["lightningkm"]*0.621371,0).' miles </p>
            <valuealertorange>'.gmdate("i",$weather["lightningtimeago"]).'<alertunit> min ago</valuealertorange></alertunit>
          </div>
        </div>';} 


    ?> 