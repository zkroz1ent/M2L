<?php
include "../inclusion.php";
$id_faq = isset($_GET['id_faq']) ? $_GET['id_faq'] : '???';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<ul>
        <li><a href="Liste_des_questions.php">FAQ</a></li>
        <li class="right" ><a href="Deconnexion.php">Se deconnecter</a></li>
       
</ul>
  

<div class="marg">
<p><h2>Modifier une question</h2></p>

<p>
<label for="posequestion">Question</label> <br>  
<textarea name="posequestion" id="posequestion" cols="150" rows="15"></textarea><br> <br>
<br>
<br>
<table>
    <tr>
         
          
            <th>Questions</th>
            
        </tr>
<table>
<tr>
<?php

$sql = "select question FROM faq WHERE id_faq=:$id_faq";
try {
$sth = $dbh->prepare($sql);

$sth->execute();

} catch (PDOException $ex) {
die("Erreur lors de la requête SQL : " . $ex->getMessage());
}



echo "<td>".$donnees['question']."</td>";  



?>

    </tr>
   
    </table>


<label for="Repquestion">Reponse</label> <br>  
<textarea  name="Repquestion" id="Repquestion" cols="150" rows="15"></textarea><br> <br>
<br>
<button type="submit" name="moderne"><a  href="Liste_des_questions.php">Enregister</button></a> &nbsp&nbsp&nbsp 
<button type="submit" name="moderne"><a  href="Liste_des_questions.php">annuler</button></a></p>
</div>
</body>
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</html>