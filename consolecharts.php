<?php include_once('livedata.php');include_once('updater3.php');?>
<!DOCTYPE html><html><head>
<title> <?php echo $stationName;?> Console Charts</title>
<meta name="title" content="<?php echo $stationName;?> Console Charts">
<meta name="description" content="Charts for <?php echo $stationName;?>">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=yes">
<meta name="mobile-web-app-capable" content="yes">
<link rel="mask-icon" href="safari-pinned-tab.svg" color="#01a4b4">
<meta name="apple-mobile-web-app-title" content="Weather34 Console Charts">
<meta name="application-name" content="Weather34 Console Charts">
<link rel="apple-touch-icon" sizes="57x57" href="appicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="appicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="appicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="appicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="appicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="appicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="appicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="appicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="appicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="appicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="appicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="appicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="appicons/favicon-16x16.png">
<link rel="manifest" href="site.webmanifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="appicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="msapplication-TileColor" content="#f8f8f8">
<link href="console-<?php echo $theme?>.css?version=<?php echo filemtime('console-'.$theme.'.css')?>" rel="stylesheet prefetch">
<link rel="preload" href="fonts/clock3-webfont.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="fonts/verbatim-regular.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="fonts/verbatim-medium.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="fonts/HelveticaNeue-Medium.woff" as="font" type="font/woff" crossorigin>
<script>function pageLoaded() {document.querySelector("body").style.opacity = 1;}window.onload = pageLoaded;</script>
</head>
<body>
<!-- weather34 NANOSD console flex layout -->
<div class="weather34-tablet">
<div class="fade-in">
<div class="container">
<div class="nav-top">   
<div class="weather34-indoor"><?php echo $timeicon?> <div id="weather34clock4"></div>
<div class="desktoplink4"><?php echo $chartcalendar; echo date($dateFormat);?> Charts</div></div>
<div class="desktoplink3"><?php echo $headerlocation; echo $stationName?>
<div class="online"><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $wirelessoffline;else echo $wireless?></div>
</div></div>
  <ul class="grid-container">
    <li><div id=temperature></div></li>
    <li><div id=humidity></div></li>
    <li><div id=dewpoint></div></li>

    <li><div id=wind></div></li>
    <li><div id=direction></div></li>
    <li><div id=gust></div></li>

    <li><div id=rain></div></li>
    <li><div id=barometer></div></li>
    <li><div id=uvindex></div></li>
    <li3><div id=
    <?php 
    if ($chartoption=='todayuvindexmodule.php'){echo "indoor";}
    else if ($chartoption=='todaysolarmodule.php'){echo "indoor";}
    else if ($chartoption=='todayindoormodule.php'){echo "";}
?> indoor></div></li3>
    

    <li2><div id=moon></div></li2> 
    <li2><div id=sun></div></li2> 
    <li2><div id=time-date></div></li2>  
  </ul>
  <div class="nav-bottom">
  <a href="index.php" data-title="Dashboard"><?php echo $backtohome?></a>

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


<a href="consolecharts-month.php" data-title="<?php echo date('M');?> Charts">
       <div class="weather34-sphere-orange"></div>
          <bottom-bar-text><?php echo date('F');?></bottom-bar-text></a>

          <a href="consolecharts-year.php" data-title="<?php echo date('Y');?> Charts">
       <div class="weather34-sphere-blue"></div>
          <bottom-bar-text><?php echo date('Y');?></bottom-bar-text></a>        
         

       <?php if ($display2019=='yes'){echo '
        <a href="consolecharts-2019.php">
        <div class="weather34-sphere-yellow"></div>
          <bottom-bar-text>2019</bottom-bar-text></a>';}
       ?>     
       
       <chartpage><?php echo $lang['Updated'] ?> <?php 
       $dayfile=date('Y')."/".date('jMY');$forecastime=filemtime('weather34charts/'.$dayfile.'.csv');echo strftime("%A %d %B %Y %l:%M %p",$forecastime);?>     
      </chartpage>
      
     

<div class="weather34-rightfootericons">

<?php 
//weather34 smart tv option
if ($smarttv=='yes'){echo '
<a href="weather34-tv.php" data-title="Smart TV">'. $weather34smtv.'</a>
';}
?>  
<a  href="weather34-template-legend.php" data-lity data-title="Hardware Info">  
<?php echo $weather34hinfo;?></a>

<a  href="info.html" data-lity data-title="Template info">
<?php echo $weather34copyr;?></a>

<a href="consolecharts.php" data-title="Refresh">
<?php echo $weather34refr?></a></div>

</body></html>