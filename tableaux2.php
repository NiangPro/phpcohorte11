<?php 

$tableau = ["moussa", "diop", 25];

for ($i=0; $i < count($tableau); $i++) { 
    echo "$i => $tableau[$i]  ";
}
 echo "<br>";
foreach($tableau as $cle => $val){
    echo " $cle => $val";
}

$tabassoc = ["prenom" =>"moussa", "nom" => "diop", "age" => 25];

echo "<br>".$tabassoc['prenom'];

// for ($i=0; $i < count($tabassoc) ; $i++) { 
//     echo $tabassoc[$i]." ! ";
// }

foreach($tabassoc as $val){
    echo " $val x ";
}
$mat = [
    ["moussa", "diop", 250],
    ["fatou", "diallo", 35],
    ["pathe", "diop", 95],
];

echo "<br>";
for ($ligne=0; $ligne < count($mat) ; $ligne++) { 
    for ($colonne=0; $colonne <count($mat[$ligne]); $colonne++) { 
        echo $mat[$ligne][$colonne]. " ";
    }
    echo "<br>";
}

foreach($mat as $tab){
    foreach($tab as $val){
        echo "$val ";
    }
    echo "<br>";
}
 
echo " <pre>";
$tab = [8, 9, 0];
$entiers = [5, -5, 102, 35, -15, 78];

// shuffle($entiers);

$stab = array_slice($entiers, 2, 3);

print_r($stab);


print_r($entiers);

sort($entiers);

print_r($entiers);

rsort($entiers);

print_r($entiers);

$entiers = array_reverse($entiers);

print_r($entiers);

shuffle($entiers);
print_r($entiers);

echo $entiers[array_rand($entiers)];

echo " <pre></pre>";


