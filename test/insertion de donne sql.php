<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

$ID='57';
$nom='ooo';
$possesseur='djhdaujduadhaudhauauadadada';
$console='qda"édadadadadzeza';
$prix ='50';
$nbre_joueurs_max ='66';
$commentaires='dajdiuajdaiujda';
try
{
	$dbh = new PDO('mysql:host=localhost;dbname=jeux video;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>

<?php
$req = $dbh->prepare('INSERT INTO jeux_video(ID,nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:ID,:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
$req->execute(array(
    'ID'=> $ID,
	'nom' => $nom,
	'possesseur' => $possesseur,
	'console' => $console,
	'prix' => $prix,
	'nbre_joueurs_max' => $nbre_joueurs_max,
	'commentaires' => $commentaires
	));

echo 'Le jeu a bien été ajouté !';
?>

<h1>cheh</h1>
</body>
</html>