<?php
include "inclusion.php"
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
            <th>Action</th>
        </tr>

<?php
$reponse = $dbh->query('SELECT question , reponse ,pseudo ,dat_question , dat_reponse ,id_faq FROM faq , user WHERE user.id_user=faq.id_user');
echo "<tr>"; 
$i=0;
    while ($donnees = $reponse->fetch())
    {
      $id_faq=$donnees['id_faq'];
$i++;

      echo "<tr><td>".$i."</td>";
      echo "<td>".$donnees['pseudo']."</td>";  
      echo "<td>".$donnees['dat_question']."</td>"; 
      echo "<td>".$donnees['question']."</td>"; 
      echo "<td>".$donnees['dat_reponse']."</td>"; 
      echo "<td>".$donnees['reponse']."</td>"; 
    ?>
    <td class="cells"><button type="submit" name="moderne"><a href="modifier.php?id_faq=<?php echo $id_faq ?>"><img src="Img/modifier.png" alt="" ></a></button><button type="submit" name="moderne"><a href="supprimer.php?id_faq=<?php echo $id_faq ?>"><img src="Img/poub.png" alt=""></a></button></td>
    </tr>
    <?php
    }
    ?>
    </table>
    <p><a href="ajouter_question.php">Nouvelle Question</a></p>
</div>
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</body>
</html>