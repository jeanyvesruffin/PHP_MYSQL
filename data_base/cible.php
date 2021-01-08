<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL</title>
</head>

<body>
    <?php
    // Test connexion
    try {
        // Connexion a la base de donnees mysql
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur connexion base de données !!' . $e->getMessage());
    }

    //////////1er requete ///////////////
    print_r('REQUETE 1 : ' . 'SELECT * FROM jeux_video');
    echo '<br/>';
    // Recuperation des donnees
    $reponseAllGame = $bdd->query('SELECT * FROM jeux_video');
    // Affichage des donnees
    // vas chercher dans $reponse les donnees
    // $donnees = $reponse->fetch();
    // Boucle d'affichage de la reponse

    while ($donnees = $reponseAllGame->fetch()) {
    ?>
        <p>
            <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
            Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
            Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
            <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
        </p>
    <?php
    }

    //////////2eme requete ///////////////
    print_r('REQUETE 2 : ' . 'SELECT nom FROM jeux_video');
    echo '<br/>';
    $reponseOnlyNameGame = $bdd->query('SELECT nom FROM jeux_video');

    while ($donnees = $reponseOnlyNameGame->fetch()) {
        echo $donnees['nom'] . '<br/>';
    }

    //////////3eme requete ///////////////
    print_r('REQUETE 3 : ' . 'SELECT nom, possesseur FROM jeux_video WHERE possesseur=\'Patrick\'');
    echo '<br/>';
    $reponseToPatrick = $bdd->query('SELECT nom, possesseur FROM jeux_video WHERE possesseur=\'Patrick\'');

    while ($donnees = $reponseToPatrick->fetch()) {
        echo $donnees['nom'] . ' appartient à ' . $donnees['possesseur'] . '<br/>';
    }

    //////////4eme requete ///////////////
    print_r('REQUETE 4 : ' . 'SELECT nom, prix FROM jeux_video WHERE possesseur = ?  AND prix <= ? ORDER BY prix');
    echo '<br/>';
    $req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ?  AND prix <= ? ORDER BY prix');
    $req->execute(array($_GET['possesseur'], $_GET['prix_max']));

    echo '<ul>';
    while ($donnees = $req->fetch()) {
        echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
    }
    echo '</ul>';

    //////////5eme requete ///////////////
    print_r('REQUETE 5 : ' . 'SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur  AND prix <= :prixmax');
    echo '<br/>';
    $reqMarqueurNominatif = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur  AND prix <= :prixmax');
    $reqMarqueurNominatif->execute(array('possesseur' => $_GET['possesseur'], 'prixmax' => $_GET['prix_max']));

    echo '<ul>';
    while ($donnees = $reqMarqueurNominatif->fetch()) {
        echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
    }
    echo '</ul>';


    $reqMarqueurNominatif->closeCursor();
    $req->closeCursor();
    $reponseToPatrick->closeCursor();
    $reponseOnlyNameGame->closeCursor();
    $reponseAllGame->closeCursor();


    ?>
</body>

</html>