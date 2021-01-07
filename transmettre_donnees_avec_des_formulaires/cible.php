<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cible</title>
</head>

<body>

    <p>Bonjour !</p>

    <p>Je sais comment tu t'appelles, hé hé. Tu t'appelles
        <?php
        if (isset($_POST['prenom'])) {
            echo strip_tags($_POST['prenom']);
        }
        ?>
        !</p>

    <p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>

    <p>Je transmet le message :
        <?php
        if (isset($_POST['message'])) {
            echo strip_tags($_POST['message']);
        }
        ?>
    </p>
    <p>Vous avez choisi :
        <?php
        if (isset($_POST['choix'])) {
            echo $_POST['choix'];
        }
        ?>
    </p>
    <p>Vos plats preferes sont :
        <br />
        <?php

        if (isset($_POST['case'])) {
            echo 'Frites';
            echo '<br/>';
        }
        if (isset($_POST['case1'])) {
            echo 'Steak haché';
            echo '<br/>';
        }
        if (isset($_POST['case2'])) {
            echo 'Epinard';
            echo '<br/>';
        }
        if (isset($_POST['case3'])) {
            echo 'Huitres';
            echo '<br/>';
        }
        echo ("Aimez-vous les frites ?");
        if (isset($_POST['frites'])) {
            echo ($_POST['frites']);
        }
        echo '<br/>';
        echo 'Merci :';
        if (isset($_POST['pseudo'])) {
            echo strip_tags($_POST['pseudo']);
        }
        echo '<br/>';
        // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
        if (isset($_FILES['monfichier']) and $_FILES['monfichier']['error'] == 0) {
            // Testons si le fichier n'est pas trop gros
            echo 'Taille du fichier envoyé ' . $_FILES['monfichier']['size'];
            echo '<br/>';
            if ($_FILES['monfichier']['size'] <= 8000000) {
                // Testons si l'extension est autorisée
                $infosFichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosFichier['extension'];
                $extension_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'mp4');
                // echo 'Repertoire de destination : '.getcwd();
                if (in_array($extension_upload, $extension_autorisees)) {
                    // On peut valider le fichier et le stocker définitivement
                    $tempFileLoader = 'D:\PROGRAMMING\PHP_MYSQL\transmettre_donnees_avec_des_formulaires/uploads/' . basename($_FILES['monfichier']['name']);
                    // echo(realpath($tempFileLoader));
                    move_uploaded_file($_FILES['monfichier']['tmp_name'], $tempFileLoader);
                    echo 'L\'envoi a bien été effectué ! ';
                } else {
                    echo "Echec de l'envoi du fichier, Extension non autorisé !";
                    echo '<br/>';
                    echo 'type file ', $extension_upload;
                }
            } else {
                echo "Echec de l'envoi du fichier . Fichier TROP GROS < 8000000 !";
            }
        } else {
            echo "Echec de l'envoi du fichier !";
            echo '<br/>';
            echo (isset($_FILES['monfichier']));
            echo '<br/>';
            if (isset($_FILES['monfichier']['error'])) {
                echo ($_FILES['monfichier']['error']);
            }
            echo '<br/>';
            if (isset($_FILES['monfichier'])) {
                foreach ($_FILES['monfichier'] as $key => $value) {
                    echo ($key);
                    echo '<br/>';
                    echo ($value);
                    echo '<br/>';
                }
            }
        }


        ?>
    </p>
    <p>Fichier uploader</p>
    <?php
    if (isset($tempFileLoader)) {
        echo '<video controls width="500">
            
        <source src="'.$tempFileLoader.'"
        type="video/mp4">


Sorry, your browser doesn\'t support embedded videos.
            
            
            
            
            </video>';
    }
    ?>
</body>

</html>