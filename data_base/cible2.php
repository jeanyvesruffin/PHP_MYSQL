<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecrire dans la base de donnees</title>
</head>

<body>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur d\'ecriture') . $e->getMessage();
    }
    $bdd->exec('INSERT INTO jeux_video(nom,possesseur,console,prix,nbre_joueurs_max, commentaires) VALUES (\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')');
    
    ?>
</body>

</html>