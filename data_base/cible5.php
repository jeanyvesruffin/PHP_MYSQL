<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE : modifier des données Avec une requête préparée</title>
</head>

<body>
    <?php
    $nvprix=$_POST['nvprix'];
    $nv_nb_joueurs=$_POST['nv_nb_joueurs'];
    $nom_jeu=$_POST['nom_jeu'];
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        echo 'Connexion a la base reussite';
    } catch (Exception $e) {
        die('Erreur d\'ecriture') . $e->getMessage();
    }

    $req = $bdd->prepare('UPDATE jeux_video SET prix = :nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
    $req->execute(array(
        'nvprix' => $nvprix,
        'nv_nb_joueurs' => $nv_nb_joueurs,
        'nom_jeu' => $nom_jeu
    ));

    print_r($_POST);
    ?>
</body>

</html>