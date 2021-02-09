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
	// On se connecte à MySQL
	$pdo = new PDO('mysql:host=localhost;dbname=jeux video;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$data = [
    'John','Doe', 22,
    'Jane','Roe', 19,
];
$stmt = $pdo->prepare("INSERT INTO users (name, surname, age) VALUES (?,?,?)");
try {
    $pdo->beginTransaction();
    foreach ($data as $row)
    {
        $stmt->execute($row);
    }
    $pdo->commit();
}catch (Exception $e){
    $pdo->rollback();
    throw $e;
}


$reponse->closeCursor(); // Termine le traitement de la requête

?>




</body>
</html>