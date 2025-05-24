<?php 

include_once("../fonctions.php");
// require_once("../fonctions.php");

$utilisateurs = [
    ["nom" => "Amina",  "age" => 23],
    ["nom" => "Bassirou", "age" => 13],
    ["nom" => "Bineta", "age" => 7],
    ["nom" => "Diarra", "age" => 23],
    ["nom" => "Modou", "age" => 76],
];

$nbreMajeur = 0;
$nbreMineur = 0;

foreach($utilisateurs as $utilisateur){

    if ($utilisateur["age"] >= 18) {
        $nbreMajeur++;
        echo "Nom:".strtoupper($utilisateur["nom"]);
        echo "  Age:".$utilisateur["age"]." ans";
        echo " MAJEUR<br><br>";
    }else{
        $nbreMineur++;
        echo "Nom:".$utilisateur["nom"];
        echo " Age:".$utilisateur["age"]." ans<br><br>";
    }
}

echo "Nombre de majeur: $nbreMajeur <br>";
echo "Nombre de mineur: $nbreMineur <br>";

direBonjour();