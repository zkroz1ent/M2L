<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>





<?php
$id_usertype=1;
$nom='test';   
$passe='test';  
$Email='test@m2l.fr';
$id_usertype=1 ; 
$ligue=5;
$id_user=9;

$dsn ='mysql:host=localhost;dbname=ligue des sport'; 
$user ='root';
$password = '';
try {
$dbh = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $ex) {
die("Erreur lors de la connexion SQL : " . $ex->getMessage());
}
?>

<?php
echo'cheh';

$req = $dbh->prepare('INSERT INTO user(id_user,pseudo, mdp, mail, id_usertype, id_ligue) VALUES(:id_user,:pseudo, :mdp, :mail, :id_usertype, :id_ligue)');
$req->execute(array(
    'id_user'  => $id_user,
    'pseudo' => $nom,
    'mdp' => $passe,
    'mail'=>   $Email,
    'id_usertype'=> $id_usertype,
    'id_ligue'=>   $ligue 
    ));

echo 'enregistrement effectuéé !';
?>

<h1>cheh</h1>
</body>
</html>



