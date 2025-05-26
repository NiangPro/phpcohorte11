<?php

// echo "<pre>";
$produits_bruts = "souris gamer, ecran LED, chargeur USB, tapis de souris, casque audio";

$produits = explode(",", $produits_bruts);

function genererCodeProduit($nomProduit){
    return substr($nomProduit, 0, 3).rand(100, 999);
}

function genererPrixProduit(){
    return rand(20, 300);
}

function afficheFicheProduit($nomProduit){
    $nomProduit = strtoupper(trim($nomProduit));
    echo "
        📦 Produit : ".$nomProduit." <br>
        🆔 Code : ".genererCodeProduit($nomProduit)." <br>
        💰Prix: ".rand(20, 300)."€ <br>
        --------------------- <br>
    ";
}

foreach ($produits as $produit) {
    afficheFicheProduit($produit);
}
$tabProduits = [];

foreach ($produits as $produit) {
    $tabProduits[] = [
        "nom" => strtoupper(trim($produit)),
        "code" => genererCodeProduit(strtoupper(trim($produit))),
        "prix" => rand(20, 300),
        "stock" => rand(5, 100)
    ];
}

echo "<h2>Les produits sous forme de tableau associatif</h2>";
foreach ($tabProduits as $p) {
    echo "
        📦 Produit : ".$p["nom"]." <br>
        🆔 Code : ".$p["code"]." <br>
        💰Prix: ".$p["prix"]."€ <br>
        📦Nombre: ".$p["stock"]." unites <br>
        ".str_repeat("-", 40)."<br>
    ";
}



// echo "<pre></pre>";
