<?php 

$nombre = 13;
$i = 1;
$compteur = 0;

while($i <= $nombre){
    if ($nombre % $i == 0) {
        $compteur++;
    }

    $i++;
}

if ($compteur == 2 || $nombre == 1) {
    echo "$nombre est un nombre premier";
}else{
    echo "$nombre n'est pas un nombre premier";
}