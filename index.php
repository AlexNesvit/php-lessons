<?php

// php -S localhost:8000  pour lance le serveur
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
var_dump($e); // affiche Alex comme console par example 

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

 echo 1080 % 2; // chetnoe, esli 0 (delenie po modulu)

 $a = 100;
 $b = 15;

 echo '--Réponse:' . $a + $b; 

 // 

 $weather = 'bon'; // niege, pluie, bon, nuageus

 if( $weather == 'pluie' ){
    echo '--Il pluie, rester chez vous--';
 }

 if( $weather == 'niege' ){
    echo '--Il niege, rester chez vous--';
 }

 if( $weather == 'bon' ){
    echo '--Il fait bon, sortez vous--';
 }

 if( $weather =='nuages'){
    echo '--Les nuages--';
 }

 // Carte de passage pour le club
 
 
 
