<?php
include "inclusion.php";
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
<ul>
        <li><a href="Page_accueil.php">Accueil</a></li>
        <li class="right" ><a href="Deconnexion.php">Se deconnecter</a></li>    
</ul>

<?php
        ?>
        <div class="marg">
        <h1>Liste des questions</h1>
        <br><br>
        <table>
        <tr>
            <th>Nr</th>
            <th>Auteur</th>
            <th>Date Questions</th>
            <th>Questions</th>
            <th>Date Réponse</th>
            <th>Réponse</th>
            <?php
                if ($_SESSION["user"]["id_usertype"] != "1") {
                    echo "<th>"."Action"."</th>";
                }    
            ?>    
           

        </tr>
        <?php
            $reponse = $dbh->query('SELECT question , reponse ,pseudo ,dat_question , dat_reponse ,id_faq FROM faq , user, ligue WHERE user.id_user=faq.id_user AND user.id_ligue=ligue.id_ligue' );
            echo "<tr>"; 
            $i=0;
            while ($donnees = $reponse->fetch())
            {
                $i++;
                echo "<td>".$donnees['id_faq']."</td>";
                echo "<td>".$donnees['pseudo']."</td>";  
                echo "<td>".$donnees['dat_question']."</td>"; 
                echo "<td>".$donnees['question']."</td>"; 
                echo "<td>".$donnees['dat_reponse']."</td>"; 
                echo "<td>".$donnees['reponse']."</td>";
                if ($_SESSION["user"]["id_usertype"] != "1") {
        ?>             
                    <td class="cells"><button type="submit" name="moderne"><a href="modifier.php?id=<?= $id_faq?>"><img src="Img/modifier.png" alt="" ></a></button>&nbsp;<button type="submit" name="moderne"><a href="supprimer.php?id=<?= $id_faq?>"><img src="Img/poub.png" alt=""></a></button></td>
            <?php   
                }
        ?>
            </tr>
            <?php
             }
            ?>
        </table>
        </div>
        <p><a href="ajouter_question.php">Nouvelle Question</a></p>
    </div>
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</body>
</html>