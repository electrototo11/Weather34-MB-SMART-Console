<?php include('console-settings.php');error_reporting(0); 
//translations for Standalone TEMPLATE UPDATED 11th April 2020 
mb_internal_encoding('UTF-8');mb_http_output('UTF-8');mb_http_input('UTF-8');mb_language('uni');mb_regex_encoding('UTF-8');ob_start('mb_output_handler');
if(isSet($_GET['lang'])){$lang = $_GET['lang'];
// set the cookie to remember 
$_SESSION['lang'] = $lang;setcookie("lang", $lang, time() +3600);}else if(isSet($_SESSION['lang'])){$lang = $_SESSION['lang'];}
else if(isSet($_COOKIE['lang'])){$lang = $_COOKIE['lang'];}else{$lang = $defaultlanguage;}
switch ($lang) {
  //english 	
  case 'en': $lang_file = 'lang.en.php'; setlocale(LC_TIME, "en_EN"); break; 
  //danish
  case 'dk': $lang_file = 'lang.dk.php'; setlocale(LC_TIME, 'danish', 'DK', 'da_DK.ISO8859-1', 'da_DK.utf-8'); break;   
  //dutch
  case 'nl': $lang_file = 'lang.nl.php'; setlocale(LC_TIME, "nl_NL.UTF-8"); break;  
  //german
  case 'de': $lang_file = 'lang.de.php'; setlocale(LC_TIME, "de_DE.UTF-8"); break;  
  //italian
  case 'it':  $lang_file = 'lang.it.php'; setlocale(LC_TIME, "it_IT.UTF-8"); break;  
  //spanish
  case 'es':  $lang_file = 'lang.es.php'; setlocale(LC_TIME, "es_ES.UTF-8"); break;  
 //swedish
  case 'sv': $lang_file = 'lang.sv.php';  setlocale(LC_TIME, "sv_SE.UTF-8"); break;  
 //french  
  case 'fr': $lang_file = 'lang.fr.php'; setlocale(LC_TIME, "fr_FR.UTF-8"); break;   
 //catalan 
  case 'ca': $lang_file = 'lang.ca.php'; setlocale(LC_TIME, "es_ES.UTF-8"); break; 
 
 //default 
  default: $lang_file = 'lang.'.$defaultlanguage.'.php'; setlocale(LC_TIME, ""); }
  include_once 'languages/'.$lang_file;

  if (array_key_exists('theme', $_GET) && ($_GET['theme'] == 'dark' || $_GET['theme'] == 'light')){SetCookie('theme', $_GET['theme'], time()+15552000);
    $theme = $_GET['theme'];} else if (array_key_exists('theme', $_COOKIE) && ($_COOKIE['theme'] == 'dark' || $_COOKIE['theme'] == 'light')) {
    $theme = $_COOKIE['theme'];}
?>