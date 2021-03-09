<?php
include "inclusion.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <ul>
        <li><a href="Page_accueil.php">Accueil</a></li>
        <li class="right"><a class="active" href="Inscription.php">S'inscrire</a></li>
        <li class="right"><a href="Connexion.php">Se connecter</a></li>
       
    </ul>
    <div class="marg">
        <h1>M2L</h1>
        <h2>Inscription</h2>
        <form method="post">
            <label for="nom">Pseudo<br><input type="text" name="nom"><br><br></label>
            <label for="Email">Email<br><input type="text" name="Email"><br><br></label>
            <label for="passe">Mot de Passe<br><input type="password" name="passe"><br><br></label>
            <label for="passe2">Confirmation du mot de passe: <br><input type="password" name="passe2"/></label><br><br>
            <label for="Ligue">Ligue</label><br>
            <select name="ligue" id="ligue-select">
                <option value="">--Please choose an option--</option>
                <option value="foot" selected>Football</option>
                <option value="basket">BasketBall</option>
                <option value="handball">Handball</option>
                <option value="volley">Volley</option>
            </select><br><br>
            <p>
                <input name="inscrire" type="submit" id="s'inscrire" value="s'inscrire">
            </p>
        </form>
        <?php
            
            if (!empty($_POST['nom']) && !empty($_POST['Email']) && !empty($_POST['passe']) && !empty($_POST['passe2']) && !empty($_POST['ligue'])) {
                if($_POST['passe'] == $_POST['passe2']){
                    $nom = $_POST['nom'];
                    $mdp = $_POST['passe'];
                    $mail = $_POST['Email'];
                    echo "Votre pseudo est : "."$nom<br>";
                    echo "Votre mail est : "."$mail<br>";
                    echo "Votre mdp est : "."$mdp<br>";
                    $dep=($_POST['ligue']);
                    echo "Votre ligue est :"."$dep";
                }else{
                    echo "ca bug";
                }
    
            } else {
                echo "ca bub";
            }
        ?>
    </div>
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</body>
</html>