<?php include('livedata.php');include('common.php');?>
<div class="almanac-word"><?php echo $lang['Dewpoint'];?></div>
<br><br>
<div class="almanac"><div class="almanac-content">
<?php  //month max
echo "<valuetextheading1>".date('F')." Max <deepblue>".$weather["dewmmaxtime"]."</deepblue></valuetextheading1><br>";

if ($weather["temp_units"]=='F' && $weather["dewmmax"]>75.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewmmax"]>66.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewmmax"]>50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewmmax"]>44.6) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewmmax"]>-50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
//C
if ($weather["temp_units"]=='C' && $weather["dewmmax"]>24) {
echo "
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewmmax"]>19) {
echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewmmax"]>10) {
echo "
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];} 
else if ($weather["temp_units"]=='C' && $weather["dewmmax"]>7) {
echo "
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewmmax"]>-50) {
echo "
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}

?><smalltempunit2></div></div></div>

<div class="almanac2"><div class="almanac-content">
<?php  //max year
echo "<valuetextheading1>".date('Y')." Max <deepblue>".$weather["dewymaxtime"]."</deepblue></valuetextheading1><br>";
if ($weather["temp_units"]=='F' && $weather["dewymax"]>75.2) {
echo "
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["dewymax"]>66.2) {
echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["dewymax"]>50) {
echo "
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];} 
else if ($weather["temp_units"]=='F' && $weather["dewymax"]>44.6) {
echo "
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["dewymax"]>-50) {
echo "
<div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}

//C
if ($weather["temp_units"]=='C' && $weather["dewymax"]>24) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='C' && $weather["dewymax"]>19) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}    
    else if ($weather["temp_units"]=='C' && $weather["dewymax"]>10) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];} 
    else if ($weather["temp_units"]=='C' && $weather["dewymax"]>7) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}          
    else if ($weather["temp_units"]=='C' && $weather["dewymax"]>-50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
 ?>
</smalltempunit2></div></div></div>



<div class="almanac3"><div class="almanac-content">
<?php  //month min
echo "<valuetextheading1>".date('F')." Min <deepblue>".$weather["tempmmintime"]."</deepblue></valuetextheading1><br>";

if ($weather["temp_units"]=='F' && $weather["dewmmin"]>75.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewmmin"]>66.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewmmin"]>50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewmmin"]>44.6) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewmmin"]>-50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
//C
if ($weather["temp_units"]=='C' && $weather["dewmmin"]>24) {
echo "
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewmmin"]>19) {
echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewmmin"]>10) {
echo "
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];} 
else if ($weather["temp_units"]=='C' && $weather["dewmmin"]>7) {
echo "
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewmmin"]>-50) {
echo "
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}

?><smalltempunit2></div></div></div>

<div class="almanac4"><div class="almanac-content">
<?php  //temp min Year
echo "<valuetextheading1>".date('Y')." Min <deepblue>".$weather["tempymintime"]."</deepblue></valuetextheading1><br>";

if ($weather["temp_units"]=='F' && $weather["dewymin"]>75.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewymin"]>66.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewymin"]>50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewymin"]>44.6) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewymin"]>-50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
//C
if ($weather["temp_units"]=='C' && $weather["dewymin"]>24) {
echo "
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewymin"]>19) {
echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewymin"]>10) {
echo "
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];} 
else if ($weather["temp_units"]=='C' && $weather["dewymin"]>7) {
echo "
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewymin"]>-50) {
echo "
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}

?><smalltempunit2></div></div></div>



<div class="almanac5"><div class="almanac-content">
<?php  //all time max
echo "<valuetextheading1>Record Max <deepblue>".$weather["dewamaxtime"]."</deepblue></valuetextheading1><br>";

if ($weather["temp_units"]=='F' && $weather["dewamax"]>75.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewamax"]>66.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewamax"]>50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewamax"]>44.6) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewamax"]>-50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
//C
if ($weather["temp_units"]=='C' && $weather["dewamax"]>24) {
echo "
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewamax"]>19) {
echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewamax"]>10) {
echo "
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewamax"]."&deg;<smalltempunit2>".$weather["temp_units"];} 
else if ($weather["temp_units"]=='C' && $weather["dewamax"]>7) {
echo "
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewamax"]>-50) {
echo "
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}

?><smalltempunit2></div></div></div>

<div class="almanac6"><div class="almanac-content">
<?php  //all time min
echo "<valuetextheading1>Record Min <deepblue>".$weather["dewamintime"]."</deepblue></valuetextheading1><br>";

if ($weather["temp_units"]=='F' && $weather["dewamin"]>75.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewamin"]>66.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewamin"]>50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewamin"]>44.6) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["dewamin"]>-50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
//C
if ($weather["temp_units"]=='C' && $weather["dewamin"]>24) {
echo "
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewamin"]>19) {
echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewamin"]>10) {
echo "
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewamin"]."&deg;<smalltempunit2>".$weather["temp_units"];} 
else if ($weather["temp_units"]=='C' && $weather["dewamin"]>7) {
echo "
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewamin"]>-50) {
echo "
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}

?><smalltempunit2></div></div></div>

<div class="weather-tempicon-identity" style="margin-top:38px;">   
<?php echo "<icon-16-20>".$weather34_temp_icon."</icon-16-20>"; ?></div>