<?php 
define('DB_HOST', 'localhost');
define('DB_NAME', 'gestion_billets');
define('DB_USER', 'root');
define('DB_PASS', '');

function connect()
{
    try {
        $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        // Configuration pour afficher les erreurs PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        
    } catch(PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}echo 'merci';
?>