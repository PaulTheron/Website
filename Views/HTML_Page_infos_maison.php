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
	    	<div class="modal-header">
	      		<span class="close">&times;</span>
	      		<h1 id="modalTitle">Modal Header</h1>
	    	</div>
	    	<div class="modal-body">
	      		<p id="p1">Some text in the Modal Body</p>
	      		<p id="p2">Some other text...</p>
	      		<p id="p3">...</p>
	      		<p id="info_sur_la_pièce"></p>
	    	</div>
	    	<div class="modal-footer">
	    		<h3>Modal footer</h3>
	    	</div>
	  	</div>

	</div>


	<header class="pageTop">
		<a href="index.php?action=see_choose_house_page">Retour</a>	
		<!-- <?php $name = htmlspecialchars($_GET['property_name']); ?> -->
		<!-- <h1>Maison</h1> -->
		<h1><?php echo htmlspecialchars($_GET['propertyName']); ?></h1>
	</header>


	<div class="rooms">

		<section id="salon" class="roomInformation">
			<div class="div1">
				<h1 id="titre">Salon</h1>
				<li id="tempSalon">Température : 20°C</li>
				<li id="lumSalon">Luminosité : lumSalon</li>
				<li>Humidité : humSalon</li>
				<li id="tvSalon">Télévision : allumée</li>
			</div>
			<div class="div2"> 
				<img src="Design/Pictures/salon.jpg">
			</div>
		</section>
		

		<section id="salle_a_manger" class="roomInformation">
			<div class="div1">
				<h1 id="titre">Salle à manger</h1>
				<li id="tempSAM">Température : 20°C</li>
				<li id="lumSAM">Luminosité : lumSAM</li>
				<li>Humidité : humSAM</li>
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
				<li id="tempChambre">Température : 21°C</li>
				<li id="lumChambre">Luminosité : lumChambre</li>
				<li>Humidité : humChambre</li>
			</div>
			<div class="div2"> 
				<img src="Design/Pictures/chambre.jpg">
			</div>
		</section>

		<section id="salle_de_bain" class="roomInformation">
			<div class="div1">
				<h1 id="titre">Salle de bain</h1>
				<li id="tempSDB">Température : 20°C</li>
				<li id="lumSDB">Luminosité : lum</li>
				<li id="humSDB">Humidité : humSDB</li>
			</div>
			<div class="div2"> 
				<img src="Design/Pictures/salle_de_bain.jpg">
			</div>
		</section>
	</div>


	<!--  -->
	
	<footer class="boutonScenario">
		<a href="index.php?action=see_scenario_page" target="blank">Programmez un scénario</a>
	</footer>

	<script type="text/javascript" src="Design/js/JS_Page_infos_maison.js"></script>
</body>

</html>