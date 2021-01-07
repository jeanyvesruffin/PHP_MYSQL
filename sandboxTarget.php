<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sandBoxTargetPage</title>
</head>

<body>
    <?php
    echo 'valeur de session';
    print_r($_SESSION);
    echo'<br/>';
    echo'Ton nom';
    echo'<br/>';
    echo $_SESSION['nom'];
    echo'<br/>';
    echo'Ton prenom';
    echo'<br/>';
    echo $_SESSION['prenom'];
    echo'<br/>';
    echo'Ton pseudo se trouve dans les cookie pour une duree d\'un an';
    echo'<br/>';
    echo $_COOKIE['pseudo'];
    ?>
</body>

</html>