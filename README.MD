# PHP MYSQL
<!-- TOC -->

- [PHP MYSQL](#php-mysql)
- [Faites vos premiers pas en PHP](#faites-vos-premiers-pas-en-php)
    - [Decouvrez le fonctionnement d'un site ecrit en PHP](#decouvrez-le-fonctionnement-dun-site-ecrit-en-php)
    - [Preparez votre environnement de travail](#preparez-votre-environnement-de-travail)
    - [Ecrivez votre premier script](#ecrivez-votre-premier-script)
    - [Configurez PHP pour visualiser les erreurs](#configurez-php-pour-visualiser-les-erreurs)
    - [Les variables](#les-variables)

<!-- /TOC -->
# Faites vos premiers pas en PHP

## Decouvrez le fonctionnement d'un site ecrit en PHP

* Il existe deux types de sites web :
    * les sites statiques : realises en HTML et CSS, leur contenu ne peut etre mis a jour que par le webmaster ;
    * les sites dynamiques : realises avec d'autres outils comme PHP et MySQL en plus de HTML et CSS, ils permettent aux visiteurs de participer a la vie du site, de poster des messages… bref, de rendre le site vivant !
* Les visiteurs du site sont appeles les clients. Ils demandent au serveur qui heberge le site de leur transmettre les pages web.
* PHP est un langage execute par le serveur. Il permet de personnaliser la page en fonction du visiteur, de traiter ses messages, d'effectuer des calculs, etc. Il genere une page HTML.
* MySQL est un systeme de gestion de bases de donnees. Il se charge du stockage des informations (liste des messages, des membres…).

## Preparez votre environnement de travail

* Pour creer des sites web dynamiques, nous devons installer des outils qui transformeront notre ordinateur en serveur, afin de pouvoir tester notre site.
* Les principaux outils dont nous avons besoin sont :
    * Apache, le serveur web ;
    * PHP, le programme qui permet au serveur web d'executer des pages PHP ;
    * MySQL, le logiciel de gestion de bases de donnees.
* Bien qu'il soit possible d'installer ces outils separement, il est plus simple pour nous d'installer un paquetage tout prêt : MAMP sous Windows et Mac OS X, ou XAMPP sous Linux.
* Il est conseille d'utiliser un editeur de texte qui colore le code source, comme Sublime Text ou Atom, pour programmer convenablement en PHP.
Pour les personnes plus experimentees qui travaillent sur de gros projets, je recommande PHPStorm ou Visual Studio Code.

[live coding de l'installation de XDebug](https://nouvelle-techno.fr/actualites/live-coding-installation-configuration-et-utilisation-de-xdebug-dans-visual-studio-code)

[Debugging a PHP project on VSCode with Xdebug](https://dev.to/zeegcl/debugging-a-php-project-on-vscode-with-xdebug-2anp)


*Mode operatoire installation xDebug*

1. Telecharger MAMP
2. Ajouter a vos variables d'environnement le path de votre php (ex:C:\MAMP\bin\php\php7.4.1)
3. Creer un fichier php.ini en faisant un copier /coller de l'un des fichiers present dans le repectoire C:\MAMP\bin\php\php7.4.1 (suivant la version php selectionner)  php.ini-development ou production et le nommer php.ini.
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

* Les pages web contenant du PHP ont l'extension .php.
* Une page PHP est en fait une simple page HTML qui contient des instructions en langage PHP.
* Les instructions PHP sont placees dans une balise ouvrante et fermante : <?php ?>.
* Pour afficher du texte en PHP, on utilise l'instruction echo.
* Il est possible d'ajouter des commentaires en PHP pour decrire le fonctionnement du code. On utilise pour cela les symboles // ou /* */.

## Configurez PHP pour visualiser les erreurs

* Dans le fichier php.ini du dossier C:\MAMP\conf\php7.4.1\php.ini (voir phpinfo() Loaded Configuration File). Attribuer la valeur on au parametre display_errors.

## Les variables

