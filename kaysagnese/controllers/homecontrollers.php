<?php

// if(!estClient()){
//     return header("Location:?page=home");
// }

if (isset($_GET["panier"])) {
    if (estClient()) {
       
        if (isset($_GET["id"])) {
            $p = recupererUnProduit($_GET["id"]);
            $pp = existeDeja($_SESSION["user"]->id, $_GET["id"]);
            if($pp){
                if (actualiser($_SESSION["user"]->id, $_GET["id"], $pp->nombre + 1)) {
                    setmessage("Produit actualisé avec succès");
                }
            }else{
                    if (ajouterDansLePanier($_SESSION["user"]->id, $_GET["id"], 1, $p->prix)) {
                        setmessage("Le produit a été ajouté");
                    }
            }
        } 
    }else{
        setmessage("Veuillez d'abord vous connecter", "danger");
    }

    return header("Location:?page=home");
}

$lepluscher = produitLePlusCher();
$moinschers = produitsLesMoinsChers();
$produits = recupererTousLesproduits();


require_once("views/includes/navbar.php");

require_once("views/home.php");