<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<ul>
        <li><a href="Connexion.php">FAQ</a></li>
        <li class="right"><a href="Deconnexion.php">Se déconnecter</a></li>
       
    </ul>
<div class="marg">

    <h1>M2L</h1>
    <h3>Supprimer une question</h3>

    <p>
    <label for="posequestion">Question</label> <br>  
    <textarea name="posequestion" id="posequestion" cols="40" rows="20"></textarea><br> <br>
    <br>
    <br>

    <label for="Repquestion">Reponse</label> <br>  
    <textarea  name="Repquestion" id="Repquestion" cols="40" rows="20"></textarea><br> <br>
    <br>
     <button type="submit" name="moderne"><a href="Liste_des_questions.php">Enregister</a></button> &nbsp;&nbsp;&nbsp; 
    <button type="submit" name="moderne"><a href="Liste_des_questions.php">Annuler</a></button>
    </p>

</div>


</body>
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
    <?php
    /*   si on veux faire les boutons en input 
    <input type="submit" name="submit" value="Enregistrer"> &nbsp;&nbsp;&nbsp; 
    <input type="submit" name="submit" value="Annuler"> */
    ?>
</html>


