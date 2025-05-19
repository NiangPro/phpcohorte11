<?php 


// for(initialisation; condition; incrementation ou decrementation){

// }

// factoriel ou pas 
// exple: 5 
// 5 x 4 x 3 x 2 x1

// 5*4 = 20* 3=60*2= 120 * 1

$n = 6;
$resultat = 1;
for ($i=1; $i <= $n ; $i++) { 
    $resultat = $resultat * $i;
}

echo "Factoriel de $n est de $resultat <br>";

$cpt = 0;
for ($i=1; $i <= $n ; $i++) { 
    if ($n % $i == 0) {
        $cpt++;
    }
}

if ($cpt == 2 || $n == 1) {
    echo "$n est un nombre premier";
}else{
    echo "$n n'est pas un nombre premier car le nombre de diviseurs est egal a $cpt";
}