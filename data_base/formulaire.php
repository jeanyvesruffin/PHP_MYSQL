<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transmettre donnees avec URL</title>
</head>

<body>
    <a href="cible.php?possesseur=Patrick&amp;prix_max=20">Passage des parametre a index.php</a>

    <a href="cible2.php"><button>Ajouter une entre</button></a>
    <a href="cible4.php"><button>Update une entre</button></a>
    <form method="post" action="cible3.php">

        <form action="cible3.php" method="post">
            <p>
                <Label>nom</Label>
                <br />
                <textarea name="nom" rows="1">test</textarea>
                <br />
                <Label>possesseur</Label>
                <br />
                <textarea name="possesseur" rows="1">pos</textarea>
                <br />
                <Label>console</Label>
                <br />
                <textarea name="console" rows="1">consolePost</textarea>
                <br />
                <Label>prix</Label>
                <br />
                <textarea name="prix" rows="1">4</textarea>
                <br />
                <Label>nbre_joueurs_max</Label>
                <br />
                <textarea name="nbre_joueurs_max" rows="1">8</textarea>
                <br />
                <Label>commentaires</Label>
                <br />
                <textarea name="commentaires" rows="1">ras</textarea>
                <br />
                <br />
                <input type="submit" value="Valider" />
            </p>
        </form>

    </form>



</body>

</html>