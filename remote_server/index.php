<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remote Server with filezilla server</title>
</head>

<body>
    <?php
    // on ouvre le fichier
    $monFichier = fopen('compteur.txt', 'r+');
    // Lecture 1er ligne du fichier
    $ligne = fgets($monFichier);
    echo ($ligne);
    // ecrire dans le fichier
    fputs($monFichier, 'je viens d\'editer mon text a la fin du fichier');
    // remise à zero du curseur
    fseek($monFichier, 0);
    // on ecrit en debut de fichier
    fputs($monFichier, 'Enfin on est pas mal ');
    // on ferme le fichier
    fclose($monFichier);
    echo ('contenu du fichier ' . $monFichier)
    ?>
</body>

</html>compteur.txt