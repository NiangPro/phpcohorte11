<?php 
echo "<pre>";
$tab = [ "Modou", "Ndiaye", 34, "Pikine"];

$entiers = array(12, 34, -4, 6, 109);

echo $tab[2];
echo "<br> La taille du tableau: ".count($tab);
echo "<br> Dernier element du tableau: ".$tab[count($tab) - 1];

array_push($tab, "Villa n3");
$tab[] = "3 enfants";
array_unshift($tab, "Moussa");

array_splice($tab, count($tab) - 1,1);


array_pop($tab);

array_shift($tab);
array_splice($tab, 0, 0, "Premier");
print_r($tab);

for($i = 0; $i < count($tab); $i++){
    echo $tab[$i]." - ";
}
echo "</pre>";
