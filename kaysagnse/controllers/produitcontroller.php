<?php

if (isset($_POST["ajouter"])) {
    extract($_POST);

    $image = $_FILES["image"];
    $img = $_FILES["image"]["tmp_name"];
    $img_name = uniqid().".jpg";

    if (ajouterUnProduit($nom, $description, $prix, $qtestock, $img_name, $idcategorie)) {
        move_uploaded_file($img, "images/".$img_name);
        return header("Location:?page=produit");
    }
}

if(isset($_GET["iddeleting"])){
    supprimerUnProduit($_GET["iddeleting"]);
    return header("Location:?page=produit");
}

$produits = recupererTousLesProduits();
$categories = recupererToutesLesCategories();
if (isset($_GET["type"])) {
        require_once("views/addproduit.php");
}else{

    require_once("views/produit.php");
}