<?php
include "inclusion.php"
?>
<<<<<<< HEAD
<?php
$id_faq = isset($_GET['id']) ? $_GET['id'] : null;
$date = date('20y-m-d h:i:s');
?>
=======
>>>>>>> 3d27209c076fcbac47cd348cf27743625c6ee17f

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="css/main.css">
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
<<<<<<< HEAD
<table>
    <tr>
         
          
            <th>Questions</th>
            
        </tr>
<table>
<tr>
<?php




try {
  
$sth=$dbh->prepare('select question FROM faq WHERE faq.id_faq=:id_faq');

$sth->execute(array(

    'id_faq' => $id_faq


));
$row = $sth->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $ex) {
die("Erreur lors de la requête SQL : " . $ex->getMessage());
}

echo "<td>".$row['question']."</td>";  



?>

    </tr>
   
    </table>


<label for="Repquestion">Reponse</label> <br>  


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


<textarea name="reponse" id="reponse" cols="30" rows="10" value="reponse"></textarea><br>

<label for="submit"></label>
<input type="submit" name="submit" value="submit">
<input type="text" name="id" hidden value="<?= $id_faq ?>">
</form>

<?php
$reponse = isset($_POST['reponse']) ? $_POST['reponse'] : '';
$submit = isset($_POST['submit']);
$id_faq = isset($_POST['id']) ? $_POST['id'] : null;
echo $reponse;
echo $id_faq;
echo "<br>";
echo $submit;
echo "<br>";
echo $date;
echo "<br>";
//date pas bonne changer le format 
if ($submit){

  
 
    
    
    try {
        $idfaq=$id_faq ;
        $req = $dbh->prepare('UPDATE  faq SET reponse =:reponse WHERE faq.id_faq=:id_faq');
        $req->execute(array(

            'reponse' => $reponse,
             'id_faq'=> $id_faq
        ));

        echo 'enregistrement effectuéé !';
        header('Location:Liste_des_questions.php');     
    } catch (PDOException $ex) {
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }




}else{
echo "<p>entrez votre question</p>";

}
?>




=======


<label for="Repquestion">Reponse</label> <br>  
<textarea  name="Repquestion" id="Repquestion" cols="150" rows="15"></textarea><br> <br>
>>>>>>> 3d27209c076fcbac47cd348cf27743625c6ee17f
<br>
<button type="submit" name="moderne"><a  href="Liste_des_questions.php">Enregister</button></a> &nbsp&nbsp&nbsp 
<button type="submit" name="moderne"><a  href="Liste_des_questions.php">annuler</button></a></p>
</div>
</body>
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</html>