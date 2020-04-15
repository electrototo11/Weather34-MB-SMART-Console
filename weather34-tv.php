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



<script type="text/javascript">
//weather34 android tv pop up
$(document).ready(function() {
		var id = '#weather34androidtvdialog';	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);		
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width(); 
		//transition effect
		$(id).fadeIn(2000); 	
		//fade out after delay		
		$('#mask, .window').delay(4000).fadeOut(1000);	
});
</script>
<div id="weather34popup">
<div id="weather34androidtvdialog" class="window">
<center>Designed For SMART TV </center>
  <center>
  <svg width="350" viewBox="-74.25 -21.13475 643.5 126.8085"><defs>
  <clipPath id="a" clipPathUnits="userSpaceOnUse"><path d="M619.944 203.948h59.797v10.213h-59.797z"/></clipPath>
</defs><g transform="matrix(8.27808 0 0 -8.27808 -5131.948 1772.8411)" clip-path="url(#a)">
  <path d="M623.8155 205.7036c-1.121 0-2.028.937-2.028 2.102 0 1.143.907 2.094 2.028 2.094.745 0 1.49-.347 1.807-.981.022-.044.051-.103.051-.177v-1.858c0-.037-.022-.118-.037-.14-.346-.634-1.054-1.04-1.821-1.04m3.68-1.6v7.374h-1.822v-.619c-.509.494-1.202.766-2.057.766-2.087 0-3.672-1.696-3.672-3.819 0-2.132 1.585-3.85 3.672-3.85.855 0 1.548.288 2.057.782v-.634zm7.912 0v3.989c0 1.962-1.526 3.532-3.473 3.532-1.954 0-3.473-1.57-3.473-3.532v-3.989h1.821v3.989c0 .966.679 1.704 1.652 1.704.966 0 1.652-.738 1.652-1.704v-3.989zm4.631 1.6c-1.121 0-2.028.937-2.028 2.102 0 1.143.907 2.094 2.028 2.094.745 0 1.453-.369 1.807-.981.022-.044.051-.103.051-.177v-1.866c0-.037-.022-.11-.036-.132-.347-.634-1.055-1.04-1.822-1.04m3.68-1.6v9.586h-1.822v-2.831c-.508.494-1.202.789-2.057.789-2.087 0-3.672-1.719-3.672-3.842 0-2.132 1.585-3.85 3.672-3.85.855 0 1.549.288 2.057.782v-.634zm2.787 0v3.938c0 1.165.612 1.784 1.777 1.784v1.799c-2.345 0-3.598-1.246-3.598-3.583v-3.938zm5.759 1.688c-1.106 0-2.005.9-2.005 2.014 0 1.106.899 2.005 2.005 2.005 1.121 0 2.014-.899 2.014-2.005 0-1.114-.893-2.014-2.014-2.014m0-1.836c2.132 0 3.857 1.718 3.857 3.85 0 2.123-1.725 3.819-3.857 3.819-2.123 0-3.849-1.696-3.849-3.819 0-2.132 1.726-3.85 3.849-3.85m5.597 8.082c.583 0 1.055.48 1.055 1.062 0 .59-.472 1.062-1.055 1.062-.582 0-1.054-.472-1.054-1.062 0-.582.472-1.062 1.054-1.062m.907-.56h-1.822v-7.374h1.822zm4.698-5.774c-1.121 0-2.028.937-2.028 2.102 0 1.143.907 2.094 2.028 2.094.745 0 1.452-.369 1.806-.981.023-.044.052-.103.052-.177v-1.873c0-.037-.022-.103-.037-.125-.346-.634-1.054-1.04-1.821-1.04m3.679-1.6v9.586h-1.821v-2.831c-.509.494-1.202.766-2.057.766-2.087 0-3.673-1.696-3.673-3.819 0-2.132 1.586-3.857 3.673-3.857.855 0 1.548.295 2.057.789v-.634z" fill="#77c159"/><path d="M676.7471 204.1033l2.994 7.382h-1.504l-2.449-6.401h.509l-2.455 6.393h-1.549l2.994-7.374zm-4.815-.088l.007 1.312h-.162c-1.069 0-1.822.642-1.822 1.726v3.207h1.925v1.217h-1.925v1.999h-1.334v-6.423c0-1.91 1.239-3.038 3.156-3.038z" fill="#868686"/></g></svg>
</center>
<center><a href="https://weather34.com/homeweatherstation" alt="weather34" titlle="weather34" >Weather34 &copy; 2015-<?php echo date('Y')?></a></center>
</div></div>
</body></html>