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



## Les chaînes de caractères en PHP

### Introduction

Une chaîne de caractères (ou string en anglais) est, comme son nom l'indique, une suite de caractères (lettres, chiffres, ponctuation...), placés dans un ordre défini.
Pour faire plus simple, un mot ou une phrase sont des chaînes de caractères. Au même titre que les integer ou les array, les string sont un type de données en PHP (mais également dans la plupart des langages informatiques).

### Définir une chaîne de caractères

En PHP, c'est simple, une chaîne de caractères se définit en l'encadrant par des guillemets simples ou doubles (il y a une petite différence entre les deux, que tu verras juste après).
On parle plus généralement de simple quote ' ou double quote ".

Il y a plusieurs moyens d'afficher une chaîne de caractères en PHP, mais dans l'immense majorité des cas, tu feras appel à `echo`
`echo 'Je suis professeur'; // affiche : Je suis professeur`

Si la chaîne comporte elle-même le caractère `'` (apostrophe par exemple), il est possible de forcer son affichage en mettant un antislash devant. C'est ce qu'on appelle échapper un caractère.
Il ne sera alors pas interprété comme une fin de chaîne.
```bash
echo 'J\'aime porter un chapeau'; // affiche : J'aime porter un chapeau
echo "J'aime porter un chapeau"; // affiche la même chose, pas besoin d'échapper une simple quote dans des doubles quotes et vice versa
```
Une chaîne est une donnée, elle peut donc être enregistrée dans une variable. Pour afficher une simple variable, il ne faut pas mettre de quote.
```bash
$firstname = 'Indiana';
$presentation = 'Indiana Jones est un célèbre archéologue';

echo $firstname; // affiche : Indiana
```

Si tu mets une simple quote autour d'une variable, celle-ci ne sera pas interprétée comme telle.
`echo '$firstname'; // affiche : $firstname`

Par contre (et c'est là la grosse différence), si tu utilises des doubles quotes autour d'une variable, celle-ci est bien interprétée.
`echo "$firstname"; // affiche : Indiana`

Du coup, tu peux te demander quand utiliser les simples ou les doubles quotes. Il n'y a pas de règle absolue.
Généralement, pour de simples chaînes, les simples quotes sont utilisées. Tu les utiliseras donc la plupart du temps.
Par contre, dans certains cas, tu seras amené à manipuler des chaînes complexes, c'est-à-dire dans lesquelles tu souhaites afficher le contenu de plusieurs variables. Dans ce cas, les doubles quotes peuvent s'avérer plus adaptées.

Tu viens de voir comment créer et afficher une chaîne, mais il est également possible de fusionner deux chaînes. C'est ce qui s'appelle, la concaténation.

Pour cela, rien de plus simple, il suffit d'utiliser l'opérateur de concaténation. En PHP, c'est le point `.` qui sert à cela.
```bash
$firstname = 'Indiana';
$lastname = 'Jones';
echo $firstname . $lastname;  // affiche : IndianaJones
```

Comme tu peux le voir, le `.` a permis de coller les deux chaînes, de les concaténer.
S'il est d'usage de mettre un espace de part et d'autre du point pour faciliter la lisibilité, ceux-ci ne sont pas considérés comme faisant partie de la chaîne.
De ce fait, il n'y a pas d'espace entre "Indiana" et "Jones" dans l'exemple. Embêtant, non ?

Tu vas donc ajouter la chaîne de caractères ' ' entre les deux autres chaînes.
```bash
$fullname = $firstname . ' ' . $lastname; // le résultat d'une concaténation peut aussi être enregistré dans une variable.  
echo $fullname; // affiche : Indiana Jones
```
Cette fois, `$fullname` contient bien `$firstname`, suivi d'un espace, suivi de `$lastname`, super !

Tu peux aussi dans ce cas utiliser la syntaxe des doubles quotes, ce qui donnera :
```bash
$presentation = "$firstname $lastname est un célèbre archéologue"; // les variables sont interprétées 
echo $presentation; // affiche : Indiana Jones est un célèbre archéologue
```

Tu pourrais être tenté d'utiliser les doubles quotes partout. Ce n'est pas forcément une bonne idée , car une variable perdue dans une longue chaîne peut parfois être difficilement lisible.
De plus, même si dans la grande majorité des cas tu ne verras aucune différence, note que l'interprétation des variables entre doubles quotes est moins performante qu'utiliser la concaténation.

L'opérateur de concaténation peut être utilisé pour ajouter du texte, avant ou après une chaîne.
```bash
$film = $fullname . ' et le temple maudit';
echo $film; // affiche : Indiana Jones et le temple maudit;

$avis = 'J\'aime bien regarder ' . $film;
echo $avis;  // affiche : J'aime bien regarder Indiana Jones et le temple maudit;
```

Si tu souhaites ajouter un texte en fin d'une chaîne, et affecter cette nouvelle chaîne à la même variable (donc écraser la valeur en cours), tu peux utiliser la syntaxe simplifiée `.=` (qui mixe l'opérateur de concaténation `.` et l'opérateur d'affectation `=`).
```bash
$name = 'Indiana';
$name .= ' Jones'; // équivalent à $name = $name . ' Jones';
echo $name; // affiche : Indiana Jones
```
Tout ça est bien pratique, mais un peu limité tout de même pour des manipulations plus complexes.
Heureusement, PHP possède un très grand nombre de fonctions natives qui vont te permettre de gagner beaucoup de temps.
Il en existe vraiment beaucoup, mais certaines sont plus utilisées que d'autres... Tu vas vite connaître par coeur certaines des plus communes.
Pour les autres, pas de panique, tu n'es pas obligé de tout connaître, il faut juste que tu puisses facilement les retrouver dans la documentation.

Voici donc une liste non exhaustive de quelques fonctions parmi les plus couramment utilisées.

`strlen` : permet de connaître la taille d'une chaîne, c'est-à-dire le nombre de caractères qui la composent.
```bash
$weapon = 'fouet';
$length = strlen($weapon); // vaut 5, car fouet contient 5 caractères;
```

`trim` : permet de tronquer les caractères blancs (espaces, tabulation...) en début et fin d'une chaîne. Il existe les variantes ltrim (left) et rtrim (right) qui font la même chose, mais seulement à gauche et à droite de la chaîne.
Note également qu'il est possible (optionnellement) d'indiquer à trim un autre type de caractère à tronquer à la place des blancs.
```bash
$temple = ' maudit  ';
echo $temple; // affiche " maudit  "
echo trim($temple); //  affiche "maudit"
echo ltrim($temple); // affiche "maudit  ";
echo rtrim($temple); // affiche " maudit";
```


 Manipulation de la casse : PHP est sensible à la casse. C'est-à-dire qu'un caractère minuscule est différent du même caractère en majuscule.
 Autrement dit, 'a' != 'A'. Il existe cependant plusieurs fonctions pour modifier la casse.
 Ainsi, strtoupper, renvoie une chaîne en majuscule, tandis que strtolower renvoie une chaîne en minuscule.
Des variantes existent, comme ucfirst qui convertit le premier caractère d'une chaîne en majuscule, ou encore ucwords qui convertit chaque première lettre des mots d'une phrase en majuscule.

`str_replace` : cette fonction permet de remplacer tout ou partie d'une chaîne par une autre chaîne.

Bien entendu, cela fonctionne uniquement si le motif recherché est trouvé dans la chaîne, sinon la chaîne d'origine non modifiée est renvoyée. Par défaut, str_replace est sensible à la casse, mais il existe str_ireplace qui lui, y est insensible.

Conversion : il existe également des fonctions qui vont aider à échapper certains caractères automatiquement. Par exemple, htmlentities convertit automatiquement les balises HTML contenues dans la chaîne, pour qu'elles ne soient pas interprétées à l'affichage.
Cela évite des problèmes d'affichage ou d'injection de code malveillant dans une page. Il existe d'autres fonctions utiles comme addslashes, url_encode, nl2br...

explode et implode : Ces deux fonctions, souvent indissociables l'une de l'autre, sont très utilisées.
Elles permettent pour explode de convertir une chaîne de caractères en un tableau (en fonction d'un délimiteur) et pour implode, de faire l'opération inverse.
```bash
$team = 'Harrison Steven George';
$persons = explode(' ', $team); 
// la chaîne $team a été explosée en fonction du délimiteur 'espace', en un tableau contenant ['Harrison', 'Steven', 'George']. 
// le caractère délimiteur 'espace' n'est plus présent dans le tableau obtenu.
// Pour utiliser explode(), le délimiteur est un paramètre obligatoire.

echo implode (',', $persons); 
// implode prend en paramètres un délimiteur et un tableau. 
// affiche "Harrison,Steven,George". Une chaîne est créée à partir des chaînes contenues dans le tableau, et le délimiteur (ici la virgule) est placé entre chaque élément du tableau.
// pour utiliser implode(), le délimiteur est un paramètre optionnel
echo implode($persons); // affiche "HarrisonStevenGeorge".
```
Certains caractères, notamment les caractères accentués ou de langues étrangères, sont codés sur plusieurs octets (car un seul ne suffisait pas).
Dans ce cas, l'utilisation des fonctions de manipulation de chaînes classiques peut poser des problèmes (obtentions de résultats tronqués, erronés, de chaînes corrompues...).
Par exemple, `strlen('é')` donne 2 et non 1, car le caractère 'é' est codé sur 2 octets !
Pour résoudre cette problématique, il a été ajouté à PHP un module appelé mbstring, qui fournit des équivalences multi-octets aux fonctions de chaînes de caractères classiques.
Elles sont alors préfixées par mb_, par exemple mb_strlen, mb_strtoupper... Si ce module n'est pas installé, tu peux le faire dans ton terminal via la commande
`sudo apt install php-mbstring`. Tu devras ensuite relancer ton serveur HTTP.






