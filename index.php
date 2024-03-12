
<?php

// php -S localhost:8000  pour lance le serveur ou dans WAMP, MAMP localhost, nom de projet
// ctr+c  pour arreter le serveur

$a = 100; // number- integer, int
$b = 14.12; // float
$c = 'Alex'; // string-str
$d = "Alex"; // string-str
$f = false; // boolean
$e = array(    // massiv-array
    "John",   // index-0
    "Flame",  // index-1
    "Alex");  // index-2

// echo $a; //echo $b; //echo $c; //echo $d; // pour afficher
echo $e[2]; //affiche Alex, 3 element
var_dump($e); // affiche Alex comme dans console par example 

 $g = array(
    'name' => 'Antonio',
    'surname' => 'BAND',
    'age' => 20,
    'education' => array('school in 2003', 'college in 2013')
 );

 $j = true; // boolean-bool
 
 echo $g['education'][1]; // affiche college in 2013

 $name = 'Alex';
 $surname = 'METLA';

 echo $name . ' ' . $surname;

 // + - * / %

 echo 5 + 10;

 echo 1080 % 2; // les chiffres pairs

 $a = 100;
 $b = 15;

 echo '--Réponse:' . $a + $b; 

 // if

 $weather = 'beau'; // neige, pluie, beau, nuageux

 if( $weather == 'pluie' ){
    echo '--Il pluie, rester chez vous--';
 }

 if( $weather == 'niege' ){
    echo '--Il niege, rester chez vous--';
 }

 if( $weather == 'beau' ){
    echo '--Il fait beau, sortez vous--';
 }

 if( $weather =='nuageux'){
    echo '--Les nuageux--';
 }


// Carte d'accès au club (if)
 $age = 20;
 
 if( $age < 24 ){
    echo '--Vous êtes trop jeune pour entrer dans le club!--';
 }
 
 if( $age >= 24 ){
    echo '--Bienvenue dans le Club!--';
 }

 // <, >, <=, >=, ==, != 

 // if, else

 $name = 'Jonny';

 if( $name == 'Jonny' ){
    echo '--Bienvenue Jonny--';
 } else {
    echo '--Juste Jonny qui a accéss--';
 }
 
// Les operators logiques (or, and)

$name = 'Jonny';
$age = 20;

if( $age < 20 and $name != 'Jonny'){
   echo '--Juste Jonny qui a accéss--';
} else {
   echo '--Bienvenue Jonny--';
}

// L'operator "and" (example)

$rating = 33;
 
if ( $rating >= 25 and $rating <= 75){ //if rating=true and rating=true
   echo 'You good';
} else {
   echo 'You bad';
}

// Cicles for, while, foreach

for($i = 0; $i <= 10; $i++){
   echo 'Hello word!<br>';
}

