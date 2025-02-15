## [PHP-Base] lessons from (<https://www.youtube.com/watch?v=a6xtQQqx1tg>)

## [PHP-Part 2] lessons from (<https://www.youtube.com/watch?v=vJRL_MKoX9M>)

## [PHP 2023. Основы синтаксиса, переменные, базовые операции PHP] lesson from (<https://www.youtube.com/watch?v=NsSfJno2u-w&t=6s>)

## [PHP IZI] Взломай PHP за 5 часов:❗2️⃣ Быстрый курс PHP! Учись без боли  (<https://www.youtube.com/watch?v=VECorQhG5wQ&t=725s>)   258 string

## 1. Installation des outils PHP

### Qu'est-ce-que PHP ?

PHP (acronyme récursif pour PHP Hypertext Preprocessor) est un langage de programmation créé par Rasmus Lerdorf en 1994. C'est l'un des langages les plus utilisés pour créer des pages web dynamiques. C'est un langage backend car il s’exécute principalement côté serveur à l'aide d'un serveur HTTP. Il permet, entre autres, d'afficher des données dynamiquement, de traiter des formulaires, ou encore de se connecter à une base de données.


## Premières lignes de script 📜

Tu vas écrire tes premières lignes de code PHP dans un fichier dont l’extension sera obligatoirement .php. Les fichiers PHP commencent avec une balise <?php sur la 1ère ligne, pour définir que le fichier contient du code PHP. De plus, chaque ligne d’instructions au sein du fichier doit se terminer par un point virgule ;.

Crée un fichier `hello.php` qui contient les lignes suivantes :

```bash
<?php
echo 'Hello Wilders';
```

Il existe 2 manières d’exécuter du code PHP :

Dans un terminal, avec la Command Line Interface (CLI) de PHP et le nom du fichier à exécuter : php hello.php

Dans un navigateur web, en utilisant un serveur HTTP

Avec le CLI, seul le fichier demandé sera exécuté. Le résultat s'affiche directement dans le terminal.

Tu peux tester avec ce que tu viens de faire. Dans ton terminal, déplace-toi à l'emplacement du fichier hello.php si ce n’est pas déjà fait. Pour en être sûr, exécute ls dans ton terminal, tu devrais y voir le fichier désiré. Exécute ensuite php hello.php. Ton Hello wilder! devrait apparaître dans ton terminal.


### Executer du PHP avec un serveur

Pour ton développement au quotidien, tu as besoin d'un serveur HTTP le plus simple d'utilisation et de configuration. Et ça tombe bien, car PHP intègre en interne son propre serveur HTTP !

Attention, ce serveur interne à PHP n'est à utiliser que durant la phase de développement. En production, tu utiliseras un serveur plus robuste comme Apache ou Nginx.

Pour lancer le serveur interne de PHP, il suffit d'ouvrir un terminal, de se placer dans le dossier dans lequel tu veux exécuter ton code PHP et de taper la commande :
`php -S localhost:8000`

ensuite, tu n'auras plus qu'à ouvrir la page http://localhost:8000/hello.php dans ton navigateur pour afficher ton fichier PHP.

Par convention, le port 8000 est utilisé, mais tu pourrais lancer plusieurs serveurs PHP en même temps. Dans ce cas-là, tu devrais choisir des ports différents (8001, 8002...) si 8000 est déjà occupé.

Lors de tes prochains développements, les fichiers accessibles via un navigateur Web depuis internet vont se trouver dans un dossier que, par convention, l'on nomme public. On y trouve, entre autres, le point d'entrée de ton site. Le reste de ton code sera dans un dossier appelé, encore une fois par convention, src.

Pour éviter d'avoir à saisir http://localhost:8000/public/hello.php pour accéder à ton site, tu peux à la place saisir la commande:
`php -S localhost:8000 -t public/`

l'option -t (target) demande en paramètre le dossier dans lequel se situent les fichiers PHP que tu veux lancer via ton navigateur.

Ces scripts feront eux-mêmes appel aux fichiers PHP dans les autres dossiers comme src, mais toi, tu n'auras jamais à les appeler directement via ton navigateur.

Remarque : le serveur PHP n'est fonctionnel que le temps durant lequel il est lancé. Si tu le stoppes (avec ctrl+C, même sur Mac) ou si tu fermes le terminal à partir duquel il est lancé, le serveur s'arrêtera et tes pages PHP ne seront plus accessibles.


## 2. Les variables en PHP

Tous les langages informatiques utilisent des variables.
Cela permet d'enregistrer de manière temporaire (c'est-à-dire le temps de l'exécution du programme) des informations dans la mémoire de l'ordinateur.

Les noms des variables sont choisis par le développeur (en suivant certaines normes pouvant varier d'un langage à l'autre) qui peut y enregistrer des valeurs de différents types (nombres, texte, ...).
Ainsi stockées dans des variables, les données sont faciles à retrouver et à manipuler.
Il existe aussi des variables prédéfinies, accessibles dès le départ sans que l'on ait besoin de les créer.

Pour te donner un exemple parlant, les variables sont un peu comme des boîtes, dans lesquelles tu peux mettre différentes choses, et qui ont une étiquette dessus avec un nom, suffisamment parlant pour que tu saches ce que tu y as mis.

### Les règles associées au nom des variables


Une variable commence toujours par le caractère '$' (dollar).
Ne doit pas commencer par un chiffre.
Ne peut contenir que des chiffres, des lettres et le caractère '_' (souligné).

✅ Exemples de noms de variables valides :
```bash
$str
$my_value
$_old
$theBestValue
```
Attention, les noms des variables sont sensibles à la casse. `$Black` et `$black` sont deux variables différentes.

### Les bonnes pratiques :

Un nom de variable doit toujours t'aider à identifier ce qu'elle contient. Cela permet de simplifier et d'accélérer
la lecture et la compréhension du code. N'oublie jamais que le code que tu écris sera relu et réutilisé par d'autres
développeurs qui ne sont pas dans ta tête. Il faut toujours avoir à l'esprit la nécessité d'être clair, simple et concis.

Toujours en anglais. Cela permettra à ton code d'être international et plus facilement accessible aux développeurs
non francophones.

N'hésite pas à utiliser plusieurs mots dans le nom de ta variable, afin de mieux décrire son contenu.

Il est recommandé, en PHP, de nommer ses variables en camelCase. Ce n'est pas une obligation technique du langage mais une convention, une bonne pratique utilisée notamment dans la plupart des gros projets écrits en PHP.

L'écriture camelCase consiste à écrire en minuscule et si le nom contient plusieurs mots, chaque mot (sauf le premier) commence par une majuscule. Cela forme donc des 'bosses', d'où le nom de camelCase.

Remarque Il existe d'autres conventions de nommage que le camelCase. On notera par exemple l'UpperCamelCase ou encore le snake_case.


### Les types

Que met-on dans une variable ? Eh bien, des valeurs, des données, ce que l'on veut !
Le PHP est un langage dit à typage faible. Cela signifie que l'on ne va pas définir le type d'une variable de manière explicite,
mais que c'est le contenu de la variable qui va définir son type ainsi que son contexte.
Retiens seulement que PHP est assez souple sur les types de variables, ce qui n'est pas le cas d'autres langages comme le C ou le Java.

Il existe deux grandes familles de types de données :

scalaire

composé

Les variables scalaires sont des variables ne contenant qu'une seule valeur à la fois. Elles sont composées des types suivants :

`Entier` (nombre sans virgule) : c'est le type integer.

`Réel` (nombre à virgule. En php, le séparateur décimal est en fait un point) : c'est le type float.

`Booléen` (2 valeurs, vrai ou faux) : c'est le type boolean.

`Chaîne de caractères` (valeurs encadrées par des simples quotes ou des doubles quotes) : c'est le type `string`

Les variables composées sont des variables comportant plusieurs éléments.

`Tableaux` : c'est le type array

`Objets` : c'est le type object

Il existe également 2 types spéciaux :

Les ressources : variable spéciale faisant référence à une ressource externe (fichier, connexion à une base de données...). On ne va pas s'étendre sur le sujet pour le moment.

`NULL` : représente une variable qui n'a pas de valeur.

La gestion et le fonctionnement des tableaux et objets seront vus dans d'autres quêtes.

Lorsque l'on souhaite créer une variable, on parle de déclaration.
Lorsque l'on souhaite lui attribuer (ou modifier) une valeur, il faut utiliser l'opérateur d'affectation =. On parle donc d'affectation.
À la première déclaration de la variable, on parle d'initialisation et on affecte une valeur à cette variable.
Dans certains langages, il est possible de déclarer une variable sans l'initialiser tout de suite, mais en PHP l'initialisation et la déclaration se font en même temps.
Le nom de la variable est toujours écrit en premier, suivi de l'opérateur d'affectation, suivi de la valeur.
```bash
$i = 1; // on affecte la valeur 1 à la variable $i;

1 = $i; // renvoie une erreur car 1 n'est pas une variable, on ne peut donc pas lui affecter de valeur.
```

### Exemples de déclaration de variables :

Entiers : `$size = 200; $start = 0;`

Réels `$pi = 3.141592654; $half = 0.5;`

Booléens `$isSaved = true; $hasField = false;`

Chaînes `$firstName = "Indiana"; $lastName = 'Jones';`

Tu noteras qu'il est également possible d'affecter une même valeur à plusieurs variables d'un coup :
```bash
$a = $b = $c = 2; // les trois variables $a, $b et $c sont initialisées en même temps à 2
```

### Les bonnes pratiques :

Pour des raisons de lisibilité du code, dès l'instant que l'on va "typer" une variable en assignant une valeur, on fera
en sorte de toujours utiliser le même type pour cette variable.

### La portée (ou scope) des variables

La zone dans le code où est déclarée une variable est importante. Une variable peut ne pas être visible par l'ensemble
de ton code.

Dans la plupart des cas, quand tu déclares une variable, celle-ci est dans tout le script en- dessous de l'endroit où tu l'affectes. On parle de variable à portée globale.
```bash
<?php
echo﻿ $movie; // erreur car $movie n'existe pas;
$movie = 'Indiana Jones et le Royaume du crâne de cristal';
echo $movie ; // affiche bien le contenu de $movie car la variable a été définie au-dessus.
```
Si au contraire, tu déclares une variable à l'intérieur d'une fonction (tu verras en détail les fonctions dans une future quête), cette variable ne sera visible et donc accessible que dans ce bloc. On parle cette fois de variable à portée locale. De plus, les variables à portée globale ne sont pas non plus accessibles à l'intérieur de la fonction.
En d'autres termes : ce qui se passe dans une fonction, reste dans la fonction !




