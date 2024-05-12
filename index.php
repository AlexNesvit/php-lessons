
<?php

// php -S localhost:8000  pour lance le serveur ou dans WAMP (MAMP) localhost, nom de projet
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
 
 echo $g['education'][1]. '<br>'; // affiche college in 2013

 $name = 'Alex';
 $surname = 'METLA';

 echo $name . ' ' . $surname. '<br>';

 // + - * / %

 echo 5 + 10;

 echo 1080 % 2; // les chiffres pairs

 $a = 100;
 $b = 15;

 echo '--Réponse:' . $a + $b. '<br>'; 

 // if

 $weather = 'beau'; // neige, pluie, beau, nuageux

 if( $weather == 'pluie' ){
    echo '--Il pluie, rester chez vous--'. '<br>';
 }

 if( $weather == 'niege' ){
    echo '--Il niege, rester chez vous--'. '<br>';
 }

 if( $weather == 'beau' ){
    echo '--Il fait beau, sortez vous--'. '<br>';
 }

 if( $weather =='nuageux'){
    echo '--Les nuageux--'. '<br>';
 }


// Carte d'accès au club (if)
 $age = 20;
 
 if( $age < 24 ){
    echo '--Vous êtes trop jeune pour entrer dans le club!--'. '<br>';
 }
 
 if( $age >= 24 ){
    echo '--Bienvenue dans le Club!--'. '<br>';
 }

 // <, >, <=, >=, ==, != 

 // if, else

 $name = 'Jonny';

 if( $name == 'Jonny' ){
    echo '--Bienvenue Jonny--'. '<br>';
 } else {
    echo '--Juste Jonny qui a accéss--'. '<br>';
 }
 
// Les operators logiques (or, and)

$name = 'Jonny';
$age = 20;

if( $age < 20 and $name != 'Jonny'){
   echo '--Juste Jonny qui a accéss--';
} else {
   echo '--Bienvenue Jonny--'. '<br>';
}

// L'operator "and" (example)

$rating = 33;
 
if ( $rating >= 25 and $rating <= 75){ //if rating=true and rating=true
   echo 'You good'. '<br>';
} else {
   echo 'You bad'. '<br>';
}

// Cicles for, while, foreach

for($i = 1; $i <= 10; $i++){
   echo $i;

   if( $i % 2 == 0 )
   {
      echo ' -paire number';
   }else {
      echo ' - no paire number';
   }

   echo '<br>';
}

// while

$test = 10;
while( $test <= 20)
{
   // code
   echo 'Test '.$test. '<br>';
   $test++;
}

$names = array(
   'Jonny',
   'Abraham',
   'Whisker',
   'Walker',
   'Alex'
);

foreach( $names as $value ){
   echo $value . '<br>';
};


// function 

function myfunction(){
   echo 'Hello word!' . '<br>';
};

myfunction();
myfunction();
myfunction();

// function "bigger number"  
function get_bigger($a, $b){

   if( $a > $b )
   {
      echo $a;
   } else {
      echo $b;
   }

echo '<br>';
}

get_bigger(10, 20);
get_bigger(20, 50);
get_bigger(5, -200);

// function return 

function funReturn($a, $b){

   if( $a > $b )
   {
      return $a;
   } else {
      return $b;
   }
}

$bigger = funReturn(10, 20);

echo $bigger. '<br>';

// abs, round, ceil, floor, rand, min, max

echo abs(-300). '<br>';;  // absolute number

echo round(50.50). '<br>'; // round number

echo rand(0, 100). '<br>'; // random number 0-100

echo min(3, 4, 6, 8, 78, 879). '<br>'; // minimum

echo max(3, 4, 6, 8, 78, 879). '<br>'; // maximum

echo 4 . '<br>';
echo "\n"; // razdelitel


$foo = 5;
$bar = 7;

echo $foo + $bar;
echo "\n";
echo $foo - $bar;
echo "\n";
echo $foo * $bar;
echo "\n";
echo $foo / $bar;
echo "\n";

$d = 'string';
echo $d;
echo "\n";
$f = "$d 888";
echo $f;

var_dump($f); // functia vivodit znachenie + kol-vo simvolov
echo "\n";
// phpinfo();
//exec ('start calc');  ???
echo "\n";
$a = true;
var_dump($a);
echo $a;
echo "\n";

$a = false;
var_dump($a);
echo $a;
echo "\n";

$a = 'choose your power';
var_dump($a);

$l = strlen($a);

echo $l;

$a = 5;
//gettype()  vivod tipe dannih
echo gettype($a);
echo "\n";

// function round - okruglenie do celogo chisla


