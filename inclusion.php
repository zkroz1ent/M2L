<?php
session_start (); //démmarage de la session

//connextion a la base de donnée
$dsn = 'mysql:host=localhost;dbname=m2l'; // contient le nom du serveur et de la base
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) { //gestion des erreurs
    die("Erreur lors de la connexion SQL : " . $ex->getMessage());
}
?>
