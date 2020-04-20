<?php
/* 
-----------------
Language Translation File for Weather34 Standalome
Language: Catalan
Translated by: Josep
Developed By: Brian Underdown/Erik M Madsen
October/November 2016
Revised: April 2020
-----------------
*/
# -----------------------------------------------------
# Day / Months do not edit
# -----------------------------------------------------
$day        = date("l");
$day2       = date("l", time() + 86400);
$daynum     = date("j");
$monthtrans = date("F");
$year       = date("Y");
# -----------------------------------------------------
# -----------------------------------------------------
setlocale(LC_TIME, "es_ES.UTF-8");
$lang                          = array();
// Menu
$lang['Settings'] = 'Paràmetres';
$lang['Layout'] = 'Canviar de tema';
$lang['Lighttheme'] = 'Tema clar';
$lang['Darktheme'] = 'Tema fosc';
$lang['Nonmetric'] = 'US (F)';
$lang['Metric'] = 'mètric (C)';
$lang['UKmetric'] = 'UK (MPH - mètric)';
$lang['Scandinavia'] = 'Scandinavia (M / S)';
$lang['Menú Options'] = 'Opcions de Menú';
$lang['Worldwideearthquakes'] = 'Terratrèmols al món';
$lang['Toggle'] = 'Pantalla sencera';
$lang['contactInfo'] = 'Estació & Informació de contacte';
$lang['Templateinfo'] = 'Colboradores';
$lang['language'] = 'Seleccioneu l idioma';
$lang['Weatherstationinfo'] = 'Informació de lestació';
$lang['Webdesigninfo'] = 'Informació de la plantilla';
$lang['Contact'] = 'Contact';
//days
$lang['Monday'] = 'Dilluns';
$lang['Tuesday'] = 'Dimarts';
$lang['Wednesday'] = 'Dimecres';
$lang['dijous'] = 'Jueves';
$lang['Friday'] = 'divendres';
$lang['Saturday'] = 'Dissabte';
$lang['Sunday'] = 'Diumenge';
// mesos
$lang['January'] = 'Gener';
$lang['Febuary'] = 'Febrer';
$lang['March'] = 'Mar';
$lang['April'] = 'Abril';
$lang['May'] = 'Maig';
$lang['June'] = 'Jun';
$lang['July'] = 'Jul';
$lang['August'] = 'Agost';
$lang['September'] = 'Setembre';
$lang['October'] = 'Oct';
$lang['November'] = 'Nov';
$lang['December'] = 'Desembre';
//temperature
$lang['Temperature'] = 'Temperatura';
$lang['Feelslike'] = 'Sensació';
$lang['Humidity'] = 'Humitat';
$lang['Dewpoint'] = 'Punt de rosada';
$lang['Trend'] = 'Tend';
$lang['Heatindex'] = 'Índex Calor';
$lang['windchill'] = 'Sensació';
$lang['Tempfactors'] = 'Factor de temp';
$lang['Nocautions'] = 'No precaucions';
$lang['Wetbulb'] = 'T. condensació ';
$lang['dry'] = '& Seco';
$lang['verydry'] = '& Molt sec';
//new feature temperature feels
$lang['FreezingCold'] = 'Gelada';
$lang['FeelingVeryCold'] = 'Molt de fred';
$lang['FeelingCold'] = 'Fred';
$lang['FeelingCool'] = 'Sensació de fred';
$lang['FeelingComfortable'] = 'Agradable';
$lang['FeelingWarm'] = 'Calor';
$lang['FeelingHot'] = 'Sensació de Calor';
$lang['FeelingUncomfortable'] = 'Sensació incomoda';
$lang['FeelingVeryHot'] = 'Calor elevat';
$lang['FeelingExtremelyHot'] = 'Calor extrem';
//wind
$lang['Windspeed'] = 'Velocitat';
$lang['Gust'] = '&nbsp;&nbsp;&nbsp;Ràfega';
$lang['Direction'] = 'Direcció';
$lang['Gusting'] = 'a ratxes a';
$lang['Blowing'] = 'Bufant a';
$lang['Wind'] = 'Vent';
$lang['Wind Run'] = 'Vent Run';
$lang['AvgSpeedToday'] = 'Mitjana Avui';
$lang['10 minutes'] = '10 min';
$lang['Avg Wind'] = 'Mitjana';

// Wind phrases for Beaufort scale for windspeed area
$lang['Calm'] = 'Calma';
$lang['Lightair'] = 'Vent lleuger';
$lang['Lightbreeze'] = 'Brisa lleugera';
$lang['Gentelbreeze'] = 'Brisa suau';
$lang['Moderatebreeze'] = 'Brisa moderada';
$lang['Freshbreeze'] = 'Brisa fresca';
$lang['Strongbreeze'] = 'Brisa forta';
$lang['Neargale'] = 'Vendaval';
$lang['Galeforce'] = 'Vendaval';
$lang['Stronggale'] = 'Fort vendaval';
$lang['Storm'] = 'Tempesta';
$lang['Violentstorm'] = 'Tempesta violenta';
$lang['Hurricane'] = 'Huracà';
// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions'] = 'Calma';
$lang['LightBreezeattimes'] = 'Vent lleuger';
$lang['MildBreezeattimes'] = 'Brisa suau';
$lang['ModerateBreezeattimes'] = 'Brisa moderada';
$lang['FreshBreezeattimes'] = 'Brisa fresca';
$lang['StrongBreezeattimes'] = 'Brisa forta';
$lang['NearGaleattimes'] = 'Frescachón';
$lang['GaleForceattimes'] = 'Temporal';
$lang['StrongGaleattimes'] = 'Temporal fort';
$lang['StormConditions'] = 'Temporal dur';
$lang['ViolentStormConditions'] = 'Temporal molt dur';
$lang['HurricaneConditions'] = 'Temporal huracanat';
$lang['Avg'] = 'Mitjana';
$lang['Avg-Dir'] = 'Mitjana'; // used for compass
//wind direction compass
$lang['Northdir'] = 'Del <span> Nord <br> </span>';
$lang['NNEdir'] = 'Nord Nord a <span> Este </span>';
$lang['NEdir'] = 'Nord <span> Este a </span>';
$lang['ENEdir'] = 'Este Norte a <span> Este </span>';
$lang['Eastdir'] = "Del <span> Este <br> </span>";
$lang['ESEdir'] = 'Este Sur <br> <span> Este </span>';
$lang['SEdir'] = 'On <span> Este </span>';
$lang['SSEdir'] = 'Sur Sur <br> <span> Este </span>';
$lang['Southdir'] = 'Del <span> Sur </span>';
$lang['SSWdir'] = 'On Sur <br> <span> Oest </span>';
$lang['SWdir'] = 'On <span> Oest </span>';
$lang['WSWdir'] = 'Del <span> Oest </span>';
$lang['Westdir'] = 'Oest Nord a <span> Oest </span>';
$lang['WNWdir'] = 'Oest Nord a <span> Oest </span>';
$lang['NWdir'] = 'Nord <span> Oest</span>';
$lang['NNWdir'] = 'Nord Nord a <span> Oest </span>';
//wind direction avg
$lang['North']                  = 'Norte';
$lang['NNE']                    = 'NNE';
$lang['NE']                     = 'NE';
$lang['ENE']                    = 'ENE';
$lang['East']                   = 'Este ';
$lang['ESE']                    = 'ESE';
$lang['SE']                     = 'SE';
$lang['SSE']                    = 'SSE';
$lang['South']                  = 'Sur';
$lang['SSW']                    = 'SSO';
$lang['SW']                     = 'SO';
$lang['WSW']                    = 'OSO';
$lang['West']                   = 'Oest';
$lang['WNW']                    = 'ONO';
$lang['NW']                     = 'NO';
$lang['NNW']                    = 'NNO';
// extra wind direction average top module
$lang['NEdirs']                   = 'Norte Est';
$lang['SEdirs']                   = 'Sur Est';
$lang['SWdirs']                   = 'Sur Oest';
$lang['NWdirs']                   = 'Nort Oest';
//rain
$lang['raintoday'] = 'Pluja avui';
$lang['Rate'] = 'Velocitat';
$lang['Rainfall'] = 'Pluja';
$lang['Precip'] = 'precip'; // must be short name do not use full precipatation !!!! ///
$lang['Rain'] = 'Luvia';
$lang['Heavyrain'] = 'Pluja intensa';
$lang['Flooding'] = 'Possible inundació';
$lang['arc de Sant Martí'] = 'Arc de Sant Martí';
$lang['Windy'] = 'Ventos';
$lang['Last Hour'] = 'Ultima Hora';
$lang['Last-Twenty-Four-Hour'] = 'Ultima 24 Hores';
$lang['Last-Ten-Minutes'] = 'Ultima 10 minuts';
$lang['Snow Accumulation'] = 'Acumulació Neu';
$lang['Rain Accumulation'] = 'Acumulació Luvia';
$lang['Accumulation'] = 'Acumulació';
$lang['Clear'] = 'Tro';
//sun -moon-daylight-darkness
$lang[ 'Sun'] = 'Sol';
$lang[ 'Moon'] = 'Lluna';
$lang[ 'Sunrise'] = 'Alba';
$lang[ 'Sunset'] = 'Posta de sol';
$lang[ 'Moonrise'] = 'Sortida de lluna';
$lang[ 'Moonset'] = 'Posada de lluna';
$lang[ 'Night'] = 'Nit';
$lang[ 'Day'] = 'Dia';
$lang[ 'Nextnewmoon'] = 'Lluna nova';
$lang[ 'Nextfullmoon'] = 'Lluna plena';
$lang[ 'Luminance'] = 'Il·luminació';
$lang[ 'Moonphase'] = 'Fase lunar';
$lang[ 'Estimated'] = 'Estimada';
$lang[ 'Daylight'] = 'Llum de dia';
$lang[ 'Daylight1'] = 'Llum de dia';
$lang[ 'Darkness'] = 'Foscor';
$lang[ 'Darkness1'] = 'Foscor';
$lang[ 'Daysold'] = 'dies d antiguitat';
$lang[ 'Belowhorizon'] = 'sota el Real horitzó';
$lang[ 'Mintill'] = 'a Mins fins a';
$lang[ 'Till'] = 'Per a';
$lang['Minago'] = 'Fa minuts';
$lang['Hrs'] = 'hrs';
$lang['Min'] = 'min';
$lang['TotalDarkness'] = 'Foscor total';
$lang['TotalDaylight'] = 'Llum del dia total';
$lang['First Light'] = 'Primera Llum';
$lang['Last Ligt'] = 'Darrera Llum';
$lang['Below'] = 'Està per sota de lhoritzó';
$lang['Newmoon'] = 'Lluna nova';
$lang['Waxingcrescent'] = 'Lluna creixent';
$lang['Firstquarter'] = 'Quart creixent';
$lang['Waxinggibbous'] = 'Lluna minvant';
$lang['Fullmoon'] = 'Lluna plena';
$lang['Waninggibbous'] = 'gibbosa minvant';
$lang['Lastquarter'] = 'Quart minvant';
$lang['Waningcrescent'] = 'Creixent minvant';
$lang['Set'] = 'Conjunt';
$lang['Rise'] = 'Augment';
$lang['Daylight Left'] = 'A lPosta de sol';
$lang['Darkness Left'] 			= '&nbsp;&nbsp;&nbsp;A lAlba';
//trends
$lang['Falling'] = 'Baixant';
$lang['Rising'] = 'Pujant';
$lang['Steady'] = 'Estable';
$lang['Rapidly'] = 'Ràpidament';
$lang['Temp'] = 'Temp';
//Solar-UV
//uv
$lang['Nocaution'] = 'No <color> precaució </ color> requerida';
$lang['Wearsunglasses'] = 'Utilitza <color> ulleres de sol </ color> en dies assolellats';
$lang['Stayinshade'] = 'Romandre a lombra prop de lmig dia quan el <color> sol </ color> és fort';
$lang['Reducetime'] = 'Reduir el temps en el <color> s0l </ color> entre 10 am-4pm';
$lang['Minimize'] = 'Reduir a el mínim <color> sol </ color> exposicio entre 10 am-4pm';
$lang['Trytoavoid'] = 'Tractar devitar el <color> sol </ color> exposicio entre 10 am-4pm';
// solar
$lang['Poor'] = 'Radiació <color> a Baixa </ color>';
$lang['Low'] = 'Radiació a <color> Baixa </ color>';
$lang['Moderate'] = 'Radiació a <color> Moderada </ color>';
$lang['Good'] = 'Radiació a <color> Fort </ color>';
$lang['Solarradiation'] = 'Radiació Solar';
//current sky
$lang['Currentsky'] = 'Amb. actuals ';
$lang['Currently'] = 'Actualment';
$lang['Cloudcover'] = 'Cobert de núvols';
// Notifications
$lang['Nocurrentalert'] = 'No hi ha alertes meteorològiques';
$lang['Windalert'] = 'Ràfegues de vent a';
$lang['Tempalert'] = 'Alta temperatura';
$lang['Heatindexalert'] = 'Precaució de calor';
$lang['Windchillalert'] = 'Precaució sensació tèrmica';
$lang['Dewpointalert'] = 'Humitat incòmoda';
$lang['Dewpointcolderalert'] = 'Humitat incòmoda';
$lang['Feelslikecolderalert'] = 'Sensació de Fred';
$lang['Feelslikewarmeralert'] = 'Sensació de Calor';
$lang['Rainratealert'] = 'per / hr <span> Pluja';
// Earthquake Notifications
$lang['Regional'] = 'Terratrèmol regional';
$lang['Significant'] = 'Terratrèmols importants';
$lang['Nosignificant'] = 'Terratrèmols no significatius';
//Main page
$lang['Barometer'] = 'Barometre';
$lang['UVSOLAR'] = 'UV | Dades Sol ';
$lang['Earthquake'] = 'Terratremols';
$lang['Daynight'] = 'Dia & Nit Informació';
$lang['SunPosition'] = 'Sun Position';
$lang['Location'] = 'Ubicació';
$lang['maquinari'] = 'maquinari';
$lang['Rainfalltoday'] = 'Pluja avui';
//$lang['Windspeed']              = ' Viento';
$lang[ 'Winddirection'] = 'Adreça de lVent';
$lang[ 'Measured'] = 'Mesurat avui';
$lang[ 'Forecast'] = 'Prevision';
$lang[ 'Forecastahead'] = 'Pronostico proper';
$lang[ 'Forecastsummary'] = 'Resum previsió';
$lang[ 'WindGust'] = 'Vel. vent | Ratxes ';
$lang[ 'Hourlyforecast'] = 'Prevision horària';
$lang[ 'Significantearthquake'] = 'Terratrèmols importants';
$lang[ 'Regionalearthquake'] = 'Terratrèmol regional';
$lang[ 'Average'] = 'Mitjana';
$lang[ 'Notifications'] = 'Notificacion d Alerta';
$lang[ 'Indoor'] = 'Interior';
$lang[ 'Today'] = 'Avui';
$lang[ 'Tonight'] = 'Nit';
$lang[ 'Tomorrow'] = 'Demà';
$lang[ 'Tomorrownight'] = 'Demà nit';
$lang[ 'Updated'] = 'actualització';
$lang[ 'Meteor'] = 'Meteorit Informació';
$lang[ 'Firerisk'] = 'Risc d incendi';
$lang[ 'localtime'] = 'Temps local';
$lang[ 'Nometeor'] = 'No meteorits';
$lang[ 'LiveWebCam'] = 'Càmera web en viu';
$lang[ 'Online'] = 'En línia';
$lang[ 'desconnectat'] = 'fora de línia';
$lang[ 'Weatherstation'] = 'Estacion';
$lang[ 'Cloudbase'] = 'Base Núvols';
$lang[ 'uvalert'] = 'Precaució UVINDEX';
$lang[ 'Max'] = 'Max';
$lang[ 'Min'] = 'Min';
$lang[ 'Almanac'] = 'Almanac';
$lang[ 'Weather Data Provided By'] = 'Weather Data Provided By';
$lang[ 'Airport'] = 'Aeroport Metar';
$lang[ 'Weather Station'] = 'Estació Meteorològica';
$lang[ 'Information'] = 'Informació';
$lang[ 'Operational Since'] = 'Operacional Des de';
$lang[ 'Battery'] = 'Bateria';
$lang[ 'Installed'] = 'Instal·lat';
$lang[ 'Interface Uptime'] = 'Temps d activitat';
$lang[ 'Meteobridge Interface'] = 'Meteobridge Interfície';
$lang[ 'GoodBattery'] = 'Bé';
$lang[ 'ReplaceBattery'] = 'Canvi';
$lang[ 'ConditionBattery'] = 'Condició';

//earthquake TOP MODULE 10 July 2017
$lang[ 'MicroE'] = 'Micro Earthquake';
$lang[ 'minore'] = 'petit Terratrèmol';
$lang[ 'LightE'] = 'Light Earthquake';
$lang[ 'ModerateE'] = 'Terratrèmol moderat';
$lang[ 'Stronge'] = 'Fort terratrèmol';
$lang[ 'MAJORE'] = 'Major Earthquake';
$lang[ 'greate'] = 'Great Earthquake';
$lang[ 'Regionale'] = 'Regional';
$lang[ 'Conditions'] = 'Condicions';
$lang[ 'Cloudbase Height'] = 'Base de núvols';
$lang[ 'Station'] = 'Estacion';
$lang[ 'Detailed Forecast'] = 'Prevision detallada';
$lang[ 'Summary Outlook'] = 'Resum';
// Air Quality
$lang[ 'Hazordous'] = 'Condicions perligrosas';
$lang[ 'VeryUnhealthy'] = 'Molt insalubre';
$lang[ 'Unhealthy'] = 'Aire Insalubre';
$lang[ 'UnhealthyFS'] = 'Insalubre';
$lang[ 'Moderate'] = 'Moderada qualitat de lAire';
$lang[ 'Good'] = 'Bona calitat de lAire';
$lang[ 'Air Quality'] = 'Qualitat de lAire';
#notification additions
$lang['notificationTitle'] = 'Notificacions';
$lang['notificationAlert'] = "Alerta";
$lang['notificationLowBatteryAlert'] = "Alerta de bateria baixa";
$lang['notificationConsoleLowBattery'] = "La bateria de la consola és baixa";
$lang['notificationStationLowBattery'] = "La bateria de lestació és baixa";
$lang['notificationUVIndex'] = "Atenció a líndex UV";
$lang['notificationUVExposure'] = "Reduir lexposició al sol";
$lang['notificationHeatExaustion'] = "Esgotament de calor";
$lang['notificationExtremeWind'] = "Avís de vent extrem";
$lang['notificationGustUpTo'] = "Propòsits fins";
$lang['notificationSeekShelter'] = "Cerqueu refugi <notifyred><b>immediatament</b> </notifyred>";
$lang['notificationHighWindWarning'] = "Avís de gran vent";
$lang['notificationSustainAvg'] = "Avg sostinguda";
$lang['notificationWindAdvisory'] = "Assessorament eòlic";
$lang['notificationFreezing'] = "Per sota de la congelació";
//weatherflow lightning
$lang['Last Three Hours'] = "Últimes 3 hores";
$lang['Distance'] = "Distància";
$lang['Detected'] = "Últimes Detectat";
$lang['Contraataca'] = "S ha detectat";
$lang['Contraataca Recorded'] = "Raig Gravat";
$lang['Total'] = "Total";
$lang['Last Strike Detected'] = "Últimes Detectat";
$lang['Lightning Today'] = "&nbsp;&nbsp;&nbsp;Avui "; // today
$lang['Quiet'] = "Tranquil";
$lang['Active'] = "Actiu";
$lang['Ago'] = "Fa";
$lang['Now'] = "Ara";
#metar conditions
$lang[ 'Snow-Metar'] = "Neu";
$lang[ 'Light Rain-Metar'] = "Pluja Lleugera";
$lang[ 'Heavy Rain-Metar'] = "Pluja Pesada";
$lang[ 'Moderate Rain-Metar'] = "Pluja Moderada";
$lang[ 'Light Snow-Metar'] = "Neu Lleugera";
$lang[ 'Moderate Snow-Metar'] = "Neu Moderada";
$lang[ 'Snow Grains-Metar'] = "Grans de Neu";
$lang[ 'Sleet-Metar'] = "Aiguaneu";
$lang[ 'Foggy-Metar'] = "Brumoso";
$lang[ 'Misty-Metar'] = "Brumoso";
$lang[ 'Hail and Rain-Metar'] = "Calamarsa i Pluja";
$lang[ 'Ice Crystals-Metar'] = "Cristalls de Gel";
$lang[ 'Ice Pellets-Metar'] = "Cristalls de Gel";
$lang[ 'Clear-Metar'] = "Tro";
$lang[ 'Sand Storm-Metar'] = "Tempesta de Sorra";
$lang[ 'Volcanic Ash-Metar'] = "Cendra Volcànica";
$lang[ 'Tornado-Metar'] = "Tornat";
$lang[ 'Water Sprout-Metar'] = "Tornat";
$lang[ 'Clear-Metar'] = "Cel Net";
$lang[ 'Mostly Clear-Metar'] = "Cel Clar";
$lang[ 'Fair-Metar'] = "Parcialment ennuvolat";
$lang[ 'Mostly Scattered-Metar'] = "Parcialment ennuvolat";
$lang[ 'Mostly Cloudy-Metar'] = "Majorment ennuvolat";
$lang[ 'Overcast-Metar'] = "Clar";
$lang[ 'Clouds-Metar'] = "Clar";
$lang[ 'Conditions-Metar'] = "Condicions";
$lang[ 'Showers-Metar'] = "";
$lang[ 'Rain-Metar'] = "Pluja";
$lang[ 'Lowest'] = '&nbsp;&nbsp;Sota';
$lang[ 'Highest'] = '&nbsp;&nbsp;Alt';
$lang[ 'Yesterday'] = 'Ahir';
//time ago 
$lang['Years'] = 'Anys';
$lang['Year'] = 'Ano';
$lang['Months'] = 'Meses';
$lang['Month'] = 'Mes';
$lang['Day'] = 'Dia';
$lang['Days'] = 'Dias';
$lang['Hours'] = 'Horas';
$lang['Hour'] = 'Hora';
$lang['Minute'] = 'Minutos';
$lang['Minutes'] = 'Minutos';
$lang['Last Rainfall'] = 'Últimes Lluvia';
// més extres
$lang['Particle Info'] = 'Informació sobre partícules';
$lang['Guide'] = 'Guia';
$lang['GOOD'] = 'BON';
$lang['MODERATE'] = 'MODERAR';
$lang['Unhealthy for Groups Sensitive'] = 'No saludable per a grups sensibles';
$lang['Unhealthy'] = 'No saludable';
$lang['(Precautions Obligation)'] = '(Precaucions obligatòries)';
$lang['Very malsano'] = 'Molt poc saludable';
$lang['(Critical Conditions)'] = '(Condicions crítiques)';
$lang['Hazardous'] = 'Perillós';
$lang['(Threatening Life)'] = '(Amenaça de vida)';
$lang['from'] = 'de';
$lang['Regional'] = 'Regionals';
$lang['* Warning Nearby'] = '* Avís proper a prop';
$lang['recent Earthquake'] = 'Terremotos recents';
$lang['Regional Recent Earthquakes'] = 'Terremotos Regionals';

//uv
$lang['Low Caution'] = 'Riesgo Baix';
$lang['Moderate Caution'] = 'Riesgo Moderat';
$lang['High Caution'] = 'Alt Riesgo';
$lang['Very High Caution'] = 'Alt Riesgo';
$lang['Extreme Caution'] = 'Riesgo Extremo';

$lang['Chart Data'] = 'Dades del Gràfic';

$lang['Cooler'] = 'Cooler';
$lang['Feels Warm'] = 'Se sent càlid';
$lang['Malestar'] = 'Malestar';
$lang['Comfortable'] = 'Còmode';
$lang['Feels Colder'] = 'Sensació freda';

$lang['Very Windy'] = 'Molt ventós';
$lang['Windy'] = 'Ventós';
$lang['Breezy'] = 'Breezy';
$lang['Light Winds'] = 'Vent lleuger';

$lang['Saturation'] = 'Saturació';
$lang['High'] = 'Alt';
$lang['Low'] = 'Baix';
$lang['Dark'] = 'Oscuro';
$lang['Light'] = 'La llum';
$lang['Charts'] = 'Gràfic';

$lang['Poor-solar'] = 'Radiació <color> a Baixa </ color>';
$lang['Low-solar'] = 'Radiació a <color> Baixa </ color>';
$lang['Moderate-solar'] = 'Radiació a <color> Moderada </ color>';
$lang['Good-solar'] = 'Radiació a <color> Forta </ color>';

//sun
$lang['Azimuth']='Azimut';
$lang['Elevation']='Elevación';
?>