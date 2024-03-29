<?php
include "inclusion.php";
$sql="SELECT id_faq, pseudo, question, dat_question, reponse, dat_reponse FROM faq, user WHERE faq.id_user = user.id_user";
    try {
        $sth = $dbh->query($sql);
        $faq = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }
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
            <li class="right" ><a href="logout.php">Se deconnecter</a></li>    
    </ul>
<! -- corps de la page  -->
        <div class="marg">
        <h1>Liste des questions</h1>
        <br>
        <table>
        <tr>
            <th>Nr</th>
            <th>Auteur</th>
            <th>Date Questions</th>
            <th>Questions</th>
            <th>Date Réponse</th>
            <th>Réponse</th>
            <?php
                if ($_SESSION["user"]["id_usertype"] != 1) { //condition d'affichage de la collonne action si on est admin ou superadmin
                    echo "<th>"."Action"."</th>";
                }    
            ?>    
        </tr>
        <?php
        foreach($faq as $donnees){ //boucle de recherche des données
            $sql="SELECT id_ligue FROM user, faq WHERE user.id_user = faq.id_user AND faq.id_faq=:id_faq";
            try {
                $sth = $dbh->prepare($sql);
                $sth->execute(array(
                    ":id_faq" => $donnees['id_faq']
                ));
                $id_ligue = $sth->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $ex) {
                die("Erreur lors de la requête SQL : " . $ex->getMessage());
            }
            if($_SESSION['user']['id_ligue']==$id_ligue['id_ligue'] || $_SESSION['user']['id_usertype'] == 3){ //affichage du tableau
            echo "<tr>"; 
                echo "<td>".$donnees['id_faq']."</td>";
                echo "<td>".$donnees['pseudo']."</td>";  
                echo "<td>".$donnees['dat_question']."</td>"; 
                echo "<td>".$donnees['question']."</td>"; 
                echo "<td>".$donnees['dat_reponse']."</td>"; 
                echo "<td>".$donnees['reponse']."</td>";
                if ($_SESSION["user"]["id_usertype"] != "1") { //affichage de la collonne action
                ?>               
                <td class="cells"><button type="submit" name="ajout"><a href="edit.php?id=<?=$donnees['id_faq']?>"><img src="Img/modifier.png" alt=" "></a>
               </button>&nbsp;<button type="submit" name="supprimer"><a href="delete.php?id=<?=$donnees['id_faq']?>"><img src="Img/poub.png" alt=" "></a></button></td>
                <?php  
                }
                echo "</tr>"; 
            }
        }
        ?>
        </table>
        </div>
        <p><a href="add.php">Nouvelle Question</a></p>
    </div>
    <! -- pied de page  -->
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</body>
</html>
        