<?php
/**
 * Fichier d'exemple de configuration de base de données
 * 
 * Pour utiliser ce projet localement :
 * 1. Renommez ce fichier en `config.php`
 * 2. Remplacez les valeurs ci-dessous par vos identifiants locaux
 */

$host = "localhost";           // Hôte de la base de données (ex: "localhost" en local, "sqlXXX.infinityfree.com" en ligne)
$dbname = "location_voiture";  // Nom de votre base de données
$username = "root";            // Nom d'utilisateur MySQL (ex: "root" en local, "if0_XXXXXX_user" sur InfinityFree)
$password = "";                // Mot de passe MySQL (vide par défaut avec XAMPP/WAMP)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>