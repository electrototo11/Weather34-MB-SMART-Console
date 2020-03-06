<?php include('livedata.php');include('common.php');?>
<div class="almanac-word"><?php echo $lang['Temperature'];?></div>
<br><br>
<div class="almanac"><div class="almanac-content">
<?php  //month max
echo "<valuetextheading1>".date('F')." Max <deepblue>".$weather["tempmmaxtime"]."</deepblue></valuetextheading1><br>";

if ($weather["temp_units"]=='F' && $weather["tempmmax"]>75.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["tempmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>66.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["tempmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["tempmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>44.6) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["tempmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>-50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["tempmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
//C
if ($weather["temp_units"]=='C' && $weather["tempmmax"]>24) {
echo "
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["tempmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>19) {
echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["tempmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>10) {
echo "
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["tempmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];} 
else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>7) {
echo "
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["tempmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>-50) {
echo "
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["tempmmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}

?><smalltempunit2></div></div></div>

<div class="almanac2"><div class="almanac-content">
<?php  //max year
echo "<valuetextheading1>".date('Y')." Max <deepblue>".$weather["tempymaxtime"]."</deepblue></valuetextheading1><br>";
if ($weather["temp_units"]=='F' && $weather["tempymax"]>75.2) {
echo "
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["tempymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["tempymax"]>66.2) {
echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["tempymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["tempymax"]>50) {
echo "
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["tempymax"]."&deg;<smalltempunit2>".$weather["temp_units"];} 
else if ($weather["temp_units"]=='F' && $weather["tempymax"]>44.6) {
echo "
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["tempymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["tempymax"]>-50) {
echo "
<div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather["tempymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}

//C
if ($weather["temp_units"]=='C' && $weather["tempymax"]>24) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["tempymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='C' && $weather["tempymax"]>19) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["tempymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}    
    else if ($weather["temp_units"]=='C' && $weather["tempymax"]>10) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["tempymax"]."&deg;<smalltempunit2>".$weather["temp_units"];} 
    else if ($weather["temp_units"]=='C' && $weather["tempymax"]>7) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["tempymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}          
    else if ($weather["temp_units"]=='C' && $weather["tempymax"]>-50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather["tempymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
 ?>
</smalltempunit2></div></div></div>



<div class="almanac3"><div class="almanac-content">
<?php  //month min
echo "<valuetextheading1>".date('F')." Min <deepblue>".$weather["tempmmintime"]."</deepblue></valuetextheading1><br>";

if ($weather["temp_units"]=='F' && $weather["tempmmin"]>75.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["tempmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempmmin"]>66.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["tempmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempmmin"]>50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["tempmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempmmin"]>44.6) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["tempmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempmmin"]>-50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["tempmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
//C
if ($weather["temp_units"]=='C' && $weather["tempmmin"]>24) {
echo "
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["tempmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["tempmmin"]>19) {
echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["tempmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["tempmmin"]>10) {
echo "
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["tempmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];} 
else if ($weather["temp_units"]=='C' && $weather["tempmmin"]>7) {
echo "
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["tempmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["tempmmin"]>-50) {
echo "
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["tempmmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}

?><smalltempunit2></div></div></div>

<div class="almanac4"><div class="almanac-content">
<?php  //temp min Year
echo "<valuetextheading1>".date('Y')." Min <deepblue>".$weather["tempymintime"]."</deepblue></valuetextheading1><br>";

if ($weather["temp_units"]=='F' && $weather["tempymin"]>75.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["tempymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempymin"]>66.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["tempymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempymin"]>50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["tempymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempymin"]>44.6) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["tempymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempymin"]>-50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["tempymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
//C
if ($weather["temp_units"]=='C' && $weather["tempymin"]>24) {
echo "
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["tempymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["tempymin"]>19) {
echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["tempymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["tempymin"]>10) {
echo "
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["tempymin"]."&deg;<smalltempunit2>".$weather["temp_units"];} 
else if ($weather["temp_units"]=='C' && $weather["tempymin"]>7) {
echo "
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["tempymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["tempymin"]>-50) {
echo "
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["tempymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}

?><smalltempunit2></div></div></div>



<div class="almanac5"><div class="almanac-content">
<?php  //all time max
echo "<valuetextheading1>Record Max <deepblue>".$weather["tempamaxtime"]."</deepblue></valuetextheading1><br>";

if ($weather["temp_units"]=='F' && $weather["tempamax"]>75.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["tempamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempamax"]>66.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["tempamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempamax"]>50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["tempamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempamax"]>44.6) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["tempamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempamax"]>-50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["tempamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
//C
if ($weather["temp_units"]=='C' && $weather["tempamax"]>24) {
echo "
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["tempamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["tempamax"]>19) {
echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["tempamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["tempamax"]>10) {
echo "
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["tempamax"]."&deg;<smalltempunit2>".$weather["temp_units"];} 
else if ($weather["temp_units"]=='C' && $weather["tempamax"]>7) {
echo "
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["tempamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["tempamax"]>-50) {
echo "
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["tempamax"]."&deg;<smalltempunit2>".$weather["temp_units"];}

?><smalltempunit2></div></div></div>

<div class="almanac6"><div class="almanac-content">
<?php  //all time min
echo "<valuetextheading1>Record Min <deepblue>".$weather["tempamintime"]."</deepblue></valuetextheading1><br>";

if ($weather["temp_units"]=='F' && $weather["tempamin"]>75.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["tempamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempamin"]>66.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["tempamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempamin"]>50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["tempamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempamin"]>44.6) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["tempamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='F' && $weather["tempamin"]>-50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["tempamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
//C
if ($weather["temp_units"]=='C' && $weather["tempamin"]>24) {
echo "
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["tempamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["tempamin"]>19) {
echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["tempamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["tempamin"]>10) {
echo "
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["tempamin"]."&deg;<smalltempunit2>".$weather["temp_units"];} 
else if ($weather["temp_units"]=='C' && $weather["tempamin"]>7) {
echo "
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["tempamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["tempamin"]>-50) {
echo "
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["tempamin"]."&deg;<smalltempunit2>".$weather["temp_units"];}

?><smalltempunit2></div></div></div>

<div class="weather-tempicon-identity" style="margin-top:38px;">   
<?php echo "<icon-16-20>".$weather34_temp_icon."</icon-16-20>"; ?></div>