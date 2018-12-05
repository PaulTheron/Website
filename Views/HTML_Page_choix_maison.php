<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Design/css/CSS_Page_choix_maison.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/solid.css" integrity="sha384-uKQOWcYZKOuKmpYpvT0xCFAs/wE157X5Ua3H5onoRAOCNkJAMX/6QF0iXGGQV9cP" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/fontawesome.css" integrity="sha384-HU5rcgG/yUrsDGWsVACclYdzdCcn5yU8V/3V84zSrPDHwZEdjykadlgI6RHrxGrJ" crossorigin="anonymous">
	<title>Choix maison</title>
</head>

<body>
	<header class="pageHead">
		<h1>Sélectionnez la maison que vous souhaitez contrôler</h1>
	</header>

	<div class="maindDiv">
		
		<!-- Partie contenant les propriétés -->
		<div class="houses">
			
			
			
        	<?php foreach ($propertiesArray as $property) {
        		$id = $property['id'];
        		$name = $property['name']; 
        		$type = $property['property_type'];
   				$srcName = "Design/Pictures/".$type.".jpg";
   				?>
				<!-- Section correspondant à chaque propriété -->
   				<section class="imageSection">
					<!-- <a href="index.php?action=see_info_house_page"><img src=<?php echo $srcName; ?>><br><h2><?php echo $name; ?></h2></a> -->
					<a href=<?php echo "index.php?action=see_info_house_page&propertyId=$id&propertyName=$name"; ?>><img src=<?php echo $srcName; ?>><br><h2><?php echo $name; ?></h2></a>
				</section>
			<?php } ?>
			

        	

		</div>

		<!-- Partie avec bouton d'ajout de propriété -->
		<div class="addButtonDiv">
			<!-- Section contenant le bouton -->
			<section class="addButtonSection">
				<a href="index.php?action=see_add_house_page" target="blank"><i class="fas fa-plus fa-10x"></i></a>
			</section>

		</div>
	
	</div>
	
</body>

</html>
