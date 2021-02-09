
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
                <option value="foot">Football</option>
                <option value="basket">BasketBall</option>
                <option value="handball">Handball</option>
                <option value="volley">Volley</option>
            </select><br><br>
            <p>
                <input name="inscrire" type="submit" id="s'inscrire" value="s'inscrire">
            </p>
        </form>
        <?php
            if (isset($_POST['nom'])&& isset($_POST['Email'])&&isset($_POST['passe'])==($_POST['passe2'])) {
                $nom = $_POST['nom'];
                $mdp = $_POST['passe'];
                $mail = $_POST['Email'];
                echo "Votre pseudo est : ".$nom;
                echo "Votre mail est : ".$mail;
                echo "Votre mdp est : ".$mdp;
            /*
            ... code qui verifie si le mot de passe et lusager correspond, puis upload le fichier choisi
            */
            } else {
                echo "frr t'as zehef t'as fais un truc mal";
            }
        ?>
    </div>
    
</body>
</html>