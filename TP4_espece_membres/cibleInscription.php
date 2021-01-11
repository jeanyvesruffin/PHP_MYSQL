<?php 
header('Location :http://localhost/TP4_espece_membres/connexion.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement inscription en base de donnees</title>
</head>

<body>
    <?php
    try {
        // Connexion a la base de donnees mysql
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur connexion base de données !!' . $e->getMessage());
    }
    // Vérification de la validité des informations
    $pseudo=$_POST['pseudo'];
    $pass_hache=$_POST['pass'];
    $email=$_POST['email'];
    // Hachage du mot de passe
    $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    // Insertion
    $req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
    $req->execute(array(
        'pseudo' => $pseudo,
        'pass' => $pass_hache,
        'email' => $email
    ));
  
    ?>
</body>

</html>