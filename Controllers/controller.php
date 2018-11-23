<?php

// Appel du modèle car nous aurons besoin de manipuler des données stockées dans une base de données
require "Models/model.php";

/**
 * Cette fonction définit une variable $users dans laquelle on va stocker toutes les propriétés d'un utilisateur
 * Ces propriétés sont stockées dans la base de données, donc pour les récupérer on fait appel à une fonction du modèle
 */
function displayUserProperties() {
    $properties = getProperties();
    $propertiesArray = []; 
    $it = 0;
    while ($property = $properties->fetch()) {
    	$propertiesArray[$it] = $property; 
    	$it += 1;
    }

    require "Views/HTML_Page_choix_maison.php";
}

// fonction qui demande l'affichage de la page de choix de maison ( page d'accueil en gros )
/*function seeChooseHousePage() {
     require "Views/HTML_Page_choix_maison.php";
}
*/
// Affichage de la page pour ajouter une maison
function seeAddHousePage() {
	require "Views/HTML_Ajout_maison.php";
}

// Ajout d'une propriété
function addPropertyMethod() {
	if ($_POST["name"] && $_POST["property_type"]) {

        $name = htmlspecialchars($_POST["name"]);
        $property_type = htmlspecialchars($_POST["property_type"]);

        insertProperty($name, $property_type);

        require "Views/HTML_Ajout_maison_succes.php";

    } else {
        require "Views/HTML_Ajout_maison_echec.php";
    }
}

// Affichage de la page pour consulter les infos relatives à une maison
function seeInfoHousePage() {
    require "Views/HTML_Page_infos_maison.php";
}

// Affichage de la page où l'on peut programmer un scénario
function seeScenarioPage() {
	require "Views/HTML_Scenario.php";
}