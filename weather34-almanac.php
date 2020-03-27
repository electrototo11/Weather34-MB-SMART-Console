<?php 
  #######################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE    #	                         
	# https://weather34.com/homeweatherstation/index.html #											                        
	# 	                                                  #                                             
	# 	Release: March 2020                 			        #	  	                                               
	# 	  Almanac Console Version                         #                                             
	#   https://www.weather34.com 	                      #                                            
	#######################################################

include_once('livedata.php');include_once('updater-almanac.php');include('common.php');?>
<!DOCTYPE html>
<html><head>
  <title>Weather34 Almanac History for Sinanoba Istanbul </title>
  <meta name="title" content="Weather34 Almanac History for Sinanoba Istanbul">
  <meta name="description" content="Weather34 Almanac History for Sinanoba Istanbul">
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=yes">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#01a4b4">
<meta name="apple-mobile-web-app-title" content="Weather34 Almanac History for Sinanoba Istanbul">
<meta name="mobile-web-app-capable" content="yes">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<meta name="apple-mobile-web-app-title" content="Weather34">
<meta name="application-name" content="Weather34 Console">
<link href="console-<?php echo $theme ?>.css?version=<?php echo filemtime('console-'. $theme .'.css') ?>" rel="stylesheet prefetch">
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
<div class="weather34-indoor"><?php echo $timeicon?> <div id="weather34clock4"></div>
<div class="desktoplink4"><?php echo $info;?> Almanac <?php echo $mbyear;?>-<?php echo date('Y');?></div>
</div>



</div></div>  

    <ul class="grid-container">
      <li><div id=temperature></div></li>
      <li><div id=humidity></div></li>
      <li><div id=dewpoint></div></li>

      <li><div id=wind></div></li>   
      <li><div id=rain></div></li>
      <li><div id=barometer></div></li>

      <?php if ($uvsensor=='yes'){;?>      
      <li><div id=uvindex></div></li>   
      <li><div id=solar></div></li> 
      <li><div id=clock></div></li> 
      <?php ;}?>

    <li2><div id=position10></div></li2> 
    <li2><div id=position11></div></li2> 
    <li2><div id=position12></div></li2>  
    <li3><div id=position13></div></li3>  
    </ul>



<div class="nav-bottom">
<a href="index.php" alt="previous page" title="previous page"><?php echo $backhome?></a>

<a href=<?php if ($theme == 'dark') { echo '?theme=light';} else {echo '?theme=dark';} ?>
    <?php if ($theme == 'dark') { echo 'alt="Light Mode" title="Light Mode"';} else {echo 'alt="Dark Mode" title="Dark Mode"';} ?> >
    <?php //theme
    if ($theme == 'dark') {echo '<div class="weather34-theme-icon">'.$weather34theme.'</div>';} 
    else {echo '<div class="weather34-theme-icon">'.$weather34theme.'</div>';}?></a>

     <?php 
  if ($units=='us') {  // NON METRIC OPTIONS C-MS-KTS   
    echo '<a  href="?units=metric" alt="Metric Units" title="Metric Units">
    <div class="weather34-unit-icon">'.$weather34C.'</div></a>'; 
    echo '<a href="?units=scandinavia" alt="MS Units" title="MS Units"> 
    <div class="weather34-unit-icon">'.$weather34MS.'</div></a>'; 
    echo '<a  href="?units=knots" alt="Wind Knots" title="Wind Knots">
    <div class="weather34-unit-icon">'.$weather34KTS.'</div></a>';     
  }
  else if ($units=='uk'){ // UK OPTIONS F-C-KNOTS
    echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    <div class="weather34-unit-icon">'.$weather34F.'</div></a>';
     echo '<a  href="?units=metric" alt="Metric Units" title="Metric Units">
     <div class="weather34-unit-icon">'.$weather34C.'</div></a>';
    echo '<a  href="?units=knots" alt="Wind Knots" title="Wind Knots">
    <div class="weather34-unit-icon">'.$weather34KTS.'</div></a>';     
  }  
  else if ($units=='metric'){ // METRIC OPTIONS F-UK-KTS
    echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    <div class="weather34-unit-icon">'.$weather34F.'</div></a>';  
     echo '<a href="?units=uk" alt="UK Units" title="UK Units"> 
     <div class="weather34-unit-icon">'.$weather34UK.'</div></a>';  
     echo '<a  href="?units=knots" alt="Wind Knots" title="Wind Knots">
     <div class="weather34-unit-icon">'.$weather34KTS.'</div></a>';      
  }  

  else if ($units=='scandinavia'){ // MS OPTIONS F-C-KTS
    echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    <div class="weather34-unit-icon">'.$weather34F.'</div></a>'; 
    echo '<a  href="?units=metric" alt="Metric Units" title="Metric Units">
    <div class="weather34-unit-icon">'.$weather34C.'</div></a>';       
    echo '<a  href="?units=knots" alt="Wind Knots" title="Wind Knots">
    <div class="weather34-unit-icon">'.$weather34KTS.'</div></a>';       
  }  
  else if ($units=='knots'){   // KNOTS OPTIONS F-C-UK
    echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    <div class="weather34-unit-icon">'.$weather34F.'</div></a>';  
    echo '<a  href="?units=metric" alt="Metric Units" title="Metric Units">
    <div class="weather34-unit-icon">'.$weather34C.'</div></a>'; 
    echo '<a href="?units=uk" alt="UK Units" title="UK Units">     
    <div class="weather34-unit-icon">'.$weather34UK.'</div></a>';   
   } 
   
   else if ($units==''){   // default
    echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    <div class="weather34-unit-icon">'.$weather34F.'</div></a>';  
    echo '<a  href="?units=metric" alt="Metric Units" title="Metric Units">
    <div class="weather34-unit-icon">'.$weather34C.'</div></a>'; 
    echo '<a href="?units=uk" alt="UK Units" title="UK Units">     
    <div class="weather34-unit-icon">'.$weather34UK.'</div></a>';   
   } 
?>

<a href="outlookwu.php" data-lity alt="5 day Forecast" title="5 day Forecast">
<div class="weather34-tab-icons"><?php echo $weatherforecast?></a></div>

<a href="outlookwutext.php" data-lity alt="Summary" title="Summary Forecast">
<div class="weather34-tab-icons"><?php echo $weatherforecast2?></a></div>

<a href="consolecharts.php" alt="Daily Charts" title="Daily Charts">
<div class="weather34-chart-icons"><?php echo $charts?></a></div>

<a href="weather34-almanac.php" alt="Almanac" title="Almanac">
<div class="weather34-chart-icons"><?php echo $almanacicon?></a></div>


<?php 
//weather34 smart tv option
if ($smarttv=='yes'){echo '
  <div class="weather34-desktopicon-link" style="margin-right:-10px;margin-top:-27px"><a href="weather34-tv.php" alt="smart tv version" title="smart tv version">'.$weather34tvicon.'</a>
</div>
';}
?> 

  <a  href="info.html" data-lity alt="weather34 template info  " title="weather34 template info">
<div class="weather34-copyright-icons"><?php echo $weather34copyright;?></a></div>  