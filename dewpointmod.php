<?php include('livedata.php');include('common.php');?>
<div class="modulecaption2"><?php echo $lang['Dewpoint']; ?> &deg;<?php echo $weather["temp_units"]?></div>
<div class="button button-dial">
        
        <span class="button-dial-spoke"></span>
        <span class="button-dial-spoke"></span>
        <span class="button-dial-spoke"></span>
        <span class="button-dial-spoke"></span>
        <span class="button-dial-spoke"></span>
        <span class="button-dial-spoke"></span>        
        <div class="button-dial-top"></div>
        <div class="button-dial-label">


          
          <?php 
          if($weather["temp_units"]=='C' && $weather["dewpoint"]<-10){ echo "<icon-minus10>".$weather["dewpoint"]."</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<-5){ echo "<icon-minus5>".$weather["dewpoint"]."</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<0){ echo "<icon-zero>".$weather["dewpoint"]."</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<6){ echo "<icon-0-5>".$weather["dewpoint"]."</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<10){ echo "<icon-6-10>".$weather["dewpoint"]."</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<15){ echo "<icon-11-15>".$weather["dewpoint"]."</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<20){ echo "<icon-16-20>".$weather["dewpoint"]."</icon-16-20>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<25){ echo "<icon-21-25>".$weather["dewpoint"]."</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<30){ echo "<icon-26-30>".$weather["dewpoint"]."</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<35){ echo "<icon-31-35>".$weather["dewpoint"]."</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<40){ echo "<icon-36-40>".$weather["dewpoint"]."</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<100){ echo "<icon-41-45>".$weather["dewpoint"]."</icon-41-45>";}
          
if($weather["temp_units"]=='F' && $weather["dewpoint"]<14){ echo "<icon-minus10>".$weather["dewpoint"]."</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<23){ echo "<icon-minus5>".$weather["dewpoint"]."</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<32){ echo "<icon-zero>".$weather["dewpoint"]."</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<42){ echo "<icon-0-5>".$weather["dewpoint"]."</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<50){ echo "<icon-6-10>".$weather["dewpoint"]."</icon-6-10";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<59){ echo "<icon-11-15>".$weather["dewpoint"]."</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<68){ echo "<icon-16-20>".$weather["dewpoint"]."</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<77){ echo "<icon-21-25>".$weather["dewpoint"]."</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<86){ echo "<icon-26-30>".$weather["dewpoint"]."</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<95){ echo "<icon-31-35>".$weather["dewpoint"]."</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<104){ echo "<icon-36-40>".$weather["dewpoint"]."</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<300){ echo "<icon-41-45>".$weather["dewpoint"]."</icon-41-45>";}
          
         
          
          ?>
        </div>
      </div>
<div>

<?php //feels like man
echo "<tempman>";
//c
if($weather["temp_units"]=='C' && $weather["dewpoint"]<-10){ echo "<icon-minus10>".$tempman."</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<-5){ echo "<icon-minus5>".$tempman."</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<0){ echo "<icon-zero>".$tempman."</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<6){ echo "<icon-0-5>".$tempman."</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<10){ echo "<icon-6-10>".$tempman."</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<15){ echo "<icon-11-15>".$tempman."</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<20){ echo "<icon-16-20>".$tempman."</icon-16-20>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<25){ echo "<icon-21-25>".$tempman."</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<30){ echo "<icon-26-30>".$tempman."</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<35){ echo "<icon-31-35>".$tempman."</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<40){ echo "<icon-36-40>".$tempman."</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<100){ echo "<icon-41-45>".$tempman."</icon-41-45>";}

if($weather["temp_units"]=='F' && $weather["dewpoint"]<14){ echo "<icon-minus10>".$tempman."</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<26){ echo "<icon-minus5>".$tempman."</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<32){ echo "<icon-zero>".$tempman."</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<42.8){ echo "<icon-0-5>".$tempman."</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<50){ echo "<icon-6-10>".$tempman."</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<59){ echo "<icon-11-15>".$tempman."</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<68){ echo "<icon-16-20>".$tempman."</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<77){ echo "<icon-21-25>".$tempman."</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<86){ echo "<icon-26-30>".$tempman."</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<95){ echo "<icon-31-35>".$tempman."</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<104){ echo "<icon-36-40>".$tempman."</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<300){ echo "<icon-41-45>".$tempman."</icon-41-45>";}

echo "</tempman>";?>

</div></div></div></div></div>

<div class="heatcircle"><div class="heatcircle-content">
<?php  //dewpoint max Year
echo "<valuetextheading1>".date('Y')." Max <deepblue>".$weather["dewymaxtime"]."</deepblue></valuetextheading1><br>";
if ($weather["temp_units"]=='F' && $weather["dewymax"]>75.2) {
    echo "<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}    
    else if ($weather["temp_units"]=='F' && $weather["dewymax"]>66.2) {
    echo "<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}     
    else if ($weather["temp_units"]=='F' && $weather["dewymax"]>50) {
    echo "<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}     
    else if ($weather["temp_units"]=='F' && $weather["dewymax"]>44.6) {
    echo "<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}    
    else if ($weather["temp_units"]=='F' && $weather["dewymax"]>-50) {
    echo "<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
//C
if ($weather["temp_units"]=='C' && $weather["dewymax"]>24) {
echo "<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewymax"]>19) {
echo "<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewymax"]>10) {
echo "<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}  
else if ($weather["temp_units"]=='C' && $weather["dewymax"]>7) {
echo "<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewymax"]>-50) {
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content">
<?php  //dewpoint min year
echo "<valuetextheading1>".date('Y')." Min <deepblue>".$weather["dewymintime"]."</deepblue></valuetextheading1><br>";
if ($weather["temp_units"]=='F' && $weather["dewymin"]>75.2) {
echo "<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["dewymin"]>66.2) {
echo "<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["dewymin"]>50) {
echo "<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}  
else if ($weather["temp_units"]=='F' && $weather["dewymin"]>44.6) {
echo "<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["dewymin"]>-50) {
echo "<div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
//c
if ($weather["temp_units"]=='C' && $weather["dewymin"]>24) {
    echo "<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='C' && $weather["dewymin"]>19) {
    echo "<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='C' && $weather["dewymin"]>10) {
    echo "<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}  
    else if ($weather["temp_units"]=='C' && $weather["dewymin"]>7) {
    echo "<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='C' && $weather["dewymin"]>-50) {
    echo "<div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
 ?>
</smalltempunit2></div></div></div>

<div class="heatcircleindoor"><div class="heatcircle-content"><?php echo $lang['Month']?> <orange>Max</orange>-<deepblue>Min</deepblue></valuetextheading1>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehomemaxmin>". $weather["dewmmax"]."&deg;<smalltempunit2>".$weather["temp_units"]."</smalltempunit2>&nbsp;|&nbsp;";
//non metric avg today
echo $weather["dewmmin"]."&deg;<smalltempunit2>".$weather["temp_units"]."</smalltempunit2>";?>

</div></div></div><div>

<div class=thetrendgap>
<?php 
//falling
if($weather["dewpoint_trend"]<0){echo '<div class=thetrendboxblue>'.$lang['Falling']. '';echo '&nbsp;'.$fallingsymbolx.'&nbsp;<blue> '.number_format($weather["temp_trend"],1).'</blue>&deg;';}
//rising
else if($weather["dewpoint_trend"]>0){echo '<div class=thetrendboxorange>&nbsp;'.$lang['Rising']. '';echo '&nbsp;'.$risingsymbolx.'&nbsp;<orange> + '.number_format($weather["temp_trend"],1).'</orange>&deg;';}
//steady
else echo '<div class=thetrendboxblue>'.$lang['Steady']. ' '.$steadysymbol.'';?>
</div></div></div></div></div>


<div class="maxwind">
<?php  //Max-Min
echo "Max ";
if($weather["temp_units"]=='C' && $weather["dewmax"]<-10){ echo "<icon-minus10>".$weather["dewmax"]."</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<-5){ echo "<icon-minus5>".$weather["dewmax"]."</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<0){ echo "<icon-zero>".$weather["dewmax"]."</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<6){ echo "<icon-0-5>".$weather["dewmax"]."</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<10){ echo "<icon-6-10>".$weather["dewmax"]."</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<15){ echo "<icon-11-15>".$weather["dewmax"]."</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<20){ echo "<icon-16-20>".$weather["dewmax"]."</icon-16-20>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<25){ echo "<icon-21-25>".$weather["dewmax"]."</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<30){ echo "<icon-26-30>".$weather["dewmax"]."</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<35){ echo "<icon-31-35>".$weather["dewmax"]."</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<40){ echo "<icon-36-40>".$weather["dewmax"]."</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["dewmax"]<100){ echo "<icon-41-45>".$weather["dewmax"]."</icon-41-45>";}

if($weather["temp_units"]=='F' && $weather["dewmax"]<14){ echo "<icon-minus10>".$weather["dewmax"]."</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<23){ echo "<icon-minus5>".$weather["dewmax"]."</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<32){ echo "<icon-zero>".$weather["dewmax"]."</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<42.8){ echo "<icon-0-5>".$weather["dewmax"]."</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<50){ echo "<icon-6-10>".$weather["dewmax"]."</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<59){ echo "<icon-11-15>".$weather["dewmax"]."</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<68){ echo "<icon-16-20>".$weather["dewmax"]."</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<77){ echo "<icon-21-25>".$weather["dewmax"]."</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<86){ echo "<icon-26-30>".$weather["dewmax"]."</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<95){ echo "<icon-31-35>".$weather["dewmax"]."</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<104){ echo "<icon-36-40>".$weather["dewmax"]."</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["dewmax"]<300){ echo "<icon-41-45>".$weather["dewmax"]."</icon-41-45>";}

echo "&deg; | ";

echo "Min ";
if($weather["temp_units"]=='C' && $weather["dewmin"]<-10){ echo "<icon-minus10>".$weather["dewmin"]."</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<-5){ echo "<icon-minus5>".$weather["dewmin"]."</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<0){ echo "<icon-zero>".$weather["dewmin"]."</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<6){ echo "<icon-0-5>".$weather["dewmin"]."</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<10){ echo "<icon-6-10>".$weather["dewmin"]."</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<15){ echo "<icon-11-15>".$weather["dewmin"]."</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<20){ echo "<icon-16-20>".$weather["dewmin"]."</icon-16-20>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<25){ echo "<icon-21-25>".$weather["dewmin"]."</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<30){ echo "<icon-26-30>".$weather["dewmin"]."</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<35){ echo "<icon-31-35>".$weather["dewmin"]."</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<40){ echo "<icon-36-40>".$weather["dewmin"]."</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["dewmin"]<100){ echo "<icon-41-45>".$weather["dewmin"]."</icon-41-45>";}


if($weather["temp_units"]=='F' && $weather["dewmin"]<14){ echo "<icon-minus10>".$weather["dewmin"]."</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<23){ echo "<icon-minus5>".$weather["dewmin"]."</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<32){ echo "<icon-zero>".$weather["dewmin"]."</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<42.8){ echo "<icon-0-5>".$weather["dewmin"]."</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<50){ echo "<icon-6-10>".$weather["dewmin"]."</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<59){ echo "<icon-11-15>".$weather["dewmin"]."</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<68){ echo "<icon-16-20>".$weather["dewmin"]."</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<77){ echo "<icon-21-25>".$weather["dewmin"]."</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<86){ echo "<icon-26-30>".$weather["dewmin"]."</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<95){ echo "<icon-31-35>".$weather["dewmin"]."</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<104){ echo "<icon-36-40>".$weather["dewmin"]."</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["dewmin"]<300){ echo "<icon-41-45>".$weather["dewmin"]."</icon-41-45>";}
echo "&deg;"
?>
</div>
