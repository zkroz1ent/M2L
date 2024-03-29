<?php
include "inclusion.php";

//recupération des données
$pseudo=isset($_POST['pseudo']) ? $_POST['pseudo'] : '';
$mdp=isset($_POST['mdp']) ? $_POST['mdp'] : '';
$submit = isset($_POST['submit']);
$message = " ";
    

if ($submit) { 
    
    $sql = "select * from user where pseudo=:pseudo";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(
      ':pseudo' => $pseudo
    ));
        $user = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) { //erreur SQL
        die("Erreur lors de la requête SQL : ".$ex->getMessage());
    }
    if ($pseudo == $user["pseudo"] && password_verify($mdp,$user["mdp"])){ //condition et verification du mots de passe
        $_SESSION["user"] = $user;
        header("Location: liste.php"); //renvois a la ligue 
    }
    $message = "Pseudo ou identifiant invalide";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <! -- haut de page  -->
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li class="right"><a href="register.php">S'inscrire</a></li>
        <li class="right"><a class="active" href="login.php">Se connecter</a></li>
       
    </ul>
    <! -- corps de la page  -->
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
            <input type="submit" name="submit" value="Se Connecter"> &nbsp;&nbsp; 
            <input type="reset" name="submit" value="Réinitialiation">
        </form>
    <?php    
        echo "$message"; //message d'erreur SQL
    ?>    
</div>
    <! -- haut de page  -->
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</body>
</html>
