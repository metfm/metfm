
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href=images/anem.gif>
<meta charset=UTF-8>
<meta name=description content="Μετεωρολογικός Σταθμός Νέων Μουδανιών Χαλκιδικής">
<meta name=keywords content="Mετεωρολογικός Σταθμός Νέων Μουδανιών Χαλκιδικής,Μετεωρολογικός σταθμός,webcam,halkidiki, weather data, halkidiki weather station,nea moudania weather station, steelseries">
<title>Mετεωρολογικός Σταθμός Νέων Μουδανιών Χαλκιδικής</title>
<link rel=stylesheet href=index.css>
<script type=text/javascript>if(screen.width<=800){window.location="https://kairos.moudania.com/mobile.htm"};</script>
</head>
<body>
<header>Mετεωρολογικός  Σταθμός <span style=color:blue;font-weight:bold> Νέων  Μουδανιών</span>  Χαλκιδικής</header>
<ul>
<li class=dropdown>
<a href=javascript:void(0) class=dropbtn>Live web cams!</a>
<div class=dropdown-content>
<a href=http://www.livecameras.gr/up/sithonia.php target=_blank>Aγ. Νικόλαος</a>
<a href=https://www.skylinewebcams.com/el/webcam/ellada/makedonia/chalkidiki/nea-roda.html target=_blank>N.Pόδα</a>
<a href=https://www.meteocam.gr/ChalkidikiPortoCarras target=_blank>N. Μαρμαράς</a>
<a href=https://www.meteocam.gr/ChalkidikiKassandreia target=_blank>Κασσάνδρεια</a>
<a href=https://www.meteocam.gr/ChalkidikiIerissosPort target=_blank>Ιερισσός</a>
<a href=https://www.meteocam.gr/ChalkidikiOuranoupolisPort target=_blank>Ουρανούπολη</a>
<a href=https://www.meteocam.gr/ChalkidikiTrypitiPort target=_blank>Τρυπητή</a>
<a href=https://www.meteocam.gr/ChalkidikiOlympiada target=_blank>Ολυμπιάδα</a>
</div> 
</li>
<li class=dropdown>
<a href=javascript:void(0) class=dropbtn>Μετ.Σταθμοί</a>
<div class=dropdown-content>
<a href=https://www.meteology.gr/neairakleia/ target=_blank>Νέα Ηράκλεια</a>
<a href=http://penteli.meteo.gr/stations/kassandreia/ target=_blank>Κασσανδρεία</a>
<a href=https://www.meteology.gr/ormylia/ target=_blank>Oρμύλια</a>
<a href=http://www.sithoniaweather.gr/ target=_blank>Αγ. Νικόλαος</a>
<a href=http://www.northmeteo.gr/agios-nikolaos/ target=_blank>Αγ. Νικόλαος-2</a>
<a href=http://ormos-panagias.sithoniaweather.gr/pws/ target=_blank>Ορμος Παναγιάς</a>
<a href="http://vourvourou.sithoniaweather.gr/index.php?lang=gr" target=_blank>Βουρβουρού</a>
<a href=http://penteli.meteo.gr/stations/marmaras/ target=_blank>Νέος Μαρμαράς</a>
<a href=http://aristoteliports.gr/weatherierissos/ target=_blank>Ιερισσός</a>
<a href=http://penteli.meteo.gr/stations/stratoni/ target=_blank>Στρατώνι</a>
<a href=http://penteli.meteo.gr/stations/simonopetra/ target=_blank>Μονή Σίμωνος Πέτρας</a>
<a href=http://penteli.meteo.gr/stations/vatopedi/ target=_blank>Μονή Βατοπαιδίου</a>
<a href=http://penteli.meteo.gr/stations/megistilavra/ target=_blank>Μονή Μεγίστης Λάυρας</a>
<a href=https://www.meteology.gr/taxiarchis/ target=_blank>Ταξιάρχης</a>
<a href=https://www.meteology.gr/galatista/ target=_blank>Γαλάτιστα</a>
<a href=http://penteli.meteo.gr/stations/polygyros/ target=_blank>Πολύγυρος</a>
<a href=https://app.weathercloud.net/d2692186305#current/ target=_blank>Παλαιοχωρι</a>
</div>
</li>
<li class=dropdown>
<a href=javascript:void(0) class=dropbtn>Σύνδεσμοι</a>
<div class=dropdown-content>
<a href=today.htm >Στατιστικά σταθμού</a>
<a href=noaa.htm >Aρχεία ΝΟΑΑ</a>
<a href=https://moudania.com/>moudania.com</a>
<a href=http://www.stravon.gr/pinakas/ target=_blank>Στράβων</a>
<a href=https://kairos.snowguide.gr/ target=_blank>Snowguide</a>
<a href=http://halkidikivoice.gr/ target=_blank>halkidikivoice.gr</a>
<a href=https://timeforgoodnews.gr/ target=_blank>Time For Good News</a>
<a href=https://linux-user.gr/ target=_blank>Linux user.gr</a>
<a href=http://johnpoupalos.weebly.com/ target=_blank>A 44 Radio</a>
<a href=http://fanisradio.blogspot.gr/ target=_blank>HB Radio</a>
</div>
</li>
</ul><br>
<div class=organa>
<noscript>
<h2 style=color:red;text-align:center>>>This pages requires JavaScript enabling in your browser.<br>Please enable scripting it to enjoy this site at its best.</h2>
</noscript>
<canvas id=canvas_led width=25 height=25></canvas>   
<canvas id=canvas_status width=550 height=25></canvas>  
<canvas id=canvas_timer width=30 height=25></canvas><br>
<div class=gauge>
<div id=tip_0>
<canvas id=canvas_temp class=gaugeSizeStd></canvas>
</div>
<input id=rad_unitsTemp1 type=radio name=rad_unitsTemp value=C checked onclick=gauges.setUnits(this)><label id=lab_unitsTemp1 for=rad_unitsTemp1>°C</label>
<input id=rad_unitsTemp2 type=radio name=rad_unitsTemp value=F onclick=gauges.setUnits(this)><label id=lab_unitsTemp2 for=rad_unitsTemp2>°F</label>
</div>
<div class=gauge>
<div id=tip_1>
<canvas id=canvas_dew class=gaugeSizeStd></canvas>
</div>
<input id=rad_dew1 type=radio name=rad_dew value=dew onclick=gauges.doDew(this)><label id=lab_dew1 for=rad_dew1>Dew Point</label>
<input id=rad_dew2 type=radio name=rad_dew value=app checked onclick=gauges.doDew(this)><label id=lab_dew2 for=rad_dew2>Apparent</label>
<br>
<input id=rad_dew3 type=radio name=rad_dew value=wnd onclick=gauges.doDew(this)><label id=lab_dew3 for=rad_dew3>Wind Chill</label>
<input id=rad_dew4 type=radio name=rad_dew value=hea onclick=gauges.doDew(this)><label id=lab_dew4 for=rad_dew4>Heat Index</label>
<br>
<input id=rad_dew5 type=radio name=rad_dew value=hum onclick=gauges.doDew(this)><label id=lab_dew5 for=rad_dew5>Humidex</label>
</div>
<div class=gauge>
<div id=tip_4>
<canvas id=canvas_hum class=gaugeSizeStd></canvas>
</div></div>
<div id=tip_2 class=gauge>
<canvas id=canvas_rain class=gaugeSizeStd></canvas><br>
<input id=rad_unitsRain1 type=radio name=rad_unitsRain value=mm checked onclick=gauges.setUnits(this)><label id=lab_unitsRain1 for=rad_unitsRain1>mm</label>
<input id=rad_unitsRain2 type=radio name=rad_unitsRain value=in onclick=gauges.setUnits(this)><label id=lab_unitsRain2 for=rad_unitsRain2>Inch</label>
</div>
<div id=tip_5 class=gauge>
<canvas id=canvas_baro class=gaugeSizeStd></canvas><br>
<input id=rad_unitsPress1 type=radio name=rad_unitsPress value=hPa checked onclick=gauges.setUnits(this)><label id=lab_unitsPress1 for=rad_unitsPress1>hPa</label>
<input id=rad_unitsPress2 type=radio name=rad_unitsPress value=inHg onclick=gauges.setUnits(this)><label id=lab_unitsPress2 for=rad_unitsPress2>inHg</label>
<input id=rad_unitsPress3 type=radio name=rad_unitsPress value=mb onclick=gauges.setUnits(this)><label id=lab_unitsPress3 for=rad_unitsPress3>mb</label>
<input id=rad_unitsPress4 type=radio name=rad_unitsPress value=kPa onclick=gauges.setUnits(this)><label id=lab_unitsPress4 for=rad_unitsPress4>kPa</label>
</div>
<br>
<div id=tip_6 class=gauge>
<canvas id=canvas_wind class=gaugeSizeStd></canvas><br>
<input id=rad_unitsWind4 type=radio name=rad_unitsWind value=km/h checked onclick=gauges.setUnits(this)><label id=lab_unitsWind4 for=rad_unitsWind4>km/h</label>
<input id=rad_unitsWind3 type=radio name=rad_unitsWind value=m/s onclick=gauges.setUnits(this)><label id=lab_unitsWind3 for=rad_unitsWind3>m/s</label>
<input id=rad_unitsWind1 type=radio name=rad_unitsWind value=mph onclick=gauges.setUnits(this)><label id=lab_unitsWind1 for=rad_unitsWind1>mph</label>
<input id=rad_unitsWind2 type=radio name=rad_unitsWind value=kts onclick=gauges.setUnits(this)><label id=lab_unitsWind2 for=rad_unitsWind2>knots</label>
</div>
<div id=tip_7 class=gauge>
<canvas id=canvas_dir class=gaugeSizeStd></canvas>
</div>
<div id=tip_10 class=gauge>
<canvas id=canvas_rose class=gaugeSizeStd></canvas>
</div>
<div id=tip_3 class=gauge>
<canvas id=canvas_rrate class=gaugeSizeStd></canvas>
</div>
<div id=tip_11 class=gauge>
<canvas id=canvas_cloud class=gaugeSizeStd></canvas><br>
<input id=rad_unitsCloudBase1 type=radio name=rad_unitsCloud value=m checked onclick=gauges.setUnits(this)><label id=lab_unitsCloudBase1 for=rad_unitsCloudBase1>m</label>
<input id=rad_unitsCloudBase2 type=radio name=rad_unitsCloud value=ft onclick=gauges.setUnits(this)><label id=lab_unitsCloudBase2 for=rad_unitsCloudBase2>ft</label>
</div> </div><br>
<div id=myNav class=overlay>
<a href=javascript:void(0) class=closebtn onclick=closeNav()>×</a>
<div class=overlay-content>
<div class="w3-content w3-display-container">
<div class=slideshow-container>
<div class="mySlides fade"><img src=https://kairos.moudania.com/nea-moudania/webcam.jpg title="Nέα Μουδανιά-moudania.com" id=tcimage0 alt=Image style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/neairakleia/?time=" alt=loading... title="Nέα Ηράκλεια-meteology.gr" style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/gerakini/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/ormylia/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/kryopigi/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/pefkochori/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/siviri/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/agiaparaskevi/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/skioni/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/sarti/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/sarti2/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img class=cam src="https://www.camping-melissi.gr/images/melissicam/snap/webcam.jpg?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/parthenonas/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img class=cam src=http://www.sithoniaweather.gr/cam/sithonia.jpg alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="http://northmeteo.gr/cam/agios-nikolaos/FI9901EP_00626E6A0440/index.php?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="http://ormos-panagias.sithoniaweather.gr/cam/cam1.jpg?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src=https://penteli.meteo.gr/stations/megistilavra/cam/megisti.jpg alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src=https://penteli.meteo.gr/stations/megistilavra/cam2/megisti2.jpg alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/ammouliani/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/ammouliani2/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/ammouliani3/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/galatista/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/galatista2/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://meteohellas-weathercams.gr/cam/arnaia/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://meteohellas-weathercams.gr/cam/arnaiaplateia/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/vavdos/?time=" alt=loading... style="width:100%"></div>
<div class="mySlides fade"><img src="https://www.meteology.gr/cam/cholomontas/?time=" alt=loading... style="width:100%"></div>
<a class=prev onclick=plusSlides(-1)>❮</a>
<a class=next onclick=plusSlides(1)>❯</a>
</div>
</div>
</div></div>
<div id=menu><span style=font-size:30px;cursor:pointer onclick=openNav()>☰</span></div><br>
<footer> Φιλοξενία  Ιστοσελίδας  moudania.com    scripts: Mark Crossley version 2.7.5, Gauges: Gerrit Grunwald, Kατασκευή Σελίδας ΜetFM 2016-2020    <a href=mailto:hobbyline187@gmail.com>Eπικοινωνία</a><br>
</footer>

<script src=/scripts/gauges.js></script>
</body>
</html>
