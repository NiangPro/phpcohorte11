<?php 

$produit = recupererUnProduit($_GET["id"]);
$produits = produitsSimilaires($produit->idcategorie);

require_once("views/includes/navbar.php");

require_once("views/detailproduit.php");