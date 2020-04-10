<?php include('settings.php');error_reporting(0); 

//translations for Standalone TEMPLATE UPDATED 2nd November added set locale
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_language('uni');
mb_regex_encoding('UTF-8');
ob_start('mb_output_handler');

if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];

// GET the session  set the cookie
$_SESSION['lang'] = $lang;

setcookie("lang", $lang, time() +3600);
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = $defaultlanguage;
}

switch ($lang) {
//english uk	
  case 'en':
  $lang_file = 'lang.en.php';
  $lang_flag = 'en';
  $lang_option = 'en';
  setlocale(LC_TIME, "en_EN");
  break;   
  
//danish
  case 'dk':
  $lang_file = 'lang.dk.php';
  $lang_flag = 'dk';
  $lang_option = 'en'; 
  setlocale(LC_TIME, 'danish', 'DK', 'da_DK.ISO8859-1', 'da_DK.utf-8');
  break; 
  
  //dutch
  case 'nl':
  $lang_file = 'lang.nl.php';
  $lang_flag = 'nl';
  $lang_option = 'en';
  setlocale(LC_TIME, "nl_NL.UTF-8");
  break;  
  
  //german
  case 'de':
    $lang_file = 'lang.de.php';
    $lang_flag = 'de';
    $lang_option = 'en';
    setlocale(LC_TIME, "de_DE.UTF-8");
    break;
  
  //italian
  case 'it':
  $lang_file = 'lang.it.php';
  $lang_flag = 'it';
  $lang_option = 'en';
  setlocale(LC_TIME, "it_IT.UTF-8");
  break;
  
//spanish
  case 'es':
  $lang_file = 'lang.es.php';
  $lang_flag = 'es';
  $lang_option = 'en';
  setlocale(LC_TIME, "es_ES.UTF-8");
  break;  
  
 //swedish
  case 'sv':
  $lang_file = 'lang.sv.php';
  $lang_flag = 'sv';
  $lang_option = 'sv';
  setlocale(LC_TIME, "sv_SE.UTF-8");
  break;   
  
//french  
   case 'fr':
  $lang_file = 'lang.fr.php';
  $lang_flag = 'fr';
  $lang_option = 'en';
  setlocale(LC_TIME, "fr_FR.UTF-8");
  break;  

//turkish  
  case 'tr':
  $lang_file = 'lang.tr.php';
  $lang_flag = 'tr';
  $lang_option = 'en';
  setlocale(LC_TIME, "tr_TR.UTF-8");
  break;  
  
//default
  default:
  $lang_file = 'lang.'.$defaultlanguage.'.php';
  $lang_flag = $defaultlanguage;
  $lang_option = 'en';
  setlocale(LC_TIME, "");
  }


//path to language files
include_once 'languages/'.$lang_file;

 //lets translate the current month
$themonth=date('M');
if ($themonth=="Dec"){
    $themonth=$lang['December'];
}
else if ($themonth=="Nov"){
    $themonth=$lang['November'];
}
elseif ($themonth=="Oct"){
    $themonth=$lang['October'];
}
elseif ($themonth=="Sep"){
    $themonth=$lang['September'];
}
elseif ($themonth=="Aug"){
    $themonth=$lang['August'];
}

elseif ($themonth=="Jul"){
  $themonth=$lang['July'];
}

elseif ($themonth=="Jun"){
  $themonth=$lang['June'];
}

elseif ($themonth=="May"){
  $themonth=$lang['May'];
}

if ($themonth=="Apr"){
  $themonth=$lang['April'];
}

if ($themonth=="Mar"){
  $themonth=$lang['March'];
}

if ($themonth=="Feb"){
  $themonth=$lang['Febuary'];
}

if ($themonth=="Jan"){
  $themonth=$lang['January'];
}
?>