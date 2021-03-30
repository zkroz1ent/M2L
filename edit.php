<?php
include "inclusion.php";
$id_faq = isset($_GET['id']) ? $_GET['id'] : null;
$date = date('20y-m-d H:i:s');
?>

    
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<! -- haut de page  -->
    <ul>
            <li><a href="Liste.php">FAQ</a></li>
            <li class="right" ><a href="logout.php">Se deconnecter</a></li>
        
    </ul>
  
<! -- corps de la page  -->
<div class="marg">
<p><h2>Modifier une question</h2></p>
<br><br>
<table>
    <tr>
        <th>Questions</th>        
    </tr>
<tr>
<?php
    try { //requête d'affichage de la question et gestion des erreurs 
        $sth=$dbh->prepare('select question FROM faq WHERE faq.id_faq=:id_faq');
        $sth->execute(array('id_faq' => $id_faq));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }
    echo "<td>".$row['question']."</td>";  
?>
    </tr>   
</table>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="reponse">Reponse</label> <br>  
    <textarea name="reponse" id="reponse" cols="30" rows="10" value="reponse"></textarea><br>
    <button type="button" name="moderne"><a href="Liste.php">Annuler</a></button>
    <input type="submit" name="submit" value="Valider">
    <input type="text" name="id" hidden value="<?= $id_faq ?>"><! -- renvois de l'id "caché"  -->
</form>

<?php
$reponse = isset($_POST['reponse']) ? $_POST['reponse'] : '';
$submit = isset($_POST['submit']);
$id_faq = isset($_POST['id']) ? $_POST['id'] : null;

    if ($submit){ //si on appuis su le bouton submit
        try {
            $req = $dbh->prepare('UPDATE  faq SET reponse =:reponse , dat_reponse =:date WHERE faq.id_faq=:id_faq');
            $req->execute(array(
                'reponse' => $reponse,
                'id_faq'=> $id_faq,
                'date' => $date   
            ));
            header('Location:Liste.php');  //revois vers la liste des questions   
        } catch (PDOException $ex) { //gestion des erreurs
            die("Erreur lors de la requête SQL : " . $ex->getMessage());
        }
    }else{ //si on a pas validé le formulaire
        echo "<p>entrez votre question</p>";
    }
?>
<br>
</div>
</body>
<! -- Pied de page  -->
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</html>