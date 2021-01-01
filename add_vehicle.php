<html>
<head></head>

<body>
</body>
<html>
<head>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <title>VroomVroomBids.com</title>
  <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body class="body">
  <div class="title_wrapper">
    <h1 class="title">Vroom Vroom Bids</h1>
    <h2 class="under_title">- The best auction site to sell your motor vehicle</h2>
  </div>
  <div class="form_wrapper">
    <form method="POST" action="formular.php" class="form" enctype="multipart/form-data">
        <b><select class="cars" name="make" id="select1">
          <option class="make" selected="selected">Select Make</option>
          <option class="make" value="abarth">Abarth</option>
          <option class="make" value="acura">Acura</option>
          <option class="make" value="alfa">Alfa-Romeo</option>
          <option class="make" value="alpina">ALPINA</option>
          <option class="make" value="aston">Aston-Martin</option>
          <option class="make" value="audi">Audi</option>
          <option class="make" value="bentley">Bentley</option>
          <option class="make" value="bmw">BMW</option>
          <option class="make" value="bugatti">Bugatii</option>
          <option class="make" value="buick">Buick</option>
          <option class="make" value="cadillac">Cadillac</option>
          <option class="make" value="chevrolet">Chevrolet</option>
          <option class="make" value="chrysler">Chrysler</option>
          <option class="make" value="citroen">Citroen</option>
          <option class="make" value="corvette">Corvette</option>
          <option class="make" value="dodge">Dodge</option>
          <option class="make" value="ferrari">Ferrari</option>
          <option class="make" value="fiat">Fiat</option>
          <option class="make" value="ford">Ford</option>
          <option class="make" value="gmc">GMC</option>
          <option class="make" value="honda">Honda</option>
          <option class="make" value="hummer">Hummer</option>
          <option class="make" value="hyundai">Hyundai</option>
          <option class="make" value="infiniti">Infiniti</option>
          <option class="make" value="jaguar">Jeep</option>
          <option class="make" value="jeep">Jaguar</option>
          <option class="make" value="kia">Kia</option>
          <option class="make" value="koenigsegg">Koenigsegg</option>
          <option class="make" value="lamborghini">Lamborghini</option>
          <option class="make" value="lancia">Lancia</option>
          <option class="make" value="land_rover">Land Rover</option>
          <option class="make" value="lexus">Lexus</option>
          <option class="make" value="lincoln">Lincoln</option>
          <option class="make" value="lotus">Lotus</option>
          <option class="make" value="maserati">Maserati</option>
          <option class="make" value="maybach">Maybach</option>
          <option class="make" value="mazda">Mazda</option>
          <option class="make" value="mclaren">McLaren</option>
          <option class="make" value="mercedes">Mercedes-Benz</option>
          <option class="make" value="mini">Mini</option>
          <option class="make" value="mitsubishi">Mitsubishi</option>
          <option class="make" value="nissan">Nissan</option>
          <option class="make" value="opel">Opel</option>
          <option class="make" value="pagani">Pagani</option>
          <option class="make" value="peugeot">Peugeot</option>
          <option class="make" value="pontiac">Pontiac</option>
          <option class="make" value="porsche">Porsche</option>
          <option class="make" value="ram">Ram</option>
          <option class="make" value="renault">Renault</option>
          <option class="make" value="rolls">Rolls-Royce</option>
          <option class="make" value="skoda">Skoda</option>
          <option class="make" value="smart">Smart</option>
          <option class="make" value="subaru">Subaru</option>
          <option class="make" value="suzuki">Suzuki</option>
          <option class="make" value="tesla">Tesla</option>
          <option class="make" value="toyota">Toyota</option>
          <option class="make" value="volkswagen">Volkswagen</option>
          <option class="make" value="volvo">Volvo</option>
        </select>
        <select id="select2">
        <script>
                      var abarth_models=["124 Spider","500","500C","595","595C","595 Competizione","595 Turismo","695","695C","Grande Punto","Punto Evo","Others"];
                      var acura_models=["MDX","NSX","RL","RSX","TL","TSX","Others"];
                      var alfa_models=["4C","8C","Alfa 145","Alfa 146","Alfa 147","Alfa 155","Alfa 156","Alfa 159","Alfa 164","Alfa 166","Alfa 33","Alfa 75","Alfa 90","Alfasud","Alfetta","Brera","Crosswagon","Giulia","Giuletta","GT","GTV","Junior","MiTo","Spider","Sprint","Stelvio","Others"];
                      var alpina_models=["B10","B12","B3","B4","B5","B6","B7","B8","D10","D3","D4","D5","Roadster S","XD3","XD4","Others"];
                      var aston_models=["AR1","Cygnet","DB","DB11","DB7","DB9","DBS","DBX","Lagonda","Rapide","V12 Vantage","V8 Vantage","Vanquish","Virage","Others"];
                      var audi_models = ["100","200","80","90","A1","A2","A3","A4","A4 Allroad","A5","A6","A6 Allroad","A7","A8","Cabriolet","Coupe","e-Tron","Q1","Q3","Q5","Q7","Q8","quattro",
                      "R8","RS2","RS3","RS4","RS5","RS6","RS7","RSQ3","RSQ8","S1","S2","S3","S4","S5","S6","S7","S8","SQ2","SQ5","SQ7","SQ8","TT","TTS","TTRS","V8"
                      ,"Others"];
                      var bentley_models=["Arnage","Azure","Bentayga","Brooklands","Continental","Continetal Flying Spur","Contiental GT","Continental GTC","Contiental Supersports","Eight","Flying Spur","Mulsanne","Turbo R","Turbo RT","Turbo S","Others"];
                      var bmw_models=["1 Series","2 Series","3 Series","4 Series","5 Series","6 Series","7 Series","8 Series","X1","X2","X3","X4","X5","X6","X7","i3","i8","M Models","Z1","Z2","Z3","Z4","Others"];
                      var bugatti_models=["Chiron","EB 110","Veyron","Others"];
                      var buick_models=["Century","Electra","Enclave","Encore","Envision","La Crosse","Le Sabre","Park Avenue","Regal","Riviera","Roadmaster","Skylark","Others"]
                      var cadillac_models=["Allante","ATS","BLS","CT4","CT4-V","CT5","CT5-V","CT6","CTS","DeVille","Eldorado","Escalade","Fleetwood","Seville","SRX","STS","XLR","XT4","XT5","XT6","XT5","Others"];
                      var chevrolet_models=["2500","Alero","Astro","Avalanche","Aveo","Beretta","Blazer","C1500","Camaro","Caprice","Captiva","Cavalier","Chevelle","Chevy Van","Citation","Colorado","Corsica","Cruze","El Camino","Epica","Evanda","Express","G","HHR","Impala","K1500","K30","Kalos","Lacetti","Lumina","Malibu","Matiz","Niva","Nova","Nubira","Orlando","Rezzo","S-10","Silverado","Spark","SSR","Suburban","Tahoe","Trailblazer","Trans Sport","Traverse","Trax","Venture","Volt","Others"];
                      var chrysler_models=["200","300C","300 M","Aspen","Crossfire","Daytona","ES","Grand Voyager","GS","GTS","Imperial","Le Baron","Neon","New Yorker","Pacifica","PT Cruiser","Saratoga","Sebring","Stratus","Valiant","Viper","Vision","Voyager","Others"];
                      var citroen_models=["2 CV","AX","Berlingo","BX","C1","C2","C3","C3 Aircross","C3 Picasso","C4","C4 Aircross","C4 Cactus","C4 Picasso","C4 SpaceTourer","C5","C5 Aircros","C6","C8","C-Crosser","C-Elysée","CX","C-Zero","DS","DS3","DS4","DS4 Crossback","DS5","E-MEHARI","Evasion","Grand C4 Picasso","GSA","Jumper","Jumpy","Nemo","SAXO","SM","SpaceTourer","Visa","Xantia","XM","Xsara","Xsara Picasso","ZX","Others"];
                      var corvette_models=["C1","C2","C3","C4","C5","C6","C7","C8","Z06","ZR 1","Others"];
                      var dodge_models=["Avenger","Caliber","Chalenger","Charger","Dakota","Dart","Demon","Durango","Grand Caravan","Hornet","Journey","Magnum","Neon","Nitro","Stealth","Viper","Others"];
                      var ferrari_models=["208","246","250","275","288","308","328","330","348","360","365","400","412","456","458","488","488 GTB","488 Pista","488 Spider","512","550","570","599 GTB","599 GTO",
                      "599 SA Aperta","612","750","812","California","Daytona","Dino GT4","Enzo Ferrari","F12","F355","F40","F430","F50","F8","FF","GTC4Lusso","LaFerrari","Mondial","Portofino","Superamerica","Testarossa","Others"];
                      var fiat_models=["124","124 Spider","126","127","130","131","500","500C","500L","500L Cross","500L Living","500L Trekking","500L Urban","500L Wagon","500S","500X","Albea","Barchetta","Brava","Bravo","Cinquecento","Coupe","Croma","Dino",
                      "Doblo","Ducato","Fiorino","Freemont","Fullback","Grande Punto","Idea","Linea","Marea","Marengo","Multipla","New Panda","Palio","Panda","Punto","Punto Evo","Qubo","Regata","Ritmo","Scudo","Sedici","Seicento","Siena","Spider Europa","Stilo","Strada","Talento","Tempra","Tipo","Ulysee","Uno","X 1/9","Others"];
                      var ford_models=["Aerostar","B-Max","Bronco","Capri","C-Max","Cougar","Courier","Crown","Ecoline","Ecovan","EcoSport","Edge","Escape","Escort","Excursion","Expedition","Explorer","Express","F-100","F-150","F-250","F-350","Fairlane","Falcon","Fiesta","Flex","Focus","Fusion","Galaxy","Granada","Grand C-Max","Grand Tourneo","GT","Ka/Ka+","Kuga","Maverick","Mercury","Mondeo","Mustang","Mustang Mach-E","Orion","Probe","Puma","Ranger","Raptor","Scorpio","Sierra","S-Max","Sportka","Streetka","Taunus","Taurus","Thunderbird","Tourneo","Transit","Windstar","Others"];
                      var gmc_models=["Acadia","Envoy","Safari","Savana","Sierra","Sonoma","Syclone","Terrain","Typhoon","Vandura","Yukon","Others"];
                      var honda_models=["Accord","Aerodeck","City","Civic","Clarity","Concerto","CR-V","CRX","CR-Z","e","Element","FR-V","HR-V","Insight","Integra","Jazz","Legend","Logo","NSX","Odyssey","Pilot","Prelude","Ridgeline","S2000","Shuttle","Stream","Others"];
                      var hummer_models=["H1","H2","H3","Others"];
                      var hyundai_models=["Accent","Atos","Azera","Coupe","Elantra","Excel","Galloper","Genesis","Getz","Grandeur","Grand Santa Fe","H-1","H 100","H-1 Starex","H200","H350","i10","i20","i30","i40","i50","IONIQ","ix20","ix30","kona","Lantra","Matrix","Nexo","Pony","Santa Fe","Santamo","S-Coupe","Sonata","Terracan","Trajet","Tucson","Velsoter","Veracruz","XG 30","XG 350","Others"];
                      var infiniti_models=["EX30","EX35","EX37","FX","G35","G37","M30","M35","M37","Q30","Q45","Q50","Q60","Q70","QX30","QX50","QX56","QX60","QX70","QX80","Others"];
                      var jaguar_models=["Daimler","E-Pace","F-Pace","F-Type","I-Pace","MK II","S-Type","XE","XF","XJ","XJ12","XJ40","XJ6","XJ8","XJR","XJS","XJSC","XK","XK8","XKR","X-Type","Others"];
                      var jeep_models=["Cherokee","CJ","Comanche","Commander","Compass","Grand Cherokee","Patriot","Renegade","Wagoneer","Willys","Wrangler","Others"];
                      var kia_models=["Besta","Borrego","Carens","Carnival","cee'd","cee'd Sportswagon","Cerato","Clarus","Elan","Joice","K2500","K2700","Leo","Magentis","Mentor","Mini","Niro","Opirus","Optima","Picanto","Pregio","Pride","pro_cee'd","Retona","Rio","Roadster","Rocsta","Sephia","Shuma","Sorento","Soul","Sportage","Stinger","Stonic","Venga","XCeed","Others"];
                      var koenigsegg_models=["Agera","Agera RS","CCR","CCXR","Regera","Others"];
                      var lamborghini_models=["Aventador","Countach","Diablo","Espada","Gallardo","Huracán","Jalpa","LM","Miura","Murciélago","Urraco","Urus","Others"];


                      $("#select1").on("change", function() {
                      	if($(this).val() === "abarth") {
                        $("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                          for(i=0; i <= abarth_models.length -1; i++){
                          	var option = '<option class="model"  value="'+abarth_models[i]+'">'+abarth_models[i]+'</option>';
                          	$('#select2').append(option);
                          }
                        } else {
                                if($(this).val() === "acura") {
                              	$("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                                for(i=0; i <= acura_models.length -1; i++){
                                	var option = '<option class="model"  value="'+acura_models[i]+'">'+acura_models[i]+'</option>';
                                	$('#select2').append(option);
                                }
                              }else {
                                  if($(this).val() === "alfa") {
                              	$("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                                for(i=0; i <= alfa_models.length -1; i++){
                                	var option = '<option class="model"  value="'+alfa_models[i]+'">'+alfa_models[i]+'</option>';
                                	$('#select2').append(option);
                                }
                              }
                              else{ if($(this).val() === "alpina") {
                              	$("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                                for(i=0; i <= alpina_models.length -1; i++){
                                	var option = '<option class="model"  value="'+alpina_models[i]+'">'+alpina_models[i]+'</option>';
                                	$('#select2').append(option);
                                }
                              }
                              else {
                                if($(this).val() === "aston") {
                              	$("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                                for(i=0; i <= aston_models.length -1; i++){
                                	var option = '<option class="model"  value="'+aston_models[i]+'">'+aston_models[i]+'</option>';
                                	$('#select2').append(option);
                                }
                              }
                              else {
                                if($(this).val() === "audi") {
                              	$("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                                for(i=0; i <= audi_models.length -1; i++){
                                	var option = '<option class="model"  value="'+audi_models[i]+'">'+audi_models[i]+'</option>';
                                	$('#select2').append(option);
                                }
                              }
                              else {
                                if($(this).val() === "bentley") {
                              	$("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                                for(i=0; i <= bentley_models.length -1; i++){
                                	var option = '<option class="model"  value="'+bentley_models[i]+'">'+bentley_models[i]+'</option>';
                                	$('#select2').append(option);
                                }
                              }
                              else {
                                if($(this).val() === "bmw") {
                              	$("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                                for(i=0; i <= bmw_models.length -1; i++){
                                	var option = '<option class="model"  value="'+bmw_models[i]+'">'+bmw_models[i]+'</option>';
                                	$('#select2').append(option);
                                }
                              }
                              else {
                                if($(this).val() === "bugatti") {
                              	$("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                                for(i=0; i <= bugatti_models.length -1; i++){
                                	var option = '<option class="model"  value="'+bugatti_models[i]+'">'+bugatti_models[i]+'</option>';
                                	$('#select2').append(option);
                                }
                              }
                              else {
                                if($(this).val() === "buick") {
                              	$("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                                for(i=0; i <= buick_models.length -1; i++){
                                	var option = '<option class="model"  value="'+buick_models[i]+'">'+buick_models[i]+'</option>';
                                	$('#select2').append(option);
                                }
                              }
                              else {
                                if($(this).val() === "cadillac") {
                              	$("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                                for(i=0; i <= cadillac_models.length -1; i++){
                                	var option = '<option class="model"  value="'+cadillac_models[i]+'">'+cadillac_models[i]+'</option>';
                                	$('#select2').append(option);
                                }
                              }
                              else {
                                if($(this).val() === "chevrolet") {
                              	$("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                                for(i=0; i <= chevrolet_models.length -1; i++){
                                	var option = '<option class="model"  value="'+chevrolet_models[i]+'">'+chevrolet_models[i]+'</option>';
                                	$('#select2').append(option);
                                }
                              }
                              else {
                                if($(this).val() === "chrysler") {
                              	$("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                                for(i=0; i <= chrysler_models.length -1; i++){
                                	var option = '<option class="model"  value="'+chrysler_models[i]+'">'+chrysler_models[i]+'</option>';
                                	$('#select2').append(option);
                                }
                              }
                              else {
                                if($(this).val() === "citroen") {
                                $("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                                for(i=0; i <= citroen_models.length -1; i++){
                                  var option = '<option class="model"  value="'+citroen_models[i]+'">'+citroen_models[i]+'</option>';
                                  $('#select2').append(option);
                                }
                                }
                                else {
                                  if($(this).val() === "corvette") {
                                  $("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                                  for(i=0; i <= corvette_models.length -1; i++){
                                    var option = '<option class="model"  value="'+corvette_models[i]+'">'+corvette_models[i]+'</option>';
                                    $('#select2').append(option);
                                  }
                                }
                                else {
                                  if($(this).val() === "dodge") {
                                  $("#select2").find("option").remove().end().append('<option class="model" selected="selected" value="">Select Model</option>');
                                  for(i=0; i <= dodge_models.length -1; i++){
                                    var option = '<option class="model"  value="'+dodge_models[i]+'">'+dodge_models[i]+'</option>';
                                    $('#select2').append(option);
                                  }
                                }
                                }
                                }
                            }
                            }
                            }
                            }
                            }
                            }
                            }
                            }
                            }
                            }
                          }
                          }
                      }
                      })
          </script>
        </select>
        </b>
      <button type="submit" class="button_register"><b>Submit</b></button></b>
    </form>
  </div>
</html>
