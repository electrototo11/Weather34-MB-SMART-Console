<?php 
  ####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											                           #
	# https://weather34.com/homeweatherstation/index.html 											                       # 
	# 	                                                                                               #
	# 	Release: Feb 2020 TV Vesion  			         #
	# 	  Console Version                                                                              #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
include_once('livedata.php');include_once('updater2.php');
?>

<!DOCTYPE html><html><head>
<title><?php echo $stationName;?> </title>
<meta name="title" content="<?php echo $stationName;?>">
<meta name="description" content="Providing current weather conditions for <?php echo $stationName?>">
<meta name="viewport" content="width=1280, initial-scale=0.75">
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
<link href="weather34smart-tv-<?php echo $theme ?>.css?version=<?php echo filemtime('weather34smart-tv-'. $theme .'.css') ?>" rel="stylesheet prefetch">
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
<?php echo $timeicon?> <div id="weather34clock4"></div></div>

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
  <a href="console-setup.php" target="_blank" alt="Setup Screen" title="Setup Screen"> <?php echo $adjust ?></a>
  
  <a href=<?php if ($theme == 'dark') { echo '?theme=light';} else {echo '?theme=dark';} ?>
    <?php if ($theme == 'dark') { echo 'alt="Light Mode" title="Light Mode"';} else {echo 'alt="Dark Mode" title="Dark Mode"';} ?> >
    <?php //theme
    if ($theme == 'dark') {echo $themeshadelight;} 
    else {echo $themeshadedark;}?></a>

     <?php 
  if ($units=='us') {  // NON METRIC OPTIONS C-MS-KTS   
    echo '<a  href="?units=metric" alt="Metric Units" title="Metric Units">
    '.$weather34C.'</a>'; 
    echo '<a href="?units=scandinavia" alt="MS Units" title="MS Units"> 
    '.$weather34MS.'</a>'; 
    echo '<a  href="?units=knots" alt="Wind Knots" title="Wind Knots">
    '.$weather34KTS.'</a>';     
  }
  else if ($units=='uk'){ // UK OPTIONS F-C-KNOTS
    echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    '.$weather34F.'</a>';
     echo '<a  href="?units=metric" alt="Metric Units" title="Metric Units">
     '.$weather34C.'</a>';
    echo '<a  href="?units=knots" alt="Wind Knots" title="Wind Knots">
    '.$weather34KTS.'</a>';     
  }  
  else if ($units=='metric'){ // METRIC OPTIONS F-UK-KTS
    echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    '.$weather34F.'</a>';  
     echo '<a href="?units=uk" alt="UK Units" title="UK Units"> 
     '.$weather34UK.'</a>';  
     echo '<a  href="?units=knots" alt="Wind Knots" title="Wind Knots">
     '.$weather34KTS.'</a>';      
  }  

  else if ($units=='scandinavia'){ // MS OPTIONS F-C-KTS
    echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    '.$weather34F.'</a>'; 
    echo '<a  href="?units=metric" alt="Metric Units" title="Metric Units">
    '.$weather34C.'</a>';       
    echo '<a  href="?units=knots" alt="Wind Knots" title="Wind Knots">
    '.$weather34KTS.'</a>';       
  }  
  else if ($units=='knots'){   // KNOTS OPTIONS F-C-UK
    echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    '.$weather34F.'</a>';  
    echo '<a  href="?units=metric" alt="Metric Units" title="Metric Units">
    '.$weather34C.'</a>'; 
    echo '<a href="?units=uk" alt="UK Units" title="UK Units">     
    '.$weather34UK.'</a>';   
   } 
   
   else if ($units==''){   // default
    echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    '.$weather34F.'</a>';  
    echo '<a  href="?units=metric" alt="Metric Units" title="Metric Units">
    '.$weather34C.'</a>'; 
    echo '<a href="?units=uk" alt="UK Units" title="UK Units">     
    '.$weather34UK.'</a>';   
   } 
?>

<a href="outlookwu.php" data-lity alt="5 day Forecast" title="5 day Forecast">
<?php echo $weather34fore?></a>

<a href="outlookwutext.php" data-lity alt="Summary" title="Summary Forecast">
<?php echo $weather34foretxt?></a>

<a href="consolecharts.php" alt="Daily Charts" title="Daily Charts">
<?php echo $weather34chart2?></a>

<a href="weather34-almanac.php" alt="Almanac" title="Almanac">
<?php echo $weather34alm?></a>

<?php if ($languages == "yes") {?>
<a href="weather34-tv.php?lang=<?php echo $defaultlanguage;?>"><span style="text-transform:uppercase"><?php echo $weather34language1;?></span></a>
<a href="weather34-tv.php?lang=<?php echo $defaultlanguage2;?>"><span style="text-transform:uppercase"><?php echo $weather34language2;?></span></a>
<?php };?>

<div class="weather34-rightfootericons">
<a href="index.php" alt="weather34 desktop version" title="weather34 desktop version">
<?php echo $weather34desktop;?></a>

<a  href="weather34-template-legend.php" data-lity alt="weather34 template legend " title="weather34 template legend">  
  <?php echo $weather34hinfo;?></a>

<a  href="info.html" data-lity alt="weather34 template info  " title="weather34 template info">
<?php echo $weather34copyr;?></a>

<a href="weather34-tv.php" alt="refresh this dashboard " title="weather34 refresh this dashboard ">
<?php echo $weather34refr?></a></div>
  
 </body></html>