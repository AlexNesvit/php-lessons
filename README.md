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


## 4.1. Les tableaux et boucles en PHP

Un tableau (ou `array`) est une variable spéciale qui peut contenir plusieurs valeurs à la fois. Tu peux retrouver ce type de variable dans tous les langages de programmation.

Au fur et à mesure que tu avances dans la quête, n'hésite pas à tester le code qui t'est proposé, et à le manipuler, c'est le meilleur moyen d'apprendre.

### Définition des tableaux

Imagine, par exemple, que tu souhaites stocker la liste des armes d'Indy, ton code risque de ressembler à :
```bash
$weapon1 = 'whip';
$weapon2 = 'gun';
$weapon2 = 'saber';
```
Notre objectif est de tout stocker au sein d'une seule et même variable ; On peut alors déclarer :
`$weapons = ['whip', 'gun', 'saber'];`

Il est aussi possible de déclarer un tableau de la manière suivante :
`$weapons = array('whip', 'gun', 'saber');`
Cette méthode n'est cependant presque plus utilisée depuis PHP 5.4

Tu remarques ici que le nom de la variable est au pluriel et cela est volontaire, étant donné que cette dernière va contenir plusieurs valeurs.
On garde toujours une cohérence entre le nom de la variable et son contenu.

Chaque valeur du tableau est séparée par une virgule.

Attention, nous avons déclaré ici ce que l'on appelle un tableau à index numérique, nous verrons pourquoi juste après.
Attention également aux simples quotes, ces dernières sont présentes car les valeurs sont de type "string". Mais sache qu'un tableau peut contenir tout type d'élément, par exemple:
`$elements = [1, 'deux', true, [], 1.8];`

Ici, la variable `$elements` est un tableau qui contient, successivement, les éléments de type int, string, boolean, array (et oui un tableau peut contenir un autre tableau) et float.

### Le tableau indexé numériquement

Tu as vu comment stocker plusieurs informations au sein d'une seule et même variable, c'est génial, mais comment faire pour récupérer une valeur précise ?
Heureusement, les index sont là. Dans cette étape, tu vas voir les index numériques.
Lors de la déclaration d'un tableau, si tu ne précises pas les index, ces derniers seront par défaut numériques.
Un tableau indexé numériquement est tout simplement une liste d'éléments repérés chacun par un index numérique unique. Ainsi, le premier élément du tableau correspondra à l'index 0, le deuxième à l'index 1, le troisième à l'index 2, etc.
Tu noteras bien que la numérotation commence à 0 et non à 1 !
Accéder aux éléments d'un tableau

Pour accéder à un élément du tableau, il suffit d'y faire référence grâce à son index.
Reprenons notre exemple précédent, notre tableau d'armes :
`$weapons = ['whip', 'gun', 'saber'];`

Dans ce tableau, whip est situé à l'index 0 de notre tableau `$weapons`, gun à l'index 1, et saber à l'index 2.

Attention, pour rappel, le premier élément du tableau est référencé à l'index 0 !
Tu peux maintenant afficher les différentes valeurs du tableau de la manière suivante :
```bash
echo $weapons[0]; // affiche : whip
echo $weapons[1]; // affiche : gun
echo $weapons[2]; // affiche : saber
```

### Ajouter des éléments à un tableau

Bien entendu, un tableau peut avoir un nombre illimité de valeurs. Tu peux initialiser un tableau avec certaines valeurs, et en ajouter de nouvelles au fur et à mesure de l'exécution de ton script.

`var_dump()` permet d'afficher des informations détaillées sur une variable et est très utilisé pour déboguer.
Le tableau `$weapons` contient 3 éléments de type string avec, pour chaque string, une longueur respective de 4, 3 et 5 caractères.

La syntaxe [ ] après le nom d'une variable de type array permet d'indiquer que l'on ajoute une entrée au tableau. L'index utilisé pour le nouvel élément ajouté correspondra à l'index maximum courant +1.

### Le tableau associatif

Juste avant, tu as vu que chaque valeur de ton tableau pouvait être identifiée numériquement. Il s'agit du comportement par défaut lorsque tu déclares un tableau avec uniquement tes valeurs à l'intérieur.

Pour info, tu pourrais également déclarer ton tableau de valeurs ainsi :
```bash
$weapons[0] = 'whip';
$weapons[1] = 'gun';
$weapons[2] = 'saber';
```

La déclaration ci-dessus est identique à celle vue précédemment :
`$weapons = ['whip', 'gun', 'saber'];`

Lors de la déclaration d'un tableau associatif, on doit indiquer nous-mêmes les indices (= index) du tableau (c'est ce que l'on a fait au-dessus).

Dans la mesure où l'on est libre de les spécifier nous-mêmes, les indices peuvent être non seulement des entiers, mais également des chaînes de caractères. Dans ce cas, on parle de clé (ou key). Ce type de tableau est très pratique pour donner plus de sens aux valeurs contenues.
Par exemple, on pourrait modifier la déclaration précédente en utilisant des clés plus explicites :
```bash
$weapons['weapon_one'] = 'whip';
$weapons['weapon_two'] = 'gun';
$weapons['weapon_three'] = 'saber';
```
Ou encore :
```bash
$weapons = [
  'weapon_one' => 'whip',
  'weapon_two'=>'gun',
  'weapon_three'=>'saber'
];
```

Notre variable `$weapons` est toujours de type `array`. Elle contient toujours plusieurs valeurs, mais ces dernières sont identifiées respectivement par les clés weapon_one, weapon_two, weapon_three.

Pour les afficher, on fera donc:
```bash
echo $weapons['weapon_one']; // affiche : whip
echo $weapons['weapon_two']; // affiche : gun
echo $weapons['weapon_three']; // affiche : saber
```

Les tableaux associatifs te seront très utiles lors de l'utilisation de tableaux multidimensionnels. Tu verras ça dans la quête suivante.

Petite spécificité, si dans la suite de mon script j'exécute ceci :
`$weapons['weapon_one'] = 'dagger';`

Je modifie la valeur située à la clé weapon_one, et l'exécution echo `$weapons['weapon_one'];` affichera maintenant la chaîne de caractères 'dagger'. C'est le même comportement que pour une variable.
Si tu rappelles le même élément en lui assignant une nouvelle valeur, la valeur précédente va être remplacée par la nouvelle. Il en est de même pour les tableaux indexés numériquement.

### Les fonctions utiles pour les tableaux

De nombreuses fonctions en PHP nous permettent de travailler sur les tableaux, des fonctions de mesure, de navigation, d'itération, de tri, et bien plus encore.
Ce sont des fonctions PHP dites natives car elles font partie du langage PHP.

En voici quelques exemples:
`count()`
Permet de compter le nombre d'éléments d'un tableau.
```bash
$weapons = ['whip', 'gun', 'saber'];
echo count($weapons); // affiche 3
```
`sort()`
Permet de trier un tableau par ordre croissant de valeur.

La fonction sort() ne sert qu'à trier des tableaux numériques. Si tu l'utilises sur un tableau associatif tu perds l'association clé => valeur.
Note: Cette fonction assigne de nouvelles clés pour les éléments du paramètre array. Elle
effacera toutes les clés existantes que vous aviez pu assigner, plutôt que de les trier.

Il existe d'autres fonctions pour un tableau associatif :

`rsort()`
Permet d'effectuer un tri en ordre décroissant
`asort()`
Permet d'effectuer un tri sur les valeurs en gardant les clés intactes
`arsort()` Permet d'effectuer un tri sur les valeurs en gardant les clés intactes, mais dans un ordre décroissant
`ksort()`
Permet d'effectuer un tri sur les clés en gardant les valeurs intactes
`krsort()`
Permet d'effectuer un tri sur les clés en gardant les valeurs intactes mais dans un ordre décroissant

Dans chacune de ces fonctions, tu vas pouvoir définir si tu souhaites un tri ascendant ou descendant. N'hésite pas à consulter la documentation pour savoir comment procéder....

Contrairement à la plupart des fonctions php, tu ne peux pas faire :
`$sortedWeapons = sort($weapons);`
En effet, l'utilisation de sort() (comme toute autre fonction de tri) modifie directement le tableau passé en paramètre et retourne TRUE ou FALSE selon si le tri a fonctionné ou non.

Toutes ces fonctions de tri travaillent sur le tableau lui-même, contrairement à la pratique normale qui serait de retourner le tableau trié.

`in_array()`
Permet de vérifier la présence d'une valeur dans un tableau.
```bash
$weapons = ['whip', 'gun', 'saber'];
var_dump(in_array('whip', $weapons)); // affiche true
var_dump(in_array('shield', $weapons)); // affiche false
```
`array_sum()`
Permet de calculer la somme des valeurs d'un tableau.
```bash
$values = [1, 2, 3, 4, 5];
echo array_sum($values); // affiche 15
```

## Les boucles

### La boucle for

La boucle for est la plus simple à mettre en place. Tu vas indiquer à PHP de boucler un certain nombre de fois. C'est toi qui définis ce nombre. La boucle for intègre un compteur.

Sa notation est la suivante :
```bash
for (debut; fin; pas) {
    // Do something
}
```

### La boucle while

```bash
// Exemple de boucle while
$i = 0;
while ($i < 10) {
    // Do something
    $i++;
}

// Exemple de boucle infinie (À NE PAS FAIRE !!!)
$firstname = 'Henry';
while ($firstname != 'Indy') {
    $firstname = 'Indiana';
    // Do something...
}
```
Le premier exemple est simple, on boucle tant que `$i` est strictement inférieur à 10.
Le second est une boucle infinie. Étant donné que le `while` boucle tant que la condition est `true`, il faut bien veiller à ce que l'expression du while devienne `false`.

### La boucle foreach

Le `foreach` permet de boucler sur les tableaux.

Il existe 2 façons de mettre en place un `foreach` :
```bash
$movies = [
  "Les Aventuriers de l'arche perdue",
  "Indiana Jones et le Temple maudit",
  "Indiana Jones et la Dernière Croisade",
  "Indiana Jones et le Royaume du crâne de cristal",
  "Indiana Jones 5"
];

// Si tu n'as pas besoin des clés du tableau
foreach ($movies as $movie){
    // Do something...
    echo $movie;
    // Affiche "Les Aventuriers de l'arche perdue"
    // (au 1er tour, puis les autres valeurs aux tours suivants)
}

// Si tu as besoin des clés du tableau
foreach ($movies as $key => $movie){
    // Do something...
    echo $key;      // Affiche 0 (au 1er tour)
    echo $movie;    // Affiche "Les Aventuriers de l'arche perdue" (au 1er tour)
}
```

C'est à toi de choisir le nom des variables dans ton foreach (ici `$key` et `$movie`).

Comme pour tout nommage de variable, essaie d'avoir des noms ayant un sens. Par exemple ici, le tableau contenant des films s'appelle `$movies`. Quand tu boucles avec foreach, tu vas alors récupérer un film à chaque fois, d'où la variable s'appelant `$movie` (cette fois au singulier).

Cette approche pluriel/singulier est souvent utilisée car elle permet de facilement comprendre ce que contient la variable (le tableau dans son ensemble, ou un élément du tableau).

On dit que le foreach va itérer sur chaque élément du tableau (ou de la collection).
Cela signifie que chaque élément va être lu séquentiellement à chaque tour de boucle.

L'élément en cours de lecture, ainsi que sa clé selon la notation du foreach (avec ou sans le =>), vont être affectés à des variables temporaires (`$key`, `$movie`). Récupérer la clé est surtout utile en présence d'un tableau associatif.
Boucles infinies

Attention: Si la condition d'arrêt d'une boucle est mal définie, cela peut être critique. En effet, la boucle sera infinie et plantera ton programme.
En PHP, si tu n'as pas modifié la configuration de base, les scripts ont une durée de vie de 30 secondes, donc ton navigateur (voire tout ton poste) peut ne pas répondre pendant maximum 30 secondes (il s'agit du paramètre max_execution_time dans ton fichier php.ini). Mais sur des langages de plus bas niveau, cela peut avoir des conséquences plus graves.

## 4.2. Les tableaux multidimensionnels en PHP

Dans la quête précédente, tu as découvert les tableaux à index numérique et les tableaux associatifs.

En PHP - et dans beaucoup d'autres langages de programmation - il est possible d'imbriquer des tableaux. Autrement dit, de créer un tableau avec plusieurs dimensions (des tableaux dans des tableaux).

C'est ce que nous allons voir ici.

Dans la quête précédente, tu as eu à gérer un tableau avec une seule personne, ton ami Indiana. Mais comment faire si tu souhaites avoir au sein d'une même variable, les armes d'Indiana et de ses ennemis ?

Pour cela, il faut faire ce que l’on appelle un tableau multidimensionnel. Il s'agit d'un tableau qui va contenir en valeur d'autres tableaux (qui eux-mêmes peuvent contenir d'autres tableaux et ainsi de suite...).

```bash
$weaponsIndiana = ['whip', 'gun', 'saber'];
$weaponsHelen = ['knife', 'shield'];
$weaponsRavenwood = ['belt', 'dagger', 'gun', 'shield'];
```
On peut mieux faire, tu ne crois pas ?

Grâce aux tableaux multidimensionnels, tu vas pouvoir tout regrouper au sein d'une seule et même variable, afin d'avoir tous les éléments disponibles simplement et rapidement.

Commence par déclarer ton tableau :
`$weapons = [];`

$weapons est une variable de type tableau, qui, pour le moment, est vide.

Tu vas maintenant regrouper les armes de nos amis dans un seul et même tableau :
```bash
$weapons = [
  ['whip', 'gun', 'saber'],
  ['knife', 'shield'],
  ['belt', 'dagger', 'gun', 'shield'],
];
```

`$weapons` est maintenant un tableau multidimensionnel, un tableau qui contient d'autres tableaux en valeur.
Grâce à lui, tu vas pouvoir manipuler une seule variable au lieu de 3.

```bash
var_dump($weapons[0]); // affiche : ['whip', 'gun', 'saber']
var_dump($weapons[1]); // affiche : ['knife', 'shield']
var_dump($weapons[2]); // affiche : ['belt', 'dagger', 'gun', 'shield']
```

Bien que tu aies accès à toutes les armes depuis une seule et même variable, il te faut quand même identifier quelles armes appartiennent à quel personnage.

Pour ce faire, tu vas utiliser le nom de chaque personnage en tant que clé. Tu auras donc un tableau associatif, et pour chaque clé, tu vas y associer le tableau contenant les arme
```bash
$weapons = [
    'Indiana Jones' => ['whip', 'gun', 'saber'],
    'Marion Ravenwood' => ['knife', 'shield'],
    'Helen Seymour' => ['belt', 'dagger', 'gun', 'shield']
];
```

### Accéder à un élément du tableau

Tu peux afficher les différentes armes en passant par les index/clés des élements du tableau 

### Parcourir un tableau multidimensionnel

Lors de la quête précédente tu as vu comment parcourir un tableau simple à l'aide des boucles.
Comme tu peux t'en douter, qui dit tableaux imbriqués, dit ... boucles imbriquées !

L'idée est la suivante : on parcourt le premier niveau du tableau, puis, pour chaque niveau on parcourt les sous-niveaux, ...etc.

Tu auras donc une boucle dans une boucle dans une boucle ... (autant de fois que de dimensions dans ton tableau).

Si tu as un doute sur l'utilisation des boucles, je t'invite à revoir la quête précédente (voir Prérequis en haut de page).


