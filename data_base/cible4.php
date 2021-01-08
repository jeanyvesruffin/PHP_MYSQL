<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE : modifier des données</title>
</head>

<body>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        echo 'Connexion a la base reussite';
    } catch (Exception $e) {
        die('Erreur d\'ecriture') . $e->getMessage();
    }
    $nb_modifs = $bdd->exec('UPDATE jeux_video SET possesseur = \'Florent\' WHERE possesseur = \'Michel\'');
    echo $nb_modifs . ' entrées ont été modifiées !';

    ?>
</body>

</html>