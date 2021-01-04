# PHP MYSQL
<!-- TOC -->

- [PHP MYSQL](#php-mysql)
- [Faites vos premiers pas en PHP](#faites-vos-premiers-pas-en-php)
    - [Decouvrez le fonctionnement d'un site ecrit en PHP](#decouvrez-le-fonctionnement-dun-site-ecrit-en-php)
    - [Preparez votre environnement de travail](#preparez-votre-environnement-de-travail)

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

**Afin d'executer**