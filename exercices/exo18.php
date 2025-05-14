<?php 

$tab = [12, -4, 5, 7, 24, 17];
$impairs = [];
$pairs = [];

for($i = 0; $i < count($tab); $i++){
    if ($tab[$i] % 2 != 0) {
         echo $tab[$i]."-";
    }

    // if ($tab[$i] % 2 != 0) {
    //     $impairs[] = $tab[$i];
    // }elseif($tab[$i] > 0){
    //     $pairs[] = $tab[$i];
    // }
}


// echo "Les nombres impairs du tableau: <br>";
// print_r($impairs);
// echo "<br>Les nombres pairs du tableau: <br>";
// print_r($pairs);