<?php 

$panier = [
    ["nom" => "Banane", "prix" => 40, "quantite" => 5],
    ["nom" => "Pomme", "prix" => 250, "quantite" => 15],
    ["nom" => "Poire", "prix" => 300, "quantite" => 2],
    ["nom" => "Orange", "prix" => 200, "quantite" => 7],
    ["nom" => "Prune", "prix" => 350, "quantite" => 1]
];

echo "<h1>Le contenu du panier: </h1>";
foreach ($panier as $key => $produit) {
    echo "<h3>Produit N° ".($key+1)." </h3>";
    echo "Nom: ".$produit["nom"]." <br>";
    echo "Prix: ".$produit["prix"]." <br>";
    echo "Nombre: ".$produit["quantite"]." <br>";
    echo "Montant: ".$produit["prix"]*$produit["quantite"]." FCFA <br>";
}

$total = 0;

foreach ($panier as $prod) {
    // $total = $total + $prod['prix'] * $prod['quantite'];
    $total += $prod['prix'] * $prod['quantite'];
}
echo "<h2>Montant total : $total FCFA</h2>";

if ($total > 100) {
    
    $remise = $total - ($total * 10/100 );

    echo "<h2>Montant avec remise : $remise FCFA</h2>";

}

echo "<h1>Les produits les plus chers: </h1>";
foreach ($panier as $key => $produit) {
    if ($produit["prix"] > 50) {
        echo "Nom: ".$produit["nom"]." <br>";
        echo "Prix: ".$produit["prix"]." <br>";
        echo "Nombre: ".$produit["quantite"]." <br>";
        echo "Montant: ".$produit["prix"]*$produit["quantite"]." FCFA <br><br>";
    }
}

