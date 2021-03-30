<?php
//Page d'accueil
include "inclusion.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <! -- haut de page  -->
    <ul>
        <li><a class="active" href="index.php">Accueil</a></li>
        <?php
        if (isset($_SESSION["user"])) {   //si la session est initialisée
            echo "<li class=\"right\" ><a href=\"logout.php\">Se deconnecter</a></li>";
            echo "<li class=\"right\" ><a href=\"Liste.php\">FAQ</a></li>";
        }else{ //si il n'y a pas de session
            echo "<li class=\"right\"><a href=\"register.php\">S'inscrire</a></li>";
            echo "<li class=\"right\"><a href=\"login.php\">Se connecter</a></li>";
        }
        ?>
    </ul>
    <! -- corps de la page  -->   
    <div class="marg">
        <h1>Maison des ligues de Lorraine</h1>
        <h2>Accueil</h2>
        <h3>Bienvenue  sur la FAQ de la maison des ligues de Lorraine</h3>
        <p><img class="imge" src="Img\mdl.png" alt="FATAL ERROR"></p>   
    </div>
    <! -- bas de page  -->
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</body>
</html>
