<?php
include "inclusion.php";
unset($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <ul>
        <li><a href="Page_accueil.php">Accueil</a></li>
        <li class="right"><a href="Inscription.php">S'inscrire</a></li>
        <li class="right"><a href="Connexion.php">Se connecter</a></li>
       
    </ul>
    <div class="marg">
        <h1>M2L</h1>
        <h2>Déconnexion</h2>
        <p>Vous êtes bien déconnecté ! </p>
        <a href="Page_accueil.php">Revenir à la page d'accueil</a>
    </div>

</body>
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</html>