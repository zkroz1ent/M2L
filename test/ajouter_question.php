<?php
include "../inclusion.php";
date_default_timezone_set('Europe/Paris');
    $date = date('d-m-y h:i:s');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<ul>
        <li><a href="Liste_des_questions.php">FAQ</a></li>
        <li class="right" ><a href="Deconnexion.php">Se deconnecter</a></li>
       
</ul>

<div class="marg">
    <H1>M2L</H1>
    <H3>Ajouter une question</H3>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


<textarea name="question" id="question" cols="30" rows="10" value="question"></textarea><br>

<label for="submit"></label>
<input type="submit" name="submit" value="submit">
</form>

<?php
$question = isset($_POST['question']) ? $_POST['question'] : '';
$submit = isset($_POST['submit']);

echo $question;
echo $submit;
if ($submit){

  
    
    
    
        try {
            $req = $bdd->prepare('INSERT INTO faq(question,date_question) VALUES(:question, :datee)');
            $req->execute(array(
    
                'question' => $question,
                'datee' => $date,
    
            ));
    
            echo 'enregistrement effectuéé !';
        } catch (PDOException $ex) {
            die("Erreur lors de la requête SQL : " . $ex->getMessage());
        }




}else{
echo "<p>entrez votre question</p>";

}
?>
</div>
    <p class="pied">SIO 2020/2021 Marques, Dutertre, Carles</p>
</body>
</html>

