<?php include_once('livedata.php');include_once('updater5.php');date_default_timezone_set($TZ);?>
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
<div class="desktoplink4"><?php echo $chartcalendar; echo date('Y');?> Charts</div></div>
<div class="desktoplink3"><?php echo $headerlocation; echo $stationName?>
<div class="online"><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $wirelessoffline;else echo $wireless?></div>
</div></div>  
  <ul class="grid-container">
    <li><div id=temperature></div></li>    
    <li><div id=dewpoint></div></li>
    <li><div id=barometer></div></li>

    <li><div id=rain></div></li>
    <li><div id=wind></div></li>    
    <li><div id=gust></div></li>    

    <li2><div id=moon></div></li2> 
    <li2><div id=sun></div></li2> 
    <li2><div id=time-date></div></li2>  
  </ul>
  <div class="nav-bottom-charts2">
    <a href="index.php" alt="previous page" title="previous page"><?php echo $backhome?></a>

    <a href=<?php if ($theme == 'dark') { echo '?theme=light';} else {echo '?theme=dark';} ?>
    <?php if ($theme == 'dark') { echo 'alt="Light Mode" title="Light Mode"';} else {echo 'alt="Dark Mode" title="Dark Mode"';} ?> >
    <?php //theme
    if ($theme == 'dark') {echo '<div class="weather34-theme-icon">'.$weather34theme.'</div>';} 
    else {echo '<div class="weather34-theme-icon">'.$weather34theme.'</div>';}?></a>


 <a href="consolecharts.php" alt="Today Charts" title="Today Charts">
      <div class="weather34-sphere-orange"></div>
          <bottom-bar-text>Today</bottom-bar-text></a>

       <a href="consolecharts-month.php" alt="<?php echo date('M');?> Charts" title="<?php echo date('M');?> Charts">
       <div class="weather34-sphere-blue"></div>
          <bottom-bar-text><?php echo date('F');?></bottom-bar-text></a>   

       <?php if ($display2019=='yes'){echo '
        <a href="consolecharts-2019.php">
        <div class="weather34-sphere-yellow"></div>
          <bottom-bar-text>2019</bottom-bar-text></a>';}
       ?>

<?php if ($displayalmanac=='yes'){
      echo '<a href="weather34-almanac.php" alt="Almanac" title="Almanac">
    <div class="weather34-chart-icons">'.$almanacicon.'</a></div>';}
      ?>    

       <chartpage><?php echo $lang['Updated'] ?> <?php 
       $dayfile=date('Y');$forecastime=filemtime('weather34charts/'.$dayfile.'.csv');echo strftime("%A %d %B %Y %l:%M %p",$forecastime);?>     
      </chartpage>

      <a  href="info.html" data-lity alt="weather34 template info  " title="weather34 template info">
<div class="weather34-copyright-icons"><?php echo $weather34copyright;?></a></div> 

<div class="weather34-refreshicon">
<a href="consolecharts-year.php" alt="refresh this dashboard " title="weather34 refresh this dashboard ">
<?php echo $weather34refreshicon?></a></div>