<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <form method="post" action="cible.php" enctype="multipart/form-data">

        <p>
            Cette page ne contient que du HTML.<br />
            Veuillez taper votre prénom :
        </p>

        <form action=" cible.php" method="post">
            <p>
                <input type="text" name="prenom" />
                <br />
                <textarea name="message" rows="8" cols="45">
                Votre message ici.
                </textarea>
                <br />
                <select name="choix">
                    <option value="Anglais">Anglais</option>
                    <option value="Espagnole">Espagnole</option>
                    <option value="Francais" selected="selected">Francais</option>
                    <option value="Russe">Russe</option>
                </select>
                <br />
            <p>Selectionner votre plat prefere :
                <input type="checkbox" name="case" id="case" /> <label for="case">Frites</label>
                <input type="checkbox" name="case1" id="case" /> <label for="case">Steak haché</label>
                <input type="checkbox" name="case2" id="case" checked="checked" /> <label for="case">Epinard</label>
                <input type="checkbox" name="case3" id="case" /> <label for="case">Huitres</label>
            </p>
            <br />
            Aimez-vous les frites ?
            <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
            <input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>
            <br />
            <input type="hidden" name="pseudo" value="Toto" />
            <br />
            <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
            </p>
            <br />
            <input type="submit" value="Valider" />
            </p>
        </form>

    </form>
</body>

</html>