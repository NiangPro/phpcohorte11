<?php 

$categorie = recupereruneCategorie($_GET["id"]);

$produits = produitsSimilaires($categorie->id);


require_once("views/includes/navbar.php");

require_once("views/archivecategorie.php");