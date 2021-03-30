<?php
include "inclusion.php";
$usertype = $_SESSION["usertype"]; //récuperation des données
$id_faq = isset($_GET['id']) ? $_GET['id'] : null;
?>
    
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des questions</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<! -- haut de page  -->
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li class="right"><a href="logout.php">Se deconnecter</a></li>
    </ul>
<! -- corps de la page  -->
    <h1 class="clignote">Attention!! Si vous validez la suppression sera immédiate et définitive</h1>
    <table>
        <tr>
            <th>Auteur</th>
            <th>Date Questions</th>
            <th>Questions</th>
            <th>Date Réponse</th>
            <th>Réponse</th>
        </tr>
        <?php
        if ($usertype != "1") { //si ce n'est pas un utilisateur
        ?>
            <div class="marg">
            <?php
            try { // requête SQL d'affichage de la question selectionné
                $sth = $dbh->prepare('SELECT question , reponse ,pseudo ,dat_question , dat_reponse ,id_faq FROM faq , user, ligue WHERE user.id_user=faq.id_user AND user.id_ligue=ligue.id_ligue and faq.id_faq=:id_faq');
                $sth->execute(array('id_faq' => $id_faq));
                $row = $sth->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $ex) { //gestion des erreurs 
                die("Erreur lors de la requête SQL : " . $ex->getMessage());
            }//affichage des données de la question
            echo "<td>" . $row['pseudo'] . "</td>";
            echo "<td>" . $row['dat_question'] . "</td>";
            echo "<td>" . $row['question'] . "</td>";
            echo "<td>" . $row['dat_reponse'] . "</td>";
            echo "<td>" . $row['reponse'] . "</td></tr>";
        }
            ?>
    </table>
    <div class="marg">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button type="button" name="moderne"><a href="Liste.php">Annuler</a></button>
        <input type="submit" name="submit" value="supprimer">
        <input type="text" name="id" hidden value="<?= $id_faq ?>">
    </form>
</div>
    <?php
    $submit = isset($_POST['submit']);
    $id_faq = isset($_POST['id']) ? $_POST['id'] : null;
    if ($submit) { //si le bouton d'envois est pressé
        try {
            $id_faq;
            $req = $dbh->prepare('DELETE FROM  faq WHERE faq.id_faq=:id_faq'); //requête SQL de suppression 
            $req->execute(array('id_faq' => $id_faq));
            header('Location:Liste.php'); //revois a la page de la liste
        } catch (PDOException $ex) { //gestion des erreurs
            die("Erreur lors de la requête SQL : " . $ex->getMessage());
        }
    } else {
        echo "<p>supression de la question</p>";
    }
    ?>
<! -- pied de la page  -->
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</body>
</html>