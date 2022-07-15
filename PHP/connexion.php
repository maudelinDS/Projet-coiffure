<?php
$db_name     = 'Maudelin';
$db_host     = 'localhost';
$db_username = 'root';
$db_password = 'rootroot';
$charset = 'utf8mb4';

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=$charset";

$option =

    [
        PDO::ATTR_ERRMODE  => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
try {
    //On se connecte à la BDD
    $pdo = new PDO($dsn, $db_username, $db_password, $option);
} catch (PDOException $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    echo 'Erreur : ' . $e->getMessage();
}
