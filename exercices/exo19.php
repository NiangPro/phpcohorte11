<?php 

$tab = [-5, 7, 5, 23, 4, 10, 9];

for ($i=0; $i < count($tab) ; $i++) { 
    $cpt = 0;
    for ($j=1; $j <= $tab[$i] ; $j++) { 
        if ($tab[$i] % $j == 0) {
            $cpt++;
        }
    }

    if ($cpt == 2 || $tab[$i] == 1) {
        echo $tab[$i]." - ";
    }
}