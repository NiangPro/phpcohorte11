<?php 

echo " ********* MENU ********** <br>";
echo "1- THiebou djeun <br>";
echo "2- Caldou <br>";
echo "3- Maffe <br>";
echo "4- Mborokhee <br>";
echo "Faites votre choix <br>";

$choix = 2;

switch($choix){
    case 1: 
        echo "Vous avez choisi Thiebou djeun";
        break;
    case 2:
        echo "VOus avez choisi Caldou";
        break;
    default: 
        echo "Choix indisponible";
        break;
}