<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
<?php
    $nom_jeu=$_POST['nom_jeu'];
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        echo 'Connexion a la base reussite';
    } catch (Exception $e) {
        die('Erreur d\'ecriture') . $e->getMessage();
    }

    $req = $bdd->prepare('DELETE  FROM jeux_video WHERE nom=:nom_jeu');
    $req->execute(array(
        'nom_jeu' => $nom_jeu
    ));

    print_r($_POST);
    ?>
</body>
</html>