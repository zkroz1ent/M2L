<?php
include "inclusion.php";
date_default_timezone_set('Europe/Paris');
    $date = date('20y-m-d h:i:s');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<ul>
        <li><a href="Liste.php">FAQ</a></li>
        <li class="right" ><a href="logout.php">Se deconnecter</a></li>
       
</ul>

<div class="marg">
    <H1>M2L</H1>
    <H3>Ajouter une question</H3>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <textarea name="question" id="question" cols="30" rows="10" value="question"></textarea><br>
     
        <button type="button" name="moderne"><a href="Liste.php">Annuler</a></button>
        <input type="submit" name="submit" value="submit">
    </form>

<?php
$question = isset($_POST['question']) ? $_POST['question'] : '';
$submit = isset($_POST['submit']);

$id_user=$_SESSION['user']['id_user'];
if ($submit){
        try {
            $req = $dbh->prepare('INSERT INTO faq(question,dat_question , id_user) VALUES(:question, :datee ,:id_user)');
            $req->execute(array(
    
                'question' => $question,
                'datee' => $date,
                'id_user'=>$id_user,
            ));
    
            echo 'enregistrement effectuéé !';
            header('Location:liste.php');     
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

