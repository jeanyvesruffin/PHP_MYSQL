# PHP MYSQL

**[La bible PHP sur https://www.php.net/manual/fr](https://www.php.net/manual/fr)**
**[php codeur](https://phpcodeur.net)**

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
    - [Les boucles](#les-boucles)
    - [Les tableaux](#les-tableaux)
    - [Les fonctions](#les-fonctions)
    - [Inclure des portions de page](#inclure-des-portions-de-page)
- [Transmettez des donnees de page en page](#transmettez-des-donnees-de-page-en-page)
    - [Transmettez des donnees avec l'URL](#transmettez-des-donnees-avec-lurl)
    - [Transmettez des donnees avec les formulaires](#transmettez-des-donnees-avec-les-formulaires)
    - [TP1 : Page protegee par mot de passe](#tp1--page-protegee-par-mot-de-passe)
    - [Variables superglobales](#variables-superglobales)
    - [Session & Cookies](#session--cookies)
    - [Lisez et ecrivez dans un fichier](#lisez-et-ecrivez-dans-un-fichier)
- [Base de donnees](#base-de-donnees)
    - [Qu'est ce qu'une base de donnees](#quest-ce-quune-base-de-donnees)
    - [phpMyAdmin](#phpmyadmin)
    - [Lire les donnees](#lire-les-donnees)
- [Bug fix](#bug-fix)

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
- Bien qu'il soit possible d'installer ces outils separement, il est plus simple pour nous d'installer un paquetage tout prêt : MAMP sous Windows et Mac OS X, ou XAMPP sous Linux.
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
[XDebug]
xdebug.remote_enable = 1
xdebug.remote_autostart = 1
```

> Bug fix There is already a debug configuration "Listen for XDebug" running. ???????????

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
- La valeur d'une variable peut être affichee avec l'instruction echo.
- Il est possible de faire des calculs mathematiques entre plusieurs variables : addition, soustraction, multiplication…

> **La concatenation avec les simple guillemets est plus rapide que les double .Il faut ajouter un . entre chaque terme. Si besoin d'echapper un caractere il faut utiliser l'antislash \ .**

## Les conditions

- Les conditions permettent a PHP de prendre des decisions en fonction de la valeur des variables.
- La forme de condition la plus courante est if ... elseif ... else qui signifie « si »… « sinon si »… « sinon ».

**Exemple else elseif else**

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
- Si une condition comporte de nombreux elseif, il peut être plus pratique d'utiliser switch, une autre forme de condition.

**Exemple switch case**

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

**Exemple ternaire**

```php
<?php
$age = 24;

$majeur = ($age >= 18) ? true : false;
?>
```

## Les boucles

- Les boucles demandent a PHP de repeter des instructions plusieurs fois.
- Les deux principaux types de boucles sont :
  - while : : a utiliser de preference lorsqu'on ne sait pas par avance combien de fois la boucle doit être repetee;
  - for : a utiliser lorsqu'on veut repeter des instructions un nombre precis de fois.
- L'incrementation est une technique qui consiste a ajouter 1 a la valeur d'une variable. La decrementation retire au contraire 1 a cette variable. On trouve souvent des incrementations au sein de boucles for.

**Exemple boucle while**

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

**Exemple boucle do-while**

```php
<?php
$i = 0;
do {
    echo $i;
} while ($i > 0);
?>
```

**Exemple boucle for**

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

**Exemple boucle foreach**

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

**Exemple tableau numerote**

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

**Exemple de tableaux associatifs**

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

**Exemple de recherche d'element dans un tableau**

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

**Exemples de fonction native a PHP**

- strlen : longueur d'une chaine
- str_replace : rechercher et remplacer
- str_shuffle : melanger les lettres
- strtolower : ecrire en minuscules
- strtoupper : ecrire en majuscules

## Inclure des portions de page

- Une page PHP peut inclure une autre page (ou un morceau de page) grace a l'instruction include.
- L'instruction include sera remplacee par le contenu de la page demandee.
- Cette technique, tres simple a mettre en place, permet par exemple de placer les menus de son site dans un fichier menus.php que l'on inclura dans toutes les pages. Cela permet de centraliser le code des menus, alors qu'on etait auparavant obliges de le copier dans chaque page sur nos sites statiques en HTML et CSS !

**Syntaxe**

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
- Que ce soit pour des donnees issues de l'URL (`$_GET`) ou d'un formulaire (`$_POST`), il faut s'assurer qu'aucun texte qui vous est envoye ne contient du HTML si celui-ci est destine a etre affiche sur une page. Sinon, vous ouvrez une faille appelee XSS qui peut être nefaste pour la securite de votre site.
- Pour eviter la faille XSS, il suffit d'appliquer la fonction htmlspecialchars sur tous les textes envoyes par vos visiteurs que vous afficherez.
- Les formulaires permettent d'envoyer des fichiers. On retrouve les informations sur les fichiers envoyes dans un array `$_FILES`. Leur traitement est cependant plus complexe.

## TP1 : Page protegee par mot de passe

[TP1\formulaire.php](TP1\formulaire.php)
[TP1\secret.php](TP1\secret.php)

## Variables superglobales

- Les variables superglobales sont des variables automatiquement creees par PHP. Elles se presentent sous la forme d'arrays contenant differents types d'informations.
- Dans les chapitres precedents, nous avons decouvert deux superglobales essentielles :`$_GET` (qui contient les donnees issues de l'URL) et `$_POST` (qui contient les donnees issues d'un formulaire).

**Exemple**

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

**Exemple SESSION**

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


**Exemple COOKIE**

```php
<?php
setcookie('pseudo', 'Dupont', time() + 365 * 24 * 3600, null, null, false, true);
?>
```
> **Il faut appeler `session_start()` et `setcookie` sur chacune de vos pages AVANT d'ecrire le moindre code HTML (avant meme la balise `<!DOCTYPE>`). Si vous oubliez de lancer `session_start()` , vous ne pourrez pas acceder aux variables superglobales `$_SESSION`.**

## Lisez et ecrivez dans un fichier

* PHP permet d'enregistrer des informations dans des fichiers sur le serveur.
* Il faut au prealable s'assurer que les fichiers autorisent PHP a les modifier. Pour cela, il faut changer les permissions du fichier (on parle de `chmod`) a l'aide d'un logiciel FTP comme FileZilla. Donnez la permission `777` au fichier pour permettre a PHP de travailler dessus.
* La fonction `fopen` permet d'ouvrir le fichier, `fgets` de le lire ligne par ligne et `fputs` d'y ecrire une ligne.
* A moins de stocker des donnees tres simples, l'utilisation des fichiers n'est pas vraiment la technique la plus adaptee pour enregistrer des informations. Il est vivement recommande de faire appel a une base de donnees.

```php
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
```

# Base de donnees
## Qu'est ce qu'une base de donnees

* Une base de donnees est un outil qui stocke vos donnees de maniere organisee et vous permet de les retrouver facilement par la suite.
* On communique avec MySQL grace au langage SQL. Ce langage est commun a tous les systemes de gestion de base de donnees (avec quelques petites differences neanmoins pour certaines fonctionnalites plus avancees).
* PHP fait l'intermediaire entre vous et MySQL.
* Une base de donnees contient plusieurs tables.
* Chaque table est un tableau ou les colonnes sont appelees « champs » et les lignes « entrees ».

## phpMyAdmin

* phpMyAdmin est un outil qui nous permet de visualiser rapidement l'etat de notre base de donnees et de la modifier, sans avoir à ecrire de requêtes SQL.
* On cree generalement un champ nomme `id` qui sert a numeroter les entrees d'une table. Ce champ doit avoir un `index PRIMARY` (on dit qu'on cree une cle primaire) et l'`option AUTO_INCREMENT` qui permet de laisser MySQL gerer la numerotation.
* MySQL gere differents types de donnees pour ses champs, à la maniere de PHP. On trouve des types adaptes au stockage de nombres, de textes, de dates, etc.
* phpMyAdmin possede un outil d'importation et d'exportation des tables qui nous permettra notamment d'envoyer notre base de donnees sur Internet lorsque nous mettrons notre site en ligne.

**Exemple**
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

* Pour dialoguer avec MySQL depuis PHP, on fait appel a l'extension `PDO` de PHP.
* Avant de dialoguer avec MySQL, il faut s'y connecter. On a besoin de l'adresse IP de la machine où se trouve MySQL, du nom de la base de donnees ainsi que d'un login et d'un mot de passe.
* Les requêtes SQL commençant par `SELECT` permettent de recuperer des informations dans une base de donnees.
* Il faut faire une boucle en PHP pour recuperer ligne par ligne les donnees renvoyees par MySQL.
* Le langage SQL propose de nombreux outils pour preciser nos requêtes, a l'aide notamment des mots-cles `WHERE`(filtre), `ORDER BY`(tri) et `LIMIT` (limitation du nombre de resultats).
* Pour construire une requête en fonction de la valeur d'une variable, on passe par un systeme de requête preparee qui permet d'eviter les dangereuses failles d'injection SQL.









# Bug fix

> **Bug fix Transmettez des donnees**

- si `$_FILES['monfichier']['error']` return 1 cela signifie que la taille du fichier telecharge excede la valeur de upload_max_filesize, configuree dans le php.ini.
- si doute sur l'extension du fichier envoye. Interroger `$infosFichier = pathinfo($_FILES['monfichier']['name'])$extension_upload = $infosFichier['extension'];` Exemple MP4 c'est en realite mp4.
- si vous avez des erreurs lors de l'execution de xdebug telquelle `Notice: Undefined index:` cela signifie qu'il manque une verification isset de vos parametres transmis.
- si erreur `Warning: move_uploaded_file(file): failed to open stream` verifier que le repertoire cible existe sur le serveur a l'aide de `echo realpath($sTempFileName)` + Check [Bug fix php.net](https://www.php.net/manual/en/function.move-uploaded-file) + verifier votre configuration de fichier php.ini
- Pour charger votre video sur une page, une erreur peux survenir `web Not allowed to load local resource`.
- Probleme serceur distant:
Au prealable installer a l'aide de google plateform , par exemple , un serveur distant. Installer Filezila server [Solution rtapide avec filezilla server](https://www.youtube.com/watch?v=IDupV3NBz6g&ab_channel=BTNHD)