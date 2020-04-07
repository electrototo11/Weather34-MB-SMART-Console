<?php 
$strike='<svg width="10pt" height="10pt"  fill="#d87040" viewBox="0 0 1024 1024" version="weather34 strike icon">
<path d="M718.933333 106.666667L469.333333 362.666667l320 106.666666-334.933333 313.6 108.8 59.733334L256 917.333333l57.6-315.733333 61.866667 
108.8L576 512l-320-106.666667L533.333333 106.666667h185.6z" fill="#d87040" />
</svg>';
$file_live2=file_get_contents('mbridge2/MBrealtimeupload.txt');
    $weather34lightning=explode(" ", $file_live2);    
    //weather34 sensor lightning
    $weather["lightning"]          = $weather34lightning[76];
	$weather["lightningkm"]        = $weather34lightning[75];
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
else if ($lightningseconds >=61 ){    
    if ($weather["lightningkm"]=='--') {
        echo "";
    } elseif ($weather["lightningkm"]<5) {
        echo "".number_format($weather["lightningkm"],1)." mi " ;
    } elseif ($weather["lightningkm"]<30) {
        echo "".number_format($weather["lightningkm"],1)." mi " ;
    } elseif ($weather["lightningkm"]<100) {
        echo "".number_format($weather["lightningkm"],1)." mi " ;
    }
    echo "".convert($lightningseconds)," Ago ";}?></laststrike>
</div>



<div class="lightningyear-mod2"> Strikes <?php echo date('Y');?> &nbsp; <orange>
<?php echo $weather["lightningyear"]?></orange></div>

<div class="lightningmonth-mod2"> Strikes <?php echo date('F');?> &nbsp;<orange>
<?php echo $weather["lightningmonth"]?></orange></div>