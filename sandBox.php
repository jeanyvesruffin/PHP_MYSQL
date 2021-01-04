<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma page web</title>
</head>

<body>
    <h1>Ma page web</h1>
    <p> Cette ligne a été écrite entièrement en HTML.<br />
        <?php
        // commentaire test
        echo "Celle-ci a été écrite entièrement en PHP.";
        echo "<br/>";
        echo "Avec du dynamique nous sommes le ";
        echo date('d/m/Y h:i:s');
        /*
            bloc de commentaires
        */
        echo "<br/>";
        echo 'test gettype retournant le type de variable';
        echo "<br/>";

        echo("Pour une chaine de caratere :");
        $texte="Une chaine de caratere";
        echo gettype($texte);
        echo "<br/>";

        echo("Pour un nombre :");
        $nombre=14;
        echo gettype($nombre);
        echo "<br/>";

        echo("Pour un float :");
        $floatNbre=14.738;
        echo gettype($floatNbre);
        echo "<br/>";

        echo("Pour un boolean :");
        $booleanState=true;
        echo gettype($booleanState);
        echo "<br/>";

        echo("Pour un null :");
        $nullType=null;
        echo gettype($nullType);
        echo "<br/>";
        ?>
    </p>

</body>

</html>