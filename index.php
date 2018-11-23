<?php
/* Quand on accède au site on va automatiquement sur cette page
 * Cette page s'occupe ensuite de nous rediriger au bon endroit
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require "Controllers/controller.php";


if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]); // Petite fonction de sécurité

    switch($action) {
        // Appel de la fonction dans le controlleur qui va demander l'affichage de la page de choix de maison ( la page d'accueil en gros )
        case "see_choose_house_page":
            displayUserProperties();
            break;

        // Idem pour la page d'ajout de maison
        case 'see_add_house_page':
            seeAddHousePage();
            break;

        // méthode pour ajouter une propriété
        case 'add_property':
            addPropertyMethod();
            break;

        // Page pour voir les infos sur une maison
        case "see_info_house_page":
            seeInfoHousePage();
            break;

        // Page pour programmer un scénario
        case 'see_scenario_page':
            seeScenarioPage();
            break;

        default:
            echo "Erreur 404";
            break;
    }
} else {
    displayUserProperties();
}