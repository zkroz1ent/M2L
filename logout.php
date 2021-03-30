<?php
include "inclusion.php";
unset($_SESSION['user']);  //destruction de la session
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
<! -- haut de la page  -->
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li class="right"><a href="register.php">S'inscrire</a></li>
        <li class="right"><a href="login.php">Se connecter</a></li>
       
    </ul>
<! -- corps de la page  -->
    <div class="marg">
        <h1>M2L</h1>
        <h2>Déconnexion</h2>
        <p>Vous êtes bien déconnecté ! </p>
        <a href="index.php">Revenir à la page d'accueil</a>
    </div>
    <! -- pied de la page  -->
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</body> 
</html>
    