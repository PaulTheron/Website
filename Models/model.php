<?php

// Appel du fichier qui gère la connexion à la base de données
require "Models/database_connection.php";


/**
 * Cette fonction permet de récupérer la liste des propriétés d'un utilisateur
 *
 * Dans un premier temps elle se connecte à la base de données grâce à la fonction dbConnect présente dans le
 * fichier "database_connection.php" (on a appelé ce fichier juste au dessus avec "require")
 * dbConnect nous renvoie une extension PDO (PHP Data Objects), c'est une interface qui nous permettra de communiquer à la base de données
 * C'est pour ça qu'on la stocke dans une variable ($db)
 *
 * Ensuite on fait une requête avec "query" pour récupérer les propriétés. La requête est en SQL
 * On stocke le résultat de cette requête dans une variable ($req)
 *
 * Et pour finir on retourne la variable $req *
 *
 * @return bool|PDOStatement
 */

function getProperties()
{
        $db = dbConnect();
        $req = $db->query("SELECT * FROM houses");

        return $req;
}

function insertProperty($name, $property_type)
{
    $db = dbConnect();

    $req = $db->prepare("INSERT INTO houses(name, property_type) VALUES(:name, :property_type)");

    $req->bindParam("name", $name);
    $req->bindParam("property_type", $property_type);

    $req->execute();
    $req->closeCursor();
}
