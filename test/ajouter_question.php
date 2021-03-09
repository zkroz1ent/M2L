
<?php

                   
$dsn = 'mysql:host=localhost;dbname=m2l'; // contient le nom du serveur et de la base
$user = 'root';
$password = '';

try {

    $dbh = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $ex) {
    die("Erreur lors de la connexion SQL : " . $ex->getMessage());
}

?>


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
        try {          
            $req = $dbh->prepare('INSERT INTO faq(question,date_question) VALUES(:question, :date)');
            $req->execute(array(
            
                'pseudo' => $_POST['nom'],
                'mdp' => crypt( $_POST['passe'],'$M2LI$Uueuhadnadan$daIUIUIUIUIUI4$'),
                
                ));
            
            echo 'enregistrement effectuéé !';
        } catch (PDOException $ex) {
            die("Erreur lors de la requête SQL : ".$ex->getMessage());
        }
        echo "oui";


    }else{
        echo "ca bug";
    }

} else {
    echo "ca bub";
}
?> 
</body>
</html>