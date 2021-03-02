<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

try
{
	$dbh = new PDO('mysql:host=localhost;dbname=ligue des sport;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>

<?php
$id_usertype=1;
                    
                    
                   
$req = $dbh->prepare('INSERT INTO user(pseudo, mpd, mail, id_usertype ,id_ligue) VALUES(:pseudo, :mpd, :mail, :id_usertype, :id_ligue)');
$req->execute(array(
    
    'pseudo' =>  $nom,
    'mpd' =>  ' password_hash( $_POST["passe"], PASSWORD_DEFAULT)',
    'mail'=>   '$_POST["Email"]',
    'id_usertype'=> '$id_usertype' ,
    'id_ligue'=>   '$_POST["ligue"]'
    

    ));

echo 'enregistrement effectuéé !';
?>

<h1>cheh</h1>
</body>
</html>



