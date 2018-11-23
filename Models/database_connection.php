<?php 

/**
 * Connexion à la base de données "user_properties_db"
 * Il faut juste mettre le bon hôte, le bon nom, le bon nom d'utilisateur et le bon mot de passe
 *
 * @return PDO
 */
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=user_properties_db;charset=utf8', 'root', 'root');
        return $db;
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}