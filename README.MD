# PHP MYSQL

**[La bible PHP sur https://www.php.net/manual/fr](https://www.php.net/manual/fr)**
**[php codeur](https://phpcodeur.net)**
**[Test REGEX](https://regex101.com/)**

<!-- TOC -->

- [PHP MYSQL](#php-mysql)
- [Faites vos premiers pas en PHP](#faites-vos-premiers-pas-en-php)
    - [Decouvrez le fonctionnement d'un site ecrit en PHP](#decouvrez-le-fonctionnement-dun-site-ecrit-en-php)
    - [Preparez votre environnement de travail](#preparez-votre-environnement-de-travail)
    - [Ecrivez votre premier script](#ecrivez-votre-premier-script)
    - [Configurez PHP pour visualiser les erreurs](#configurez-php-pour-visualiser-les-erreurs)
- [Les bases de PHP](#les-bases-de-php)
    - [Les variables](#les-variables)
    - [Les conditions](#les-conditions)
        - [Exemple else elseif else](#exemple-else-elseif-else)
        - [Exemple switch case](#exemple-switch-case)
        - [Exemple ternaire](#exemple-ternaire)
    - [Les boucles](#les-boucles)
        - [Exemple boucle while](#exemple-boucle-while)
        - [Exemple boucle do-while](#exemple-boucle-do-while)
        - [Exemple boucle for](#exemple-boucle-for)
        - [Exemple boucle foreach](#exemple-boucle-foreach)
    - [Les tableaux](#les-tableaux)
        - [Exemple tableau numerote](#exemple-tableau-numerote)
        - [Exemple de tableaux associatifs](#exemple-de-tableaux-associatifs)
        - [Exemple de recherche d'element dans un tableau](#exemple-de-recherche-delement-dans-un-tableau)
    - [Les fonctions](#les-fonctions)
        - [Exemples de fonction native a PHP](#exemples-de-fonction-native-a-php)
    - [Inclure des portions de page](#inclure-des-portions-de-page)
        - [Syntaxe inclure](#syntaxe-inclure)
- [Transmettez des donnees de page en page](#transmettez-des-donnees-de-page-en-page)
    - [Transmettez des donnees avec l'URL](#transmettez-des-donnees-avec-lurl)
    - [Transmettez des donnees avec les formulaires](#transmettez-des-donnees-avec-les-formulaires)
    - [TP1 : Page protegee par mot de passe](#tp1--page-protegee-par-mot-de-passe)
    - [Variables superglobales](#variables-superglobales)
        - [Exemple variable superglobal](#exemple-variable-superglobal)
    - [Session & Cookies](#session--cookies)
        - [xemple SESSION](#xemple-session)
        - [Exemple COOKIE](#exemple-cookie)
    - [Lisez et ecrivez dans un fichier](#lisez-et-ecrivez-dans-un-fichier)
- [Base de donnees](#base-de-donnees)
    - [Qu'est ce qu'une base de donnees](#quest-ce-quune-base-de-donnees)
    - [phpMyAdmin](#phpmyadmin)
        - [Exemple script creation de base de donnees mysql](#exemple-script-creation-de-base-de-donnees-mysql)
    - [Lire les donnees](#lire-les-donnees)
        - [Methodologie pour se connecter et lire Avec log trace d'erreur array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)](#methodologie-pour-se-connecter-et-lire-avec-log-trace-derreur-arraypdoattr_errmodepdoerrmode_exception)
        - [Methologie requete prepare plus efficace avec des marqueurs nominatifs](#methologie-requete-prepare-plus-efficace-avec-des-marqueurs-nominatifs)
    - [Ecrire les donnees](#ecrire-les-donnees)
        - [Exemple d'ecriture de donnees](#exemple-decriture-de-donnees)
        - [Exemple d'ecriture de donnees grace a une requete preparee](#exemple-decriture-de-donnees-grace-a-une-requete-preparee)
        - [Exemple d'update de donnees](#exemple-dupdate-de-donnees)
        - [Exemple d'update de donnees avec requete prepare](#exemple-dupdate-de-donnees-avec-requete-prepare)
        - [Exemple Delete](#exemple-delete)
    - [Gestion des erreurs](#gestion-des-erreurs)
    - [Les fonctions SQL](#les-fonctions-sql)
        - [Exemple fonction scalaire UPPER, LOWER, LENGTH, ROUND](#exemple-fonction-scalaire-upper-lower-length-round)
        - [Exemple fonction d'agregat AVG, SUM, MAX, MIN, COUNT](#exemple-fonction-dagregat-avg-sum-max-min-count)
        - [Exemple de groupement des donneees GROUP BY, HAVING](#exemple-de-groupement-des-donneees-group-by-having)
    - [Les dates en SQL](#les-dates-en-sql)
        - [Exemple date](#exemple-date)
        - [Exemple fonction date: NOW(), CURDATE(), CURTIME(), DAY(), MONTH(), YEAR(), HOUR() , MINUTE() , SECOND(), DATE_FORMAT(), DATE_ADD() et DATE_SUB()](#exemple-fonction-date-now-curdate-curtime-day-month-year-hour--minute--second-date_format-date_add-et-date_sub)
    - [Les jointures entre tables](#les-jointures-entre-tables)
        - [Exemple jointure interne avec INNER JOIN](#exemple-jointure-interne-avec-inner-join)
        - [Exemple jointure externe avec LEFT JOIN](#exemple-jointure-externe-avec-left-join)
        - [Exemple jointure externe avec RIGHT JOIN](#exemple-jointure-externe-avec-right-join)
- [Creer une image en PHP](#creer-une-image-en-php)
        - [Le header](#le-header)
        - [Creation image a partir d'une image vide](#creation-image-a-partir-dune-image-vide)
        - [Creation image a partir d'une image existante](#creation-image-a-partir-dune-image-existante)
    - [Les expressions regulieres](#les-expressions-regulieres)
        - [Exemple regex](#exemple-regex)
        - [Exemple regex mysql](#exemple-regex-mysql)
        - [Exemple de capture et remplacement](#exemple-de-capture-et-remplacement)
        - [Exemple BBCode](#exemple-bbcode)
        - [Exemple complet BBCode](#exemple-complet-bbcode)
- [Bug fix et tips](#bug-fix-et-tips)

<!-- /TOC -->

# Faites vos premiers pas en PHP

## Decouvrez le fonctionnement d'un site ecrit en PHP

- Il existe deux types de sites web :
  - les sites statiques : realises en HTML et CSS, leur contenu ne peut etre mis a jour que par le webmaster ;
  - les sites dynamiques : realises avec d'autres outils comme PHP et MySQL en plus de HTML et CSS, ils permettent aux visiteurs de participer a la vie du site, de poster des messages… bref, de rendre le site vivant !
- Les visiteurs du site sont appeles les clients. Ils demandent au serveur qui heberge le site de leur transmettre les pages web.
- PHP est un langage execute par le serveur. Il permet de personnaliser la page en fonction du visiteur, de traiter ses messages, d'effectuer des calculs, etc. Il genere une page HTML.
- MySQL est un systeme de gestion de bases de donnees. Il se charge du stockage des informations (liste des messages, des membres…).

## Preparez votre environnement de travail

- Pour creer des sites web dynamiques, nous devons installer des outils qui transformeront notre ordinateur en serveur, afin de pouvoir tester notre site.
- Les principaux outils dont nous avons besoin sont :
  - Apache, le serveur web ;
  - PHP, le programme qui permet au serveur web d'executer des pages PHP ;
  - MySQL, le logiciel de gestion de bases de donnees.
- Bien qu'il soit possible d'installer ces outils separement, il est plus simple pour nous d'installer un paquetage tout pret : MAMP sous Windows et Mac OS X, ou XAMPP sous Linux.
- Il est conseille d'utiliser un editeur de texte qui colore le code source, comme Sublime Text ou Atom, pour programmer convenablement en PHP.
  Pour les personnes plus experimentees qui travaillent sur de gros projets, je recommande PHPStorm ou Visual Studio Code.

[live coding de l'installation de XDebug](https://nouvelle-techno.fr/actualites/live-coding-installation-configuration-et-utilisation-de-xdebug-dans-visual-studio-code)

[Debugging a PHP project on VSCode with Xdebug](https://dev.to/zeegcl/debugging-a-php-project-on-vscode-with-xdebug-2anp)

_Mode operatoire installation xDebug_

1. Telecharger MAMP
2. Ajouter a vos variables d'environnement le path de votre php (ex:C:\MAMP\bin\php\php7.4.1)
3. Creer un fichier php.ini en faisant un copier /coller de l'un des fichiers present dans le repectoire C:\MAMP\bin\php\php7.4.1 (suivant la version php selectionner) php.ini-development ou production et le nommer php.ini.
4. Editer le fichier php.ini et y indiquer l'extensions directory (exemple : extension_dir = "C:\MAMP\bin\php\php7.4.1\ext")
5. Tapper dans votre terminal `php-i`, puis copier/ coller le resultat de votre php.ini() dans le [wizard installation de xDebug](https://xdebug.org/wizard) de PHP Version jusqu'a la fin de script.
   ![xdebug wizard](ressources/xdebug.bmp)
6. Suivre les instructions.
7. Ajouter au fichier php.init les lignes suivantes :

```php.ini
[xdebug]
zend_extension = C:\MAMP\bin\php\php7.4.1\ext\php_xdebug-3.0.1-7.4-vc15.dll
xdebug.mode = debug
xdebug.start_with_request = yes
xdebug.client_port = 9000
```

**Attention suivant la version de xDebug les parametres sont differents**

## Ecrivez votre premier script

- Les pages web contenant du PHP ont l'extension .php.
- Une page PHP est en fait une simple page HTML qui contient des instructions en langage PHP.
- Les instructions PHP sont placees dans une balise ouvrante et fermante : <?php ?>.
- Pour afficher du texte en PHP, on utilise l'instruction echo.
- Il est possible d'ajouter des commentaires en PHP pour decrire le fonctionnement du code. On utilise pour cela les symboles // ou /\* \*/.

## Configurez PHP pour visualiser les erreurs

- Dans le fichier php.ini du dossier C:\MAMP\conf\php7.4.1\php.ini (voir phpinfo() Loaded Configuration File). Attribuer la valeur on au parametre display_errors (`display_errors=on`).

# Les bases de PHP

## Les variables

- Une variable est une petite information qui reste stockee en memoire le temps de la generation de la page PHP. Elle a un nom et une valeur.
- Il existe plusieurs types de variables qui permettent de stocker differents types d'informations : du texte (string), des nombres entiers (int), des nombres decimaux (float), des booleens pour stocker vrai ou faux (bool), etc.
- En PHP, un nom de variable commence par le symbole dollar : `$age` par exemple.
- La valeur d'une variable peut etre affichee avec l'instruction echo.
- Il est possible de faire des calculs mathematiques entre plusieurs variables : addition, soustraction, multiplication…

> **La concatenation avec les simple guillemets est plus rapide que les double .Il faut ajouter un . entre chaque terme. Si besoin d'echapper un caractere il faut utiliser l'antislash \ .**

## Les conditions

- Les conditions permettent a PHP de prendre des decisions en fonction de la valeur des variables.
- La forme de condition la plus courante est if ... elseif ... else qui signifie « si »… « sinon si »… « sinon ».

### Exemple else elseif else

```php
<?php
$autorisation_entrer = "Oui";
if ($autorisation_entrer == "Oui") // SI on a l'autorisation d'entrer
{
    // instructions a executer quand on est autorise a entrer
}
elseif ($autorisation_entrer == "Non") // SINON SI on n'a pas l'autorisation d'entrer
{
    // instructions a executer quand on n'est pas autorise a entrer
}
else // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
{
    echo "Euh, je ne connais pas ton âge, tu peux me le rappeler s'il te plaît ?";
}
?>
```

- On peut combiner des conditions avec les mots-cles AND (« et ») et OR (« ou »).
- Si une condition comporte de nombreux elseif, il peut etre plus pratique d'utiliser switch, une autre forme de condition.

### Exemple switch case

```php
<?php
$note = 10;

switch ($note) // on indique sur quelle variable on travaille
{
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;

    case 5: // dans le cas où $note vaut 5
        echo "Tu es tres mauvais";
    break;

    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais";
    break;

    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;

    case 12:
        echo "Tu es assez bon";
    break;

    case 16:
        echo "Tu te debrouilles tres bien !";
    break;

    case 20:
        echo "Excellent travail, c'est parfait !";
    break;

    default:
        echo "Desole, je n'ai pas de message a afficher pour cette note";
}
?>
```

- Les ternaires sont des conditions condensees qui font un test sur une variable, et en fonction des resultats de ce test donnent une valeur a une autre variable. Elles sont cependant plus rarement utilisees.

### Exemple ternaire

```php
<?php
$age = 24;

$majeur = ($age >= 18) ? true : false;
?>
```

## Les boucles

- Les boucles demandent a PHP de repeter des instructions plusieurs fois.
- Les deux principaux types de boucles sont :
  - while : : a utiliser de preference lorsqu'on ne sait pas par avance combien de fois la boucle doit etre repetee;
  - for : a utiliser lorsqu'on veut repeter des instructions un nombre precis de fois.
- L'incrementation est une technique qui consiste a ajouter 1 a la valeur d'une variable. La decrementation retire au contraire 1 a cette variable. On trouve souvent des incrementations au sein de boucles for.

### Exemple boucle while

```php
<?php
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100)
{
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
}
?>
```

### Exemple boucle do-while

```php
<?php
$i = 0;
do {
    echo $i;
} while ($i > 0);
?>
```

### Exemple boucle for

```php
<?php
/* exemple 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

/* exemple 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

/* exemple 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

/* exemple 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
?>
```

### Exemple boucle foreach

```php
<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr vaut maintenant array(2, 4, 6, 8)
unset($value); // Detruit la reference sur le dernier element
?>
```

**Exemple boucle foreach sans unset A EVITER sinon genere le rendu ci-dessous**

_Remarques: Vous pouvez modifier facilement les elements d'un tableau en precedent $value d'un &. Ceci assignera une reference au lieu de copier la valeur._

```php
<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr est maintenant array(2, 4, 6, 8)

// sans un unset($value), $value est toujours une reference au dernier element: $arr[3]

foreach ($arr as $key => $value) {
    // $arr[3] sera mis a jour avec chaque valeur de $arr...
    echo "{$key} => {$value} ";
    print_r($arr);
}
// ...jusqu'a ce que finalement la valeur de deuxieme a derniere soit copiee sur la derniere valeur

// sortie :
// 0 => 2 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 2 )
// 1 => 4 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 4 )
// 2 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
// 3 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
?>
```

## Les tableaux

- Les tableaux (ou arrays) sont des variables representees sous forme de tableau. Elles peuvent donc stocker de grandes quantites d'informations.
- Chaque ligne d'un tableau possede une cle (qui permet de l'identifier) et une valeur.
- Il existe deux types de tableaux :
  - les tableaux numerotes : chaque ligne est identifiee par une cle numerotee. La numerotation commence a partir de 0;
  - les tableaux associatifs : chaque ligne est identifiee par une courte chaine de texte.
- Pour parcourir un tableau, on peut utiliser la boucle for que l'on connait deja, mais aussi la boucle foreach qui est dediee aux tableaux.
- Il existe de nombreuses fonctions permettant de travailler sur des tableaux, et notamment d'effectuer des recherches.
  - array_key_exists : pour verifier si une cle existe dans l'array;
  - in_array : pour verifier si une valeur existe dans l'array ;
  - array_search : pour recuperer la cle d'une valeur dans l'array.

### Exemple tableau numerote

```php
<?php
// La fonction array permet de creer un array
$prenoms = array ('François', 'Michel', 'Nicole', 'Veronique', 'Benoît');

// Autres facons de faire
$prenoms[0] = 'François';
$prenoms[1] = 'Michel';
$prenoms[2] = 'Nicole';

// Ou alors
$prenoms[] = 'François'; // Creera $prenoms[0]
$prenoms[] = 'Michel'; // Creera $prenoms[1]
$prenoms[] = 'Nicole'; // Creera $prenoms[2]

// Affiche le 1er element
echo $prenom[0];
?>
```

### Exemple de tableaux associatifs

```php
<?php
// On cree notre array $coordonnees
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

// Ou alors
$coordonnees['prenom'] = 'François';
$coordonnees['nom'] = 'Dupont';
$coordonnees['adresse'] = '3 Rue du Paradis';
$coordonnees['ville'] = 'Marseille';

// Affiche le l'element avec la cle ville
echo $coordonnees['ville'];

// Boucle pour recuperer la cle et la valeur a l'aide de boucle for
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as $cle => $element)
{
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}

// technique d'affichage du tableau avec print_r
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

echo '<pre>';
print_r($coordonnees);
echo '</pre>';
?>
```

### Exemple de recherche d'element dans un tableau

```php
<?php
// AVEC array_key_exists
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

if (array_key_exists('nom', $coordonnees))
{
    echo 'La cle "nom" se trouve dans les coordonnees !';
}

if (array_key_exists('pays', $coordonnees))
{
    echo 'La cle "pays" se trouve dans les coordonnees !';
}

// Avec in_array
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits))
{
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}

if (in_array('Cerise', $fruits))
{
    echo 'La valeur "Cerise" se trouve dans les fruits !';
}

// Avec array_search
$fruits2 = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

$position = array_search('Fraise', $fruits2);
echo '"Fraise" se trouve en position ' . $position . '<br />';

$position = array_search('Banane', $fruits2);
echo '"Banane" se trouve en position ' . $position;
?>
```

## Les fonctions

- Les fonctions sont des blocs de code qui executent des instructions en fonction de certains parametres.
- Les fonctions ont generalement une entree et une sortie. Par exemple, si on donne la valeur 4 a la fonction de calcul du cube, celle-ci renvoie 64 en sortie.
- PHP propose des centaines et des centaines de fonctions pretes a l'emploi pour tous types de taches : envoyer un e-mail, recuperer l'heure, crypter des mots de passe, etc.
- Si PHP ne propose pas la fonction dont on a besoin, il est possible de la creer avec le mot-cle function.

### Exemples de fonction native a PHP

- strlen : longueur d'une chaine
- str_replace : rechercher et remplacer
- str_shuffle : melanger les lettres
- strtolower : ecrire en minuscules
- strtoupper : ecrire en majuscules

## Inclure des portions de page

- Une page PHP peut inclure une autre page (ou un morceau de page) grace a l'instruction include.
- L'instruction include sera remplacee par le contenu de la page demandee.
- Cette technique, tres simple a mettre en place, permet par exemple de placer les menus de son site dans un fichier menus.php que l'on inclura dans toutes les pages. Cela permet de centraliser le code des menus, alors qu'on etait auparavant obliges de le copier dans chaque page sur nos sites statiques en HTML et CSS !

### Syntaxe inclure

```php
<?php
include("file.php");
?>
```

# Transmettez des donnees de page en page

## Transmettez des donnees avec l'URL

- Une URL represente l'adresse d'une page web (commençant generalement par http://).
- Lorsqu'on fait un lien vers une page, il est possible d'ajouter des parametres sous la forme `bonjour.php?nom=Dupont&prenom=Jean`, qui seront transmis a la page.
- La page `bonjour.php`, dans l'exemple precedent, recevra ces parametres dans un array nomme `$_GET`:
  - `$_GET['nom']` aura pour valeur « Dupont » ;
  - `$_GET['prenom']` aura pour valeur « Jean ».
- Cette technique est tres pratique pour transmettre des valeurs a une page, mais il faut prendre garde au fait que le visiteur peut les modifier tres facilement. Il ne faut donc pas faire aveuglement confiance a ces informations, et tester prudemment leur valeur avant de les utiliser.
- La fonction `isset()` permet de verifier si une variable est definie ou non.
- Le transtypage est une technique qui permet de convertir une variable dans le type de donnee souhaite. Cela permet de s'assurer par exemple qu'une variable est bien un `int` (nombre entier).

**Remarques**

- Le `&` dans le code a ete remplace par `&amp;` dans le lien. Ça n'a rien a voir avec PHP: simplement, en HTML, on demande a ce que les `&` soient ecrits `&amp;` dans le code source. Si vous ne le faites pas, _le code ne passera pas la validation W3C_.

## Transmettez des donnees avec les formulaires

- Les formulaires sont le moyen le plus pratique pour le visiteur de transmettre des informations a votre site. PHP est capable de recuperer les donnees saisies par vos visiteurs et de les traiter.
- Les donnees envoyees via un formulaire se retrouvent dans un array `$_POST`.
- De la meme maniere que pour les URL, il ne faut pas donner sa confiance absolue aux donnees que vous envoie l'utilisateur. Il pourrait tres bien ne pas remplir tous les champs, voire trafiquer le code HTML de la page pour supprimer ou ajouter des champs. Traitez les donnees avec vigilance.
- Que ce soit pour des donnees issues de l'URL (`$_GET`) ou d'un formulaire (`$_POST`), il faut s'assurer qu'aucun texte qui vous est envoye ne contient du HTML si celui-ci est destine a etre affiche sur une page. Sinon, vous ouvrez une faille appelee XSS qui peut etre nefaste pour la securite de votre site.
- Pour eviter la faille XSS, il suffit d'appliquer la fonction htmlspecialchars sur tous les textes envoyes par vos visiteurs que vous afficherez.
- Les formulaires permettent d'envoyer des fichiers. On retrouve les informations sur les fichiers envoyes dans un array `$_FILES`. Leur traitement est cependant plus complexe.

## TP1 : Page protegee par mot de passe

[TP1\formulaire.php](TP1\formulaire.php)
[TP1\secret.php](TP1\secret.php)

## Variables superglobales

- Les variables superglobales sont des variables automatiquement creees par PHP. Elles se presentent sous la forme d'arrays contenant differents types d'informations.
- Dans les chapitres precedents, nous avons decouvert deux superglobales essentielles :`$_GET` (qui contient les donnees issues de l'URL) et `$_POST` (qui contient les donnees issues d'un formulaire).

### Exemple variable superglobal

```php
<pre>
<?php
print_r($_SERVER);
?>
</pre>
```

## Session & Cookies

- Une session permet de stocker des informations pendant la duree d'une visite
- Un cookie permet de stocker des informations sur l'ordinateur de vos visiteurs pendant plusieurs mois.
- Les variables superglobales sont des variables automatiquement creees par PHP. Elles se presentent sous la forme d'arrays contenant differents types d'informations.
- Dans les chapitres precedents, nous avons decouvert deux superglobales essentielles : `$_GET` (qui contient les donnees issues de l'URL) et `$_POST` (qui contient les donnees issues d'un formulaire).
- La superglobale `$_SESSION` permet de stocker des informations qui seront automatiquement transmises de page en page pendant toute la duree de visite d'un internaute sur votre site. Il faut au prealable activer les sessions en appelant la fonction `session_start()`.
- La superglobale `$_COOKIE` represente le contenu de tous les cookies stockes par votre site sur l'ordinateur du visiteur. Les cookies sont de petits fichiers que l'on peut ecrire sur la machine du visiteur pour retenir par exemple son nom. On cree un cookie avec la fonction `setcookie()`.

### xemple SESSION

```php
// session id
session_start();
$_SESSION['nom'] = 'ruffin';
$_SESSION['prenom'] = 'Jean-Yves';
print_r(session_id());
// return l'id de la session
print_r($_SESSION);
    /*return
        [nom] => ruffin
        [prenom] => Jean-Yves */

session_destroy();
```

### Exemple COOKIE

```php
<?php
setcookie('pseudo', 'Dupont', time() + 365 * 24 * 3600, null, null, false, true);
?>
```

> **Il faut appeler `session_start()` et `setcookie` sur chacune de vos pages AVANT d'ecrire le moindre code HTML (avant meme la balise `<!DOCTYPE>`). Si vous oubliez de lancer `session_start()` , vous ne pourrez pas acceder aux variables superglobales `$_SESSION`.**

## Lisez et ecrivez dans un fichier

- PHP permet d'enregistrer des informations dans des fichiers sur le serveur.
- Il faut au prealable s'assurer que les fichiers autorisent PHP a les modifier. Pour cela, il faut changer les permissions du fichier (on parle de `chmod`) a l'aide d'un logiciel FTP comme FileZilla. Donnez la permission `777` au fichier pour permettre a PHP de travailler dessus.
- La fonction `fopen` permet d'ouvrir le fichier, `fgets` de le lire ligne par ligne et `fputs` d'y ecrire une ligne.
- A moins de stocker des donnees tres simples, l'utilisation des fichiers n'est pas vraiment la technique la plus adaptee pour enregistrer des informations. Il est vivement recommande de faire appel a une base de donnees.

```php
<?php
// on ouvre le fichier
$monFichier = fopen('compteur.txt', 'r+');
// Lecture 1er ligne du fichier
$ligne = fgets($monFichier);
echo ($ligne);
// ecrire dans le fichier
fputs($monFichier, 'je viens d\'editer mon text a la fin du fichier');
// remise a zero du curseur
fseek($monFichier, 0);
// on ecrit en debut de fichier
fputs($monFichier, 'Enfin on est pas mal ');
// on ferme le fichier
fclose($monFichier);
echo ('contenu du fichier ' . $monFichier)
?>
```

# Base de donnees

## Qu'est ce qu'une base de donnees

- Une base de donnees est un outil qui stocke vos donnees de maniere organisee et vous permet de les retrouver facilement par la suite.
- On communique avec MySQL grace au langage SQL. Ce langage est commun a tous les systemes de gestion de base de donnees (avec quelques petites differences neanmoins pour certaines fonctionnalites plus avancees).
- PHP fait l'intermediaire entre vous et MySQL.
- Une base de donnees contient plusieurs tables.
- Chaque table est un tableau ou les colonnes sont appelees « champs » et les lignes « entrees ».

## phpMyAdmin

- phpMyAdmin est un outil qui nous permet de visualiser rapidement l'etat de notre base de donnees et de la modifier, sans avoir a ecrire de requetes SQL.
- On cree generalement un champ nomme `id` qui sert a numeroter les entrees d'une table. Ce champ doit avoir un `index PRIMARY` (on dit qu'on cree une cle primaire) et l'`option AUTO_INCREMENT` qui permet de laisser MySQL gerer la numerotation.
- MySQL gere differents types de donnees pour ses champs, a la maniere de PHP. On trouve des types adaptes au stockage de nombres, de textes, de dates, etc.
- phpMyAdmin possede un outil d'importation et d'exportation des tables qui nous permettra notamment d'envoyer notre base de donnees sur Internet lorsque nous mettrons notre site en ligne.

### Exemple script creation de base de donnees mysql

```sql
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `news` (`id`, `titre`, `contenu`) VALUES
(1, 'Ma premiere visite', 'Vous etets bien ici'),
(2, 'Ma secondevisite', 'Vous etets encore bien ici');

ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
```

![phpmyadmin](ressources\phpmyadmin.bmp)

## Lire les donnees

- Pour dialoguer avec MySQL depuis PHP, on fait appel a l'extension `PDO` de PHP.
- Avant de dialoguer avec MySQL, il faut s'y connecter. On a besoin de l'adresse IP de la machine où se trouve MySQL, du nom de la base de donnees ainsi que d'un login et d'un mot de passe.
- Les requetes SQL commençant par `SELECT` permettent de recuperer des informations dans une base de donnees.
- Il faut faire une boucle en PHP pour recuperer ligne par ligne les donnees renvoyees par MySQL.
- Le langage SQL propose de nombreux outils pour preciser nos requetes, a l'aide notamment des mots-cles `WHERE`(filtre), `ORDER BY`(tri) et `LIMIT` (limitation du nombre de resultats).
- Pour construire une requete en fonction de la valeur d'une variable, on passe par un systeme de requete preparee qui permet d'eviter les dangereuses failles d'injection SQL.

### Methodologie pour se connecter et lire Avec log trace d'erreur array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)

- PDO active: Controler dans le fichier php.ini que les parametres display_errors soit a on et pdo_mysql decommente.
- Creer une connexion a mysql a l'aide de pdo en testant la presence d'erreur.

```php
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root',  array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    echo 'base de donnees chargee';
} catch (Exception $exception) {
    die('Erreur ' . $exception->getMessage());
}
?>
```

- Peupler votre base de donnees dez donnees.
- Faire une requete

```php
$reponse = $bdd->query('SELECT * FROM jeux_video');
```

- Recuperer le contenu de la reponse de la requete.

```php
$donnee = $reponse->fetch();
```

- Affiche le resultat par exemple dans la page.

```php
<strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend a <?php echo $donnees['prix']; ?> euros !<br />
Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer a <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
<?php echo $donnees['possesseur']; ?> a laisse ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
```

**Methologie requete prepare**
_possesseur et prix_max sont transmis en parametre de l'url_

```php
$req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ?  AND prix <= ? ORDER BY prix');
$req->execute(array($_GET['possesseur'], $_GET['prix_max']));

echo '<ul>';
while ($donnees = $req->fetch()) {
    echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
}
echo '</ul>';

$req->closeCursor();
```

### Methologie requete prepare plus efficace avec des marqueurs nominatifs

```php
$reqMarqueurNominatif = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur  AND prix <= :prixmax');
$reqMarqueurNominatif->execute(array('possesseur' => $_GET['possesseur'], 'prixmax' => $_GET['prix_max']));

echo '<ul>';
while ($donnees = $reqMarqueurNominatif->fetch()) {
    echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
}
echo '</ul>';
```

## Ecrire les donnees

- On utilise differents mots-cles en fonction du type de modification que l'on souhaite effectuer :
  - `INSERT INTO` : ajout d'une entree ;
  - `UPDATE` : modification d'une ou plusieurs entrees ;
  - `DELETE` : suppression d'une ou plusieurs entrees.
- Comme pour la selection de donnees, on utilise les requetes preparees pour personnaliser nos requetes en fonction de variables.
- Lorsqu'on utilise `UPDATE` ou `DELETE`, il faut penser a filtrer avec un `WHERE`, sinon toute la table sera affectee par l'operation !

### Exemple d'ecriture de donnees

```php
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur d\'ecriture') . $e->getMessage();
}
$bdd->exec('INSERT INTO jeux_video(nom,possesseur,console,prix,nbre_joueurs_max, commentaires) VALUES (\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')');
?>
```

### Exemple d'ecriture de donnees grace a une requete preparee

```php
  <?php
    $nom = $_POST['nom'];
    $possesseur = $_POST['possesseur'];
    $console = $_POST['console'];
    $nbre_joueurs_max = $_POST['nbre_joueurs_max'];
    $commentaires = $_POST['commentaires'];
    $prix = $_POST['prix'];
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        echo 'Connexion a la base reussite';
    } catch (Exception $e) {
        die('Erreur d\'ecriture') . $e->getMessage();
    }
    $req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
    $req->execute(array(
        'nom' => $nom,
        'possesseur' => $possesseur,
        'console' => $console,
        'prix' => $prix,
        'nbre_joueurs_max' => $nbre_joueurs_max,
        'commentaires' => $commentaires
    ));
    echo 'Le jeu a bien ete ajoute !';
    ?>
```

### Exemple d'update de donnees

```php
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    echo 'Connexion a la base reussite';
} catch (Exception $e) {
    die('Erreur d\'ecriture') . $e->getMessage();
}
$nb_modifs = $bdd->exec('UPDATE jeux_video SET possesseur = \'Florent\' WHERE possesseur = \'Michel\'');
echo $nb_modifs . ' entrees ont ete modifiees !';

?>
```

### Exemple d'update de donnees avec requete prepare

```php

<?php
$nvprix=$_POST['nvprix'];
$nv_nb_joueurs=$_POST['nv_nb_joueurs'];
$nom_jeu=$_POST['nom_jeu'];
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    echo 'Connexion a la base reussite';
} catch (Exception $e) {
    die('Erreur d\'ecriture') . $e->getMessage();
}

$req = $bdd->prepare('UPDATE jeux_video SET prix = :nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
$req->execute(array(
    'nvprix' => $nvprix,
    'nv_nb_joueurs' => $nv_nb_joueurs,
    'nom_jeu' => $nom_jeu
));
?>

```

### Exemple Delete

```php
<?php
$nom_jeu=$_POST['nom_jeu'];
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    echo 'Connexion a la base reussite';
} catch (Exception $e) {
    die('Erreur d\'ecriture') . $e->getMessage();
}

$req = $bdd->prepare('DELETE  FROM jeux_video WHERE nom=:nom_jeu');
$req->execute(array(
    'nom_jeu' => $nom_jeu
));

print_r($_POST);
?>
```

## Gestion des erreurs

PHP indique si une erreur avec MySQL est intervenue.

```php
<?php
$reponse = $bdd->query('SELECT nom FROM jeux_video') or die(print_r($bdd->errorInfo()));
?>
```

## Les fonctions SQL

- MySQL permet d'executer certaines fonctions lui-meme, sans avoir a passer par PHP. Ces fonctions modifient les donnees renvoyees.
- Il existe deux types de fonctions :
  - les fonctions scalaires : elles agissent sur chaque entree recuperee. Elles permettent par exemple de convertir tout le contenu d'un champ en majuscules ou d'arrondir chacune des valeurs ;
  - les fonctions d'agregat : elles effectuent des calculs sur plusieurs entrees pour retourner une et une seule valeur. Par exemple : calcul de la moyenne, somme des valeurs, comptage du nombre d'entrees…
- On peut donner un autre nom aux champs modifies par les fonctions, en creant des alias a l'aide du mot-cle `AS`.
- Lorsqu'on utilise une fonction d'agregat, il est possible de regrouper des donnees avec `GROUP BY`.
- Apres un groupement de donnees, on peut filtrer le resultat avec `HAVING`. Il ne faut pas le confondre avec WHERE qui filtre avant le groupement des donnees.

### Exemple fonction scalaire UPPER, LOWER, LENGTH, ROUND

```sql
-- convertir en majuscules
SELECT UPPER(nom) AS nom_maj FROM jeux_video
-- convertir en minuscules
SELECT LOWER(nom) AS nom_min FROM jeux_video
-- compter le nombre de caractères
SELECT LENGTH(nom) AS longueur_nom FROM jeux_video
-- arrondir un nombre decimal
SELECT ROUND(prix, 2) AS prix_arrondi FROM jeux_video
```

### Exemple fonction d'agregat AVG, SUM, MAX, MIN, COUNT

```sql
-- calculer la moyenne
SELECT AVG(prix) AS prix_moyen FROM jeux_video
-- additionner les valeurs
SELECT SUM(prix) AS prix_total FROM jeux_video WHERE possesseur='Patrick'
-- retourner la valeur maximale
SELECT MAX(prix) AS prix_max FROM jeux_video
-- retourner la valeur minimale
SELECT MIN(prix) AS prix_min FROM jeux_video
-- compter le nombre d'entrees
SELECT COUNT(*) AS nbjeux FROM jeux_video
```

### Exemple de groupement des donneees GROUP BY, HAVING

```sql
SELECT AVG(prix) AS prix_moyen, console FROM jeux_video WHERE possesseur='Patrick' GROUP BY console HAVING prix_moyen <= 10
```

## Les dates en SQL

- MySQL propose plusieurs types de champs pour stocker des dates.
- Les deux types les plus couramment utilises sont :
  - DATE : stocke une date au format AAAA-MM-JJ ;
  - DATETIME : stocke une date et une heure au format AAAA-MM-JJ HH:MM:SS.
- On peut trier et filtrer des champs contenant des dates comme s'il s'agissait de nombres.
- Il existe de nombreuses fonctions SQL dediees au traitement des dates. La plus connue est NOW() qui renvoie la date et l'heure actuelles.

### Exemple date

```sql
SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02 00:00:00' AND date <= '2010-04-18 00:00:00'
```

### Exemple fonction date: NOW(), CURDATE(), CURTIME(), DAY(), MONTH(), YEAR(), HOUR() , MINUTE() , SECOND(), DATE_FORMAT(), DATE_ADD() et DATE_SUB()

```sql
-- obtenir la date et l'heure actuelles
INSERT INTO minichat(pseudo, message, date) VALUES('Mateo', 'Message !', NOW())
-- Notez qu'il existe aussi les fonctions CURDATE()  et CURTIME()  qui retournent respectivement uniquement la date (AAAA-MM-JJ) et l'heure (HH:MM:SS).
-- extraire le jour, le mois ou l'annee DAY(), MONTH(), YEAR()
SELECT pseudo, message, DAY(date) AS jour FROM minichat
-- extraire les heures, minutes, secondes HOUR()  , MINUTE()  , SECOND()
SELECT pseudo, message, HOUR(date) AS heure FROM minichat
-- formater date DATE_FORMAT
SELECT pseudo, message, DATE_FORMAT(date, '%d/%m/%Y %Hh%imin%ss') AS date FROM minichat
-- ajouter ou soustraire des dates DATE_ADD()  et DATE_SUB()
SELECT pseudo, message, DATE_ADD(date, INTERVAL 2 MONTH) AS date_expiration FROM minichat
```

## Les jointures entre tables

- Les bases de donnees permettent d'associer plusieurs tables entre elles.
- Une table peut contenir les id d'une autre table, ce qui permet de faire la liaison entre les deux. Par exemple, la table des jeux video contient pour chaque jeu l'id de son proprietaire. Le nom et les coordonnees du proprietaire sont alors stockes dans une table a part.
- Pour rassembler les informations au moment de la requête, on effectue des jointures.
- On peut faire des jointures avec le mot-cle `WHERE`, mais il est recommande d'utiliser `JOIN` qui offre plus de possibilites et qui est plus adapte.
- On distingue les jointures internes, qui retournent des donnees uniquement s'il y a une correspondance entre les deux tables, et les jointures externes qui retournent toutes les donnees, même s'il n'y a pas de correspondance.

### Exemple jointure interne avec INNER JOIN

```sql
SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
INNER JOIN jeux_video j
ON j.ID_proprietaire = p.ID
WHERE j.console = 'PC'
ORDER BY prix DESC
LIMIT 0, 10
```

### Exemple jointure externe avec LEFT JOIN

```sql
SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
LEFT JOIN jeux_video j
ON j.ID_proprietaire = p.ID
```

### Exemple jointure externe avec RIGHT JOIN

```sql
SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
RIGHT JOIN jeux_video j
ON j.ID_proprietaire = p.ID
```

# Creer une image en PHP

* PHP permet de faire bien plus que generer des pages web HTML. En utilisant des extensions, comme la bibliotheque GD, on peut par exemple generer des images.
* Pour qu'une page PHP renvoie une image au lieu d'une page web, il faut modifier l'en-tete HTTP a l'aide de la fonction `header()` qui indiquera alors au navigateur du visiteur l'arrivee d'une image.
* Il est possible d'enregistrer l'image sur le disque dur si on le souhaite, ce qui evite d'avoir a la generer a chaque fois qu'on appelle la page PHP.
* On peut creer des images avec GD a partir d'une image vide ou d'une image deja existante.
* GD propose des fonctions d'ecriture de texte dans une image et de dessin de formes basiques.
* Des fonctions plus avancees de GD permettent de fusionner des images ou d'en redimensionner.

### Le header
```php
<?php
header ("Content-type: image/png");
?>
```
### Creation image a partir d'une image vide
```php
<?php
header ("Content-type: image/png");
?>
```
### Creation image a partir d'une image existante
```php
<?php
header("Content-type: image/jpeg");
// chemin de l'image
$source = "couchersoleil.jpg";
// lecture de l'image
$photo = ImageCreateFromJpeg($source);
// affichage de l'image
imagejpeg($photo);
?>
```

## Les expressions regulieres

* Les expressions regulieres sont des outils de recherche et de remplacement de texte tres avances qui permettent d'effectuer des recherches tres precises, pour verifier par exemple que le texte saisi par l'utilisateur correspond bien a la forme d'une adresse e-mail ou d'un numero de telephone.
* La fonction `preg_match` verifie si un texte correspond a la forme decrite par une expression reguliere.
* Une expression reguliere est delimitee par un symbole (par exemple le diese `#`).
* Les classes de caracteres permettent d'autoriser un grand nombre de symboles (lettres et chiffres) selon un intervalle.
* Les quantificateurs permettent d'exiger la repetition d'une chaîne de texte un certain nombre de fois.
* Certains caracteres sont speciaux au sein d'une expression reguliere : on parle de metacaracteres. Si on souhaite les rechercher dans une chaine, il faut les echapper en placant un symbole antislash devant. Par exemple : `\[`.
* Il existe des classes abregees, c'est-a-dire des classes toutes pretes, comme par exemple `\d` qui revient a ecrire `[0-9]`.
* La fonction `preg_replace` permet d'effectuer des remplacements dans une chaine de texte.
* Dans le cas d'un remplacement, les parentheses au sein d'une expression reguliere permettent de capturer une portion de texte pour la reutiliser dans une autre chaine.




### Exemple regex

```php
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
        echo 'le regex est Vrai dans Je suis un vrai zéro ne commence pas par un chiffre #[^a-z]$# dans Je suis un vrai zéro' ;
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
```
### Exemple regex mysql

```sql 
SELECT nom FROM visiteurs WHERE ip REGEXP '^84\.254(\.[0-9]{1,3}){2}$'
-- Cela signifie : Sélectionne tous les noms de la table visiteurs  dont l'IP commence par « 84.254 » et se termine par deux autres nombres de un à trois chiffre(s) (ex. : 84.254.6.177).
```

### Exemple de capture et remplacement
```php
<?php
$texte = preg_replace('#\[b\](.+)\[/b\]#i', '<strong>$1</strong>', $texte);
?>
```

### Exemple BBCode
```php
<?php
$texte= 'Ce texte est [b]important[/b], il faut me [b]comprendre[/b] !';
$texte2= 'Ce texte est [i]important[/i], il faut me [i]comprendre[/i] !';
$texte = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $texte);
$texte2 = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $texte2);
echo $texte;
echo '<br/>';
echo $texte2;
?>
```

### Exemple complet BBCode
```php
<?php
if (isset($_POST['texte']))
{
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
```







# Bug fix et tips

> **Bug fix Transmettez des donnees**

- si `$_FILES['monfichier']['error']` return 1 cela signifie que la taille du fichier telecharge excede la valeur de upload_max_filesize, configuree dans le php.ini.
- si doute sur l'extension du fichier envoye. Interroger `$infosFichier = pathinfo($_FILES['monfichier']['name'])$extension_upload = $infosFichier['extension'];` Exemple MP4 c'est en realite mp4.
- si vous avez des erreurs lors de l'execution de xdebug telquelle `Notice: Undefined index:` cela signifie qu'il manque une verification isset de vos parametres transmis.
- si erreur `Warning: move_uploaded_file(file): failed to open stream` verifier que le repertoire cible existe sur le serveur a l'aide de `echo realpath($sTempFileName)` + Check [Bug fix php.net](https://www.php.net/manual/en/function.move-uploaded-file) + verifier votre configuration de fichier php.ini
- Pour charger votre video sur une page, une erreur peux survenir `web Not allowed to load local resource`.
- Probleme serveur distant: Installer Filezila server [Solution rtapide avec filezilla server](https://www.youtube.com/watch?v=IDupV3NBz6g&ab_channel=BTNHD).

> ** Tag php sous vscode a l'aide d4un snipper

* Open Preferences > User Snippets > Select html.json (HTML)

```json
"php": {
    "prefix": "php",
    "body": [ "<?php $1 ?>" ],
    "description": "php tag"
}
```