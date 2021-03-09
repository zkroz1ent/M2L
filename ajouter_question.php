<?php
include "inclusion.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<ul>
        <li><a href="Liste_des_questions.php">FAQ</a></li>
        <li class="right" ><a href="Deconnexion.php">Se deconnecter</a></li>
       
</ul>

<div class="marg">
    <H1>M2L</H1>
    <H3>Ajouter une question</H3>

    <label for="posequestion">Question</label> <br>  
    <textarea name="posequestion" id="posequestion" cols="150" rows="15"></textarea><br> <br>

    <button  type="submit" name="moderne"><a href="Liste_des_questions.php">Enregister</a></button> &nbsp  &nbsp&nbsp <button type="submit" name="moderne"><a href="Liste_des_questions.php">annuler</a></button>

</div>
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</body>
</html>