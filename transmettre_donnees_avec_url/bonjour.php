<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour</title>
</head>

<body>
    <p>Bonjour <?php echo $_GET['prenom'] . ' ' . $_GET['nom']; ?> !</p>
    <?php
    if (isset($_GET['prenom']) and isset($_GET['nom']) and isset($_GET['repeter'])) {
        // 1 : On force la conversion en nombre entier
        $_GET['repeter'] = (int)$_GET['repeter'];
        // 2 : Le nombre doit etre compris entre 1 et 100
        if ($_GET['repeter'] >= 1 && $_GET['repeter'] <= 100) {
            for ($i = 0; $i < $_GET['repeter']; $i++) {
                echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br/>';
            }
        } else {
            echo 'Il faut renseigner un nom, un prénom et un nombre de repetitions !';
        }
    }
    ?>
</body>

</html>