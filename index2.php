<?php
//1/1
$firstname = "Marcela";
$lastname = "Vareckova";
$age = 26;
$height = 1.68;
echo $firstname . ", " . $lastname . ", " . $age . ", " . $height;
//1/2
$fullname = $firstname . " " . $lastname;
echo $fullname ;

//1/3
$x = 3.14;
gettype($x);
echo $x;
//1/4
$number = "42";
$number = (int)$number;
$result = $number + 8;
echo $result; 
//1/5
$colors = array("red", "green", "blue");
echo $colors[1];

//2/6
$score = 80;
if ($score > 90) {
    echo "Výborně";
} elseif ($score >= 60 && $score <= 89) {
    echo "Dobře";
} else {
    echo "Zkus to znovu";
}
//2/7
$x = 7;
if ($x % 2 == 0) {
    echo "Sudé číslo";
} else {
    echo "Liché číslo";
}
//2/8
$name = "Anna";
if ($name[0] == 'A') {
    echo "Začíná";
} else {
    echo "Nezačíná";    
}
//2/9
$loggedIn = false;
if ($loggedIn) {
    echo "Přihlášen";
} else {
    echo "Odhlášen";
}
//2/10
$items = array("jablko", "banán", "třešeň");
if (empty($items)) {
    echo "Prázdné";
} else {
    echo "Neprázdné";
}

//3/11
function greet($name) {
    return "Ahoj, " . $name . "!";
}
echo greet("Marcelo");
//3/12
function add($a, $b) {
    return $a + $b;
}
echo add(2, 10);
//3/13
function isEven($num) {
    return $num % 2 == 0;
}
echo isEven(4) ? "Sudé" : "Liché";
//3/14


//3/15
function countVowels($string) {
return substr_count (strtolower($string), 'a') +
       substr_count (strtolower($string), 'e') +
       substr_count (strtolower($string), 'i') +
       substr_count (strtolower($string), 'o') +
       substr_count (strtolower($string), 'u');
}
echo countVowels ("WebDevelopment");
//4/16
$text = "Ahoj";
$reversedText = strrev($text);
echo $reversedText;
//4/17
$php = "php";
echo strtoupper($php);
//4/18
$sentence = "Věta";
$count = substr_count($sentence, 'a');
echo $count;
//4/19
$sentence = "Věta obsahuje Laravel";
$count = str_contains($sentence, 'Laravel');
if ($count) {
    echo "Obsahuje";
} else {
    echo "Neobsahuje";
}
//4/20
$sentence = "Ahoj světe";
$sentence2 = str_replace("e", "3", $sentence);
echo $sentence2;
//5/21
//5/22
$names = ["Eva", "Jan", "Eva", "Petr"];
$unique = array_unique ($names);
print_r ($unique);
//5/23
$a = [1, 2];
$b = [3, 4];
$merged = array_merge($a, $b);
print_r($merged);
//5/24
$names = ["Anna", "Boris", "Cyril"];
if (in_array("Jan", $names)) {
    echo "Nalezeno";
} else {
    echo "Nenalezeno";
}
//5/25
$numbers = [9, 2, 5, 1];
sort($numbers);
print_r($numbers);

//6/26
function findLongestWord($words)
?>