<?php

echo "<img src=\"walter.jpg\" title='walter pes' alt='walter'/>"; //Escape sekvence pro img tag
echo "<br>\<br>";

$a = 4;
$b = 5;

print "První číslo = <b>$a</b> <br>";
print "Druhé číslo = <b>$b</b> <br>";

//Aritmetické operátory

print "<br>Sčítání = ";
echo $a+$b;
var_dump($a+$b);

print "<br>Odčítání = ";
echo $a-$b;
var_dump($a-$b);

print "<br>Násobení = ";
echo $a*$b;
var_dump($a*$b);

print "<br>Dělení = ";
echo $a/$b;
var_dump($a/$b);

//Přirovnávací operátory

print "<br> ";
echo $a++;
var_dump($a++);

print "<br> ";
echo $a--;
var_dump($a--);

print "<br> ";
echo $a += $b;
var_dump($a+=$b);

print "<br>";
echo $a -= $b;
var_dump($a-=$b);

print "<br>";
echo $a *= $b;
var_dump($a*=$b);

print "<br>";
echo $a /= $b;
var_dump($a/=$b);

print "<br> Rovnají se čísla?";
echo $a==$b;
var_dump($a==$b);

print "<br>Má $a jinou hodnotu než $b?<br>";
var_dump($a!=$b);

print "<br>Je $a větší než $b?<br>";
var_dump($a>$b);

print "<br>Je $b větší než $a?<br>";
var_dump($a<$b);

//Spojování řetězců

echo "blb"."ost";          //vypíše "blbost"
echo "hov" . "adina";      //vypíše slovo "hovadina"
echo 1 . 2;                //vypíše číslo "12"
echo 1.2;                  //vypíše číslo s decimální čárkou 1.2

?>