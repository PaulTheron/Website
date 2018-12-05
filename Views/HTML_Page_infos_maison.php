<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Design/css/CSS_Page_infos_maison.css">
	<title>Informations sur la maison</title>
</head>

<body>

	<!-- The Modal -->
	<div id="myModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">

			<!-- en-tête du modal -->
	    	<div class="modal-header">
	      		<span class="close">&times;</span>
	      		<h1 id="modalTitle">Modal Header</h1>
	    	</div>

	    	<!-- body du modal -->
	    	<div class="modal-body">

	    		<!-- cadre avec la température et les actions possibles -->
	    		<div id="temp">
	    			<!-- section contenant l'image -->
	    			<section>
	    				<img src="Design/Pictures/thermometer.png">
	    			</section>
	    			<!-- section contenant la valeur (température, taux d'humidité, etc.) -->
	    			<section class="value">
	    				<h2 id="tempVal"></h2>
	    			</section>
	    			<!-- section avec le bouton de réglage -->
	    			<section class="set">
	    				
	    			</section>
	    		</div>

	    		<!-- cadre avec la luminosité et les actions possibles -->
	    		<div id="lum">
	    			<!-- section contenant l'image -->
	    			<section>
	    				<img src="Design/Pictures/light_bulb.png">
	    			</section>
	    			<!-- section contenant la valeur (température, taux d'humidité, etc.) -->
	    			<section class="value">
	    				<h2 id="lumVal"></h2>
	    			</section>
	    			<!-- section avec le bouton de réglage -->
	    			<section class="set">
	    				
	    			</section>
	    		</div>

	    		<!-- cadre avec l'humidité et les actions possibles -->
	    		<div id="hum">
	    			<!-- section contenant l'image -->
	    			<section>
	    				<img src="Design/Pictures/water_drop.png">
	    			</section>
	    			<!-- section contenant la valeur (température, taux d'humidité, etc.) -->
	    			<section class="value">
	    				<h2 id="humVal"></h2>
	    			</section>
	    			<!-- section avec le bouton de réglage -->
	    			<section class="set">
	    				
	    			</section>
	    		</div>

	    		<!-- cadre avec la télévision et les actions possibles -->
	    		<div id="tv">
	    			<!-- section contenant l'image -->
	    			<section>
	    				<img src="Design/Pictures/tv.png">
	    			</section>
	    			<!-- section contenant la valeur (température, taux d'humidité, etc.) -->
	    			<section class="value">
	    				<h2 id="tvVal"></h2>
	    			</section>
	    			<!-- section avec le bouton de réglage -->
	    			<section class="set">
	    				
	    			</section>
	    		</div>

	    	</div>

	    	<div class="modal-footer">
	    		<h3>Modal footer</h3>
	    	</div>
	  	</div>

	</div>


	<!-- Haut de la page avec le nom de la propriété -->
	<header class="pageTop">
		<a href="index.php?action=see_choose_house_page">Retour</a>	
		<h1><?php echo htmlspecialchars($_SESSION['propertyName']); ?></h1>
	</header>


	<!-- Partie de la page avec les pièces -->
	<div class="rooms">

		<section id="salon" class="roomInformation">
			<div class="div1">
				<h1 id="titre">Salon</h1>
				<li>Température : <span id="tempSalon">20°C</span></li>
				<li>Luminosité : <span id="lumSalon">lumSalon</span></li>
				<li>Humidité : <span id="humSalon">humSalon</span></li>
				<li>Télévision : <span id="tvSalon">allumée</span></li>
			</div>
			<div class="div2"> 
				<img src="Design/Pictures/salon.jpg">
			</div>
		</section>
		

		<section id="salle_a_manger" class="roomInformation">
			<div class="div1">
				<h1 id="titre">Salle à manger</h1>
				<li>Température : <span id="tempSAM">20°C</span></li>
				<li>Luminosité : <span id="lumSAM">lumSAM</span></li>
				<li>Humidité : <span id="humSAM">humSAM</span></li>
			</div>
			<div class="div2"> 
				<img src="Design/Pictures/salle_a_manger.jpg">
			</div>
			
		</section>
	</div>

	<div class="rooms">
		<section id="chambre" class="roomInformation">
			<div class="div1">
				<h1 id="titre">Chambre</h1>
				<li>Température : <span id="tempChambre">21°C</span></li>
				<li>Luminosité : <span id="lumChambre">lumChambre</span></li>
				<li>Humidité : <span id="humChambre">humChambre</span></li>
			</div>
			<div class="div2"> 
				<img src="Design/Pictures/chambre.jpg">
			</div>
		</section>

		<section id="salle_de_bain" class="roomInformation">
			<div class="div1">
				<h1 id="titre">Salle de bain</h1>
				<li>Température : <span id="tempSDB">20°C</span></li>
				<li>Luminosité : <span id="lumSDB">lumSDB</span></li>
				<li>Humidité : <span id="humSDB">humSDB</span></li>
			</div>
			<div class="div2"> 
				<img src="Design/Pictures/salle_de_bain.jpg">
			</div>
		</section>
	</div>

	<ul>
        <?php while ($room = $rooms->fetch()) { ?>
            <li><?php echo $room["name"]; ?></li>
        <?php } ?>
    </ul>

	<!--  -->
	
	<footer class="boutonScenario">
		<a href="index.php?action=see_scenario_page" target="blank">Programmez un scénario</a>
	</footer>

	<script type="text/javascript" src="Design/js/JS_Page_infos_maison.js"></script>
</body>

</html>