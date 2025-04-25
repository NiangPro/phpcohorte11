<?php 

$age = 7;

//

if($age >= 18){
    echo "majeur";
}else if($age < 18){
    echo "mineur";
}


//si la personne est majeure et elle a une bonne note: partant sinon on met restant
$note = 16;

if ($age >= 18 && $note >= 10) {
    echo "<br>partant";
}else{
    echo "<br>restant";
}