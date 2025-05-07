<?php 

$n = 16; 

$somme = 0;

for ($i=1; $i < $n; $i++) { 
    if ($n %$i == 0) {
        $somme = $somme + $i;
    }
}

if ($somme == $n) {
    echo "$n est un nombre parfait";
}else{
    echo "$n n'est pas parfait";
}

