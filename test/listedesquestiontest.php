<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=m2l;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des questions</title>
    <link rel="stylesheet" href="../css/main.css">
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
$reponse = $bdd->query('SELECT question , reponse ,pseudo ,dat_question , dat_reponse FROM faq , user WHERE user.id_user=faq.id_user');
echo "<tr>"; 
$i=0;
    while ($donnees = $reponse->fetch())
    {
       
$i++;

      echo "<tr><td>".$i."</td>";
      echo "<td>".$donnees['pseudo']."</td>";  
      echo "<td>".$donnees['dat_question']."</td>"; 
      echo "<td>".$donnees['question']."</td>"; 
      echo "<td>".$donnees['dat_reponse']."</td>"; 
      echo "<td>".$donnees['reponse']."</td></tr>"; 
     

    }
    ?>

    </table>
    <p><a href="ajouter_question.php">Nouvelle Question</a></p>
</div>
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</body>
</html>