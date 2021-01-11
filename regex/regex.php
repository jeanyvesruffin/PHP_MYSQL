<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGEX PCRE</title>
</head>

<body>


    <?php
    // recherche mot guitare ou piano
    if (preg_match("#guitare|piano#i", "J\'aime la piano")) {
        echo 'Le mot que vous cherchez se trouve dans la chaine #guitare|piano#i dans "J\'aime la piano"';
        echo '<br/>';
    } else {
        echo 'Le mot que vous cherchez ne se trouve pas dans la chaine ';
    }
    // debut de chaine de caratere
    if (preg_match("#^Bonjour#i", "Bonjour tous le monde!")) {
        echo 'le regex est Vrai #^Bonjour#i dans Bonjour tous le monde!';
        echo '<br/>';
    } else {
        echo 'faux ';
    }
    // Des classes simples
    if (preg_match("#gr[aoi]s#i", "Berk, c\'est trop gras comme nourriture")) {
        echo 'le regex est Vrai dans Berk, c\'est trop gras comme nourriture #gr[aoi]s#i dans Berk, c\'est trop gras comme nourriture';
        echo '<br/>';
    } else {
        echo 'Le mot que vous cherchez ne se trouve pas dans la chaine ';
    }
    if (preg_match("#[aeiouy]$#", "Je suis un vrai zéro")) {
        echo 'le regex est Vrai dans Je suis un vrai zéro se termine bien par #[aeiouy]$# dans Je suis un vrai zéro';
        echo '<br/>';
    } else {
        echo 'Le mot que vous cherchez ne se trouve pas dans la chaine ';
    }
    // Les intervalles de classe
    if (preg_match("#[a-z]$#", "Je suis un vrai zéro")) {
        echo 'le regex est Vrai dans Je suis un vrai zéro se termine bien par #[a-z]$# dans Je suis un vrai zéro';
        echo '<br/>';
    } else {
        echo 'Le mot que vous cherchez ne se trouve pas dans la chaine ';
    }
    // Les intervalles de classe a exclure
    if (preg_match("#[^0-9]$#", "Je suis un vrai zéro")) {
        echo 'le regex est Vrai dans Je suis un vrai zéro ne commence pas par un chiffre #[^a-z]$# dans Je suis un vrai zéro';
        echo '<br/>';
    } else {
        echo 'Le mot que vous cherchez ne se trouve pas dans la chaine ';
    }
    // Les symboles les plus courants
    if (preg_match("#bor?is#i", "Bois")) {
        echo 'le regex est Vrai indique que la lettre est facultative #bor?is#i dans Boris ou bois';
        echo '<br/>';
    } else {
        echo 'Le mot que vous cherchez ne se trouve pas dans la chaine ';
    }
    if (preg_match("#b+#i", "Bois")) {
        echo 'le regex est Vrai indique que la lettre b est obligatoire #bor?is#i dans Boris ou bois';
        echo '<br/>';
    } else {
        echo 'Le mot que vous cherchez ne se trouve pas dans la chaine ';
    }
    if (preg_match("#b*#i", "ois")) {
        echo 'le regex est Vrai indique que la lettre b est facultative #bor?is#i dans oris ou ois';
        echo '<br/>';
    } else {
        echo 'Le mot que vous cherchez ne se trouve pas dans la chaine ';
    }
    if (preg_match("#a{3}#i", "Haaa ! pourquoi pas")) {
        echo 'le regex est Vrai indique que la lettre a est repete 3 fois #a{3}#i aaa ! pourquoi pas';
        echo '<br/>';
    } else {
        echo 'Le mot que vous cherchez ne se trouve pas dans la chaine ';
    }
    ?>
    <?php
    $texte = 'Ce texte est [b]important[/b], il faut me [b]comprendre[/b] !';
    $texte2 = 'Ce texte est [i]important[/i], il faut me [i]comprendre[/i] !';
    $texte = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $texte);
    $texte2 = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $texte2);
    echo $texte;
    echo '<br/>';
    echo $texte2;
    ?>
    <?php
    if (isset($_POST['texte'])) {
        $texte = stripslashes($_POST['texte']); // On enlève les slashs qui se seraient ajoutés automatiquement
        $texte = htmlspecialchars($texte); // On rend inoffensives les balises HTML que le visiteur a pu rentrer
        $texte = nl2br($texte); // On crée des <br /> pour conserver les retours à la ligne

        // On fait passer notre texte à la moulinette des regex
        $texte = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $texte);
        $texte = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $texte);
        $texte = preg_replace('#\[color=(red|green|blue|yellow|purple|olive)\](.+)\[/color\]#isU', '<span style="color:$1">$2</span>', $texte);
        $texte = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $texte);

        // Et on affiche le résultat. Admirez !
        echo $texte . '<br /><hr />';
    }
    ?>

    <p>
        Bienvenue dans le parser de mon site !<br />
        Nous avons écrit ce parser ensemble, j'espère que vous saurez apprécier de voir que tout ce que vous avez appris va vous être très utile !
    </p>

    <p>Amusez-vous à utiliser du bbCode. Tapez par exemple :</p>

    <blockquote style="font-size:0.8em">
        <p>
            Je suis un grand [b]débutant[/b], et pourtant j'ai [i]tout appris[/i] sur http://www.openclassrooms.com<br />
            Je vous [b][color=green]recommande[/color][/b] d'aller sur ce site, vous pourrez apprendre à faire ça [i][color=purple]vous aussi[/color][/i] !
        </p>
    </blockquote>

    <form method="post">
        <p>
            <label for="texte">Votre message ?</label><br />
            <textarea id="texte" name="texte" cols="50" rows="8"></textarea><br />
            <input type="submit" value="Montre-moi toute la puissance des regex" />
        </p>
    </form>
</body>

</html>