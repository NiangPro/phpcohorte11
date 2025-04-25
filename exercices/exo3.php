<?php 

$a = "Cafe";
$b = "Lait";


echo "Affichage avant echange<br>";

echo "a=$a et b=$b <br>";

$c = $a;
$a = $b;
$b = $c;

echo "Affichage apres echange<br>";

echo "a=$a et b=$b <br>";