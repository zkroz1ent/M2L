<?php
include "inclusion.php"
?>
<?php
$id_faq = isset($_GET['id_faq']) ? $_GET['id_faq'] : null;
$date = date('20y-m-d h:i:s');
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
<ul>
        <li><a href="Liste_des_questions.php">FAQ</a></li>
        <li class="right" ><a href="Deconnexion.php">Se deconnecter</a></li>
       
</ul>
  

<div class="marg">
<p><h2>Modifier une question</h2></p>

<p>
 

<br>
<br>
<table>
    <tr>
         
          
            <th>Questions</th>
            
        </tr>
<table>
<tr>
<?php




try {
$sth = $dbh->prepare("select question FROM faq WHERE id_faq=:id_faq");

$sth->execute(array(

    ':id_faq' => $id_faq 


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
        $req = $dbh->prepare('UPDATE  faq SET reponse =:reponse WHERE faq.id_faq=:id_faq');
        $req->execute(array(

            'reponse' => $reponse,
             'id_faq'=> 31
        ));

        echo 'enregistrement effectuéé !';
      
    } catch (PDOException $ex) {
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }




}else{
echo "<p>entrez votre question</p>";

}
?>




<br>

</div>
</body>
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</html>