<?php 
  ####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											                           #
	# https://weather34.com/homeweatherstation/index.html 											                       # 
	# 	                                                                                               #
	# 	Release: December 2019	            				  	                                               #
	# 	  Console Version                                                                              #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
include_once('livedata.php');include_once('updater2.php');
?>

<!DOCTYPE html><html><head>
<title><?php echo $stationName;?> </title>
<meta name="title" content="<?php echo $stationName;?>">
<meta name="description" content="Providing current weather conditions for <?php echo $stationName?>">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=yes">
<meta name="mobile-web-app-capable" content="yes">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<meta name="apple-mobile-web-app-title" content="Weather34">
<meta name="application-name" content="Weather34">
<link href="console-<?php echo $theme?>.css?version=<?php echo filemtime('console-'.$theme.'.css')?>" rel="stylesheet prefetch">
<link rel="preload" href="fonts/clock3-webfont.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="fonts/verbatim-regular.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="fonts/verbatim-medium.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="fonts/HelveticaNeue-Medium.woff" as="font" type="font/woff" crossorigin>
</head>
<body>
<!-- weather34 NANOSD console flex layout -->
<div class="weather34-tablet">
<div class="container">
<div class="nav-top"> 
<div class="weather34-indoor">
<?php echo $timeicon?> <div id="weather34clock4"></div>
</div>

<div class="desktoplink3"><?php echo $headerlocation?> <?php echo $stationName?></div>
<div class="online"><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $wirelessoffline;else echo $wireless?></div>

</div>
<ul class="grid-container">
    <li><div id=position1></div></li>
    <li><div id=position2></div></li>
    <li><div id=position3></div></li>
    <li><div id=position4></div></li>
    <li><div id=position5></div></li>
    <li><div id=position6></div></li>
    <li><div id=position7></div></li>
    <li><div id=position8></div></li>
    <li><div id=position9></div></li>
    <li2><div id=position10></div></li2> 
    <li2><div id=position11></div></li2> 
    <li2><div id=position12></div></li2>  
    <li3><div id=position13></div></li3>
  </ul>

  <div class="nav-bottom">
  <a href="console-setup.php" target="_blank" data-title="Setup Screen"> <?php echo $adjust ?></a> 

  
  <a href=<?php if ($theme == 'dark') { echo '?theme=light';} else {echo '?theme=dark';} ?>
    <?php if ($theme == 'dark') { echo 'data-title="Light Mode"';} else {echo 'data-title="Dark Mode"';} ?> >
    <?php //theme
    if ($theme == 'dark') {echo $themeshadelight;} 
    else {echo $themeshadedark;}?></a>

     <?php 
  if ($units=='us') {  // NON METRIC OPTIONS C-MS-KTS   
    echo '<a  href="?units=metric" data-title="Metric Units">
    '.$weather34C.'</a>'; 
    echo '<a href="?units=scandinavia" data-title="MS Units"> 
    '.$weather34MS.'</a>'; 
    echo '<a  href="?units=knots" data-title="Wind Knots">
    '.$weather34KTS.'</a>';     
  }
  else if ($units=='uk'){ // UK OPTIONS F-C-KNOTS
    echo '<a  href="?units=us" data-title="Imperial Units">
    '.$weather34F.'</a>';
     echo '<a  href="?units=metric" data-title="Metric Units">
     '.$weather34C.'</a>';
    echo '<a  href="?units=knots" data-title="Wind Knots">
    '.$weather34KTS.'</a>';     
  }  
  else if ($units=='metric'){ // METRIC OPTIONS F-UK-KTS
    echo '<a  href="?units=us" data-title="Imperial Units">
    '.$weather34F.'</a>';  
     echo '<a href="?units=uk" data-title="UK Units"> 
     '.$weather34UK.'</a>';  
     echo '<a  href="?units=knots" data-title="Wind Knots">
     '.$weather34KTS.'</a>';      
  }  

  else if ($units=='scandinavia'){ // MS OPTIONS F-C-KTS
    echo '<a  href="?units=us" data-title="Imperial Units">
    '.$weather34F.'</a>'; 
    echo '<a  href="?units=metric" data-title="Metric Units">
    '.$weather34C.'</a>';       
    echo '<a  href="?units=knots" data-title="Wind Knots">
    '.$weather34KTS.'</a>';       
  }  
  else if ($units=='knots'){   // KNOTS OPTIONS F-C-UK
    echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    '.$weather34F.'</a>';  
    echo '<a  href="?units=metric" data-title="Metric Units">
    '.$weather34C.'</a>'; 
    echo '<a href="?units=uk" data-title="UK Units">     
    '.$weather34UK.'</a>';   
   } 
   
   else if ($units==''){   // default
    echo '<a  href="?units=us" data-title="Imperial Units">
    '.$weather34F.'</a>';  
    echo '<a  href="?units=metric" data-title="Metric Units">
    '.$weather34C.'</a>'; 
    echo '<a href="?units=uk" data-title="UK Units">     
    '.$weather34UK.'</a>';   
   } 
?>



<a href="outlookwu.php" data-lity data-title="5 day Forecast">
<?php echo $weather34fore?></a>

<a href="outlookwutext.php" data-lity  data-title="Summary Forecast">
<?php echo $weather34foretxt?></a>

<a href="consolecharts.php" data-title="Daily Charts">
<?php echo $weather34chart2?></a>

<a href="weather34-almanac.php" data-title="Almanac">
<?php echo $weather34alm?></a>

<?php if ($webcamdevice == "yes") {?>
  <a href="weather34-large-cam.php" data-lity data-title="Webcam"><?php echo $webcamicon2?></a>
<?php };?>


<div class="weather34-rightfootericons">
<?php 
//weather34 smart tv option
if ($smarttv=='yes'){echo '<a href="weather34-tv.php" data-title="Smart TV" >'. $weather34smtv.'</a>';} ?>  


<?php if ($languages == "yes") {?>  
<span style="text-transform:uppercase"><a href="index.php?lang=<?php echo $defaultlanguage;?>" data-title="<?php echo $defaultlanguage;?>"><?php echo $weather34language1;?></span></a>
<span style="text-transform:uppercase"><a href="index.php?lang=<?php echo $defaultlanguage2;?>" data-title="<?php echo $defaultlanguage2;?>"><?php echo $weather34language2;?></span></a>
<?php };?>

<a  href="weather34-template-legend.php" data-lity data-title="Hardware Info"> <?php echo $weather34hinfo;?></a>

<a  href="info.html" data-lity data-title="Template info" > <?php echo $weather34copyr;?></a>

<a href="index.php" data-title="Refresh"> <?php echo $weather34refr?></a></div>  
 </body></html>