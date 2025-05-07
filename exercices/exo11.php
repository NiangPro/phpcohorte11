<?php 

$nombre = 5;
$produit = 1;

for ($i=$nombre; $i > 1 ; $i--) { 
    $produit *= $i;
    // $produit = $produit * $i;
}
echo "Le factoriel de $nombre est $produit<br>";
