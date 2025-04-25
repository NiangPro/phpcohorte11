<?php 

$note = 19;

if ($note >=0 && $note <10) {
    echo "echec";
}elseif($note >= 10 && $note <= 12){
    echo "Passable";
}elseif($note >= 13 && $note <= 15){
    echo "Assez bien";
}elseif($note >= 16 && $note <= 18){
    echo "Bien";
}elseif($note >= 19 && $note <= 20){
    echo "Tres bien";
}else{
    echo "La note doit etre comprise entre 0 et 20";
}