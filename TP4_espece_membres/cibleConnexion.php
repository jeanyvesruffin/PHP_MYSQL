<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cibleConnexion</title>
</head>

<body>
    <?php
    try {
        // Connexion a la base de donnees mysql
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur connexion base de données !!' . $e->getMessage());
    }
    $pseudo = $_POST['pseudo'];
    //  Récupération de l'utilisateur et de son pass hashé
    $req = $bdd->prepare('SELECT id, pass FROM membres WHERE pseudo = :pseudo');
    $req->execute(array(
        'pseudo' => $pseudo
    ));
    $resultat = $req->fetch();

    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

    if (!$resultat) {
        echo 'Mauvais identifiant ou mot de passe !';
    } else {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['pseudo'] = $pseudo;
            echo 'Vous êtes connecté ! ' . $_POST['pseudo'];
            echo '<br/>';
        } else {
            echo 'Mauvais identifiant ou mot de passe !';
        }

        if (isset($_SESSION['id']) and isset($_SESSION['pseudo'])) {
            echo 'Bonjour ' . $_SESSION['pseudo'];
        }
    }
    ?>
    <br />

    <form method="post" action="deconnexion.php" enctype="multipart/form-data">
        <form action=" deconnexion.php" method="post">
            <p>
                <label>deconnexion</label>
                <br />
                 <br />
                <input type="submit" name="deconnexion" value="deconnexion" />
            </p>
        </form>

    </form>



   

    <br />

</body>

</html>