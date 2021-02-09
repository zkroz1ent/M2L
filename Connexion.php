<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <ul>
        <li><a href="Page_accueil.php">Accueil</a></li>
        <li class="right"><a href="Inscription.php">S'inscrire</a></li>
        <li class="right"><a class="active" href="Connexion.php">Se connecter</a></li>
       
    </ul>
<div class="marg">
    <h1>M2L</h1>
        <p><h2>Connexion</h2></p>
        <h3>Veuillez remplir le formulaire</h3>
        <form action="" method="post">
            <label for="pseudo">Pseudo</label><br>
            <input type="text" name="pseudo"/>
            <br><br>
            <label for="mdp">Mot de passe</label><br>
            <input type="password" name="mdp"/>
            <br><br>
            <label for="remdp">confirmation Mot de passe</label><br>
            <input type="password" name="remdp"/>
            <br><br>
            <p>
                <input name="connecter" type="submit" id="se connecter" value="se connecter">
            </p>
            <input type="submit" name="submit" value="Enregistrer"> &nbsp  &nbsp 
            <input type="reset" name="submit" value="Enregistrer">
        </form>

        <?php
        /*$submit = isset($_POST['submit']);
        if ($submit) {*/
        $pseudo=isset($_POST['pseudo']) ? $_POST['pseudo'] : '0';
        $mdp=isset($_POST['mdp']) ? $_POST['mdp'] : '';
        $remdp=isset($_POST['remdp']) ? $_POST['remdp'] : ''; 
        echo "$pseudo<br>";
        if ($mdp == $remdp) {
        echo "$mdp<br>";
        echo "$remdp<br>";
        }else{
            echo "ca bub";
        }    
    /*}*/
    ?>
</div>
</body>
</html>