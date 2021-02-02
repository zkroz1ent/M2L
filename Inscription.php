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

        <label for="nom">Pseudo</label><br><input type="text"><br><br>
        <label for="Email">Email</label><br><input type="text"><br><br>
        <label for="Mot de Passe">Mot de Passe</label><br><input type="text"><br><br>
        <label for="Ligue">Ligue</label><br>
        <select name="ligue" id="ligue-select">
            <option value="">--Please choose an option--</option>
            <option value="foot">Football</option>
            <option value="basket">BasketBall</option>
            <option value="handball">Handball</option>
            <option value="volley">Volley</option>
        </select><br><br>
        <button><a href="connexion.php">Enregistrer</a></button>
        <button><a href="Page_accueil.php">Annuler</a></button>
    </div>
    
</body>
</html>