<?php 


function direBonjour(){
    echo "Bonjour tout le monde<br>";
}

function direBonjourA($prenom, $sexe){
    // $s = strtolower($sexe) == "m" ? "Mr" : "Mme";

    $trouve = true;
    if (strtolower($sexe) == "m") {
        $s = "Mr";
    }elseif(strtolower($sexe) == 'f' ){
        $s = "Mme";
    }else{
        echo "Veuillez mettre F ou M pour le sexe<br>";
        $trouve = false;
    }
    if($trouve == true){

        echo "Bonjour $s $prenom <br>";

        // var_dump($prenom);
    }
}

function somme($a, $b){
    echo "<br>$a + $b =".($a+$b);
}

function sommeB($a , $b){
    
    echo "<br>$a + $b =".($a+$b);
    return $a+$b;
}

function incrementation(&$n){
    $n= $n +1;
}

function sommes(...$args){
    $som = 0;
    foreach ($args as $value) {
        $som = $som + $value;
    }
    echo "La somme est : ".$som." <br>";
}



direBonjour();
direBonjourA("Aminata", "F");
// die("Fin de l'execution");
direBonjourA("Alioune", "m");
direBonjourA("Diao", "M");
direBonjourA("FATOU", "a");
$d = 56;
somme($d, 9);
$som = sommeB(5, 9);

echo "La somme est $som <br>";

$nombre = 10;

incrementation($nombre);

echo "La valeur de nombre est : $nombre";

$tab = [
    ["nom" => "Bassirou"],
    ["nom" => "Bassirou"],
    ["nom" => "Bassirou"]
];

foreach ($tab as &$personne) {
    $personne["nom"] = "Fatou";
}

print_r($tab);

sommes(4, 6, 5);
sommes(4, 9);
sommes();