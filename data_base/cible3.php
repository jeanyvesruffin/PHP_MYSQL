<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecriture grâce à une requête préparée</title>
</head>

<body>
    <?php
    $nom = $_POST['nom'];
    $possesseur = $_POST['possesseur'];
    $console = $_POST['console'];
    $nbre_joueurs_max = $_POST['nbre_joueurs_max'];
    $commentaires = $_POST['commentaires'];
    $prix = $_POST['prix'];



    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        echo 'Connexion a la base reussite';
    } catch (Exception $e) {
        die('Erreur d\'ecriture') . $e->getMessage();
    }
    $req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
    $req->execute(array(
        'nom' => $nom,
        'possesseur' => $possesseur,
        'console' => $console,
        'prix' => $prix,
        'nbre_joueurs_max' => $nbre_joueurs_max,
        'commentaires' => $commentaires
    ));
    echo '<br/>';
    echo '$req';
    echo '<br/>';
    print_r($req);
    echo '<br/>';
    echo '$_POST';
    echo '<br/>';
    print_r($_POST);
    echo '<br/>';
    echo 'Le jeu a bien été ajouté !';
    // $req->closeCursor();

    ?>
</body>

</html>