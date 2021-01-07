<?php
session_start();
setcookie('pseudo', 'Dupont', time() + 365 * 24 * 3600, null, null, false, true);
?>
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

       
        echo "<br/>";
        echo gettype($_SERVER);
        foreach ($_SERVER as $value) {
            echo $value;
            echo "<br/>";
        }


        echo "<br/>";
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

        echo ("Pour une chaine de caratere :");
        $texte = "Une chaine de caratere";
        echo gettype($texte);
        echo "<br/>";

        echo ("Pour un nombre :");
        $nombre = 14;
        echo gettype($nombre);
        echo "<br/>";

        echo ("Pour un float :");
        $floatNbre = 14.738;
        echo gettype($floatNbre);
        echo "<br/>";

        echo ("Pour un boolean :");
        $booleanState = true;
        echo gettype($booleanState);
        echo "<br/>";

        echo ("Pour un null :");
        $nullType = null;
        echo gettype($nullType);
        echo "<br/>";

        echo ("TEST concatenation double guillemets");
        echo "Le nombre decimal est $nombre";
        echo "<br/>";

        echo ("TEST concatenation simple guillemets i faut utiliser le . pour concatener");
        echo 'La valeur booleean est ' . $booleanState;
        echo "<br/>";

        echo "Test condition if elseif else";
        $autorisation_entrer = "Oui";
        if ($autorisation_entrer == "Oui") // SI on a l'autorisation d'entrer
        {
            echo ("Condition autorisation_entrer remplit (true)");
        } elseif ($autorisation_entrer == "Non") // SINON SI on n'a pas l'autorisation d'entrer
        {
            echo ("Condition autorisation_entrer NON remplit (false)");
        } else // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
        {
            echo "Euh, je ne connais pas ton âge, tu peux me le rappeler s'il te plaît ?";
        }
        echo "<br/>";

        $coordonnees = array(
            'prenom' => 'François',
            'nom' => 'Dupont',
            'adresse' => '3 Rue du Paradis',
            'ville' => 'Marseille'
        );

        foreach ($coordonnees as $cle => $element) {
            echo '[' . $cle . '] vaut ' . $element . '<br />';
        }
        echo "<br/>";

        $coordonnees2 = array(
            'prenom' => 'François',
            'nom' => 'Dupont',
            'adresse' => '3 Rue du Paradis',
            'ville' => 'Marseille'
        );

        echo '<pre>';
        print_r($coordonnees2);
        echo '</pre>';

        // AVEC array_key_exists
        $coordonnees = array(
            'prenom' => 'François',
            'nom' => 'Dupont',
            'adresse' => '3 Rue du Paradis',
            'ville' => 'Marseille'
        );

        if (array_key_exists('nom', $coordonnees)) {
            echo 'La clé "nom" se trouve dans les coordonnées !';
            echo "<br/>";
        }

        if (array_key_exists('pays', $coordonnees)) {
            echo 'La clé "pays" se trouve dans les coordonnées !';
            echo "<br/>";
        }

        // Avec in_array
        $fruits = array('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

        if (in_array('Myrtille', $fruits)) {
            echo 'La valeur "Myrtille" se trouve dans les fruits !';
            echo "<br/>";
        }

        if (in_array('Cerise', $fruits)) {
            echo 'La valeur "Cerise" se trouve dans les fruits !';
            echo "<br/>";
        }

        // Avec array_search
        $fruits2 = array('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

        $position = array_search('Fraise', $fruits2);
        echo '"Fraise" se trouve en position ' . $position . '<br />';
        echo "<br/>";

        $position = array_search('Banane', $fruits2);
        echo '"Banane" se trouve en position ' . $position;
        echo "<br/>";

        /**
         * Undocumented function
         *
         * @param string $name2
         * @return void
         */
        function direBonjour(string $name2)
        {
            return 'Bonjour ' . $name2 . ' !<br />';
        }
        echo direBonjour('Marie');

        // Ci-dessous, la fonction qui calcule le volume du cône
        function VolumeCone($rayon, $hauteur)
        {
            $volume = $rayon * $rayon * 3.14 * $hauteur * (1 / 3); // calcul du volume
            return $volume; // indique la valeur à renvoyer, ici le volume
        }

        $volume = VolumeCone(3, 1);
        echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume;


        ?>
    <pre>
<?php
print_r($_GET);
print_r($_POST);
print_r($_COOKIE);
print_r($_SERVER);
print_r($_ENV);
print_r($_FILES);
$_SESSION['nom'] = 'ruffin';
$_SESSION['prenom'] = 'Jean-Yves';
print_r(session_id());
print_r($_SESSION);
// session_destroy();
?>
</pre>
    </p>
    <p>
        <a href="sandboxTarget.php">clik here to sandBoxTargetPage pour test les valeur de la session</a>
    </p>

</body>

</html>