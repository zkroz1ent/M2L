<?php
session_start ();


$dsn = 'mysql:host=localhost;dbname=m2l'; // contient le nom du serveur et de la base
$user = 'root';
$password = '';

try {

    $dbh = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $ex) {
    die("Erreur lors de la connexion SQL : " . $ex->getMessage());
}

    /*
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=m2l;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}*/
?>
