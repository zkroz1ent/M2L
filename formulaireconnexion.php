<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire de connexion</title>
</head>
<body>
<?php
    $submit = isset($_POST['submit']);
    if ($submit) {
        $pseudo=isset($_POST['pseudo']) ? $_POST['pseudo'] : '';
        $mdp=isset($_POST['mdp']) ? $_POST['mdp'] : '';
        echo "$pseudo<br>";
        echo "$mdp<br>";
    }
    ?>
</body>
</html>
    