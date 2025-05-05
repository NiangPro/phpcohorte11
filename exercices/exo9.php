<?php 

$n = 10;

$compteur = 0;
for ($i=1; $i <= $n ; $i++) { 
    if ($n % $i == 0) {
        $compteur++;
    }
}

if ($compteur == 2 || $n == 1){
    echo "$n est un nombre premier";
} else{
    echo "$n n'est pas un nombre premier car il a $compteur diviseurs";
}