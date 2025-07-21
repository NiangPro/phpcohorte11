<?php
if(!estAdmin()){
    return header("Location:?page=home");
}

if (isset($_POST["ajouter"])) {
    extract($_POST);
    $image= $_FILES["image"];
    $img = $image["tmp_name"];
    $img_name=uniqid().".jpg";

        if (ajouterUnproduit($nom, $description, $prix, $qtestock, $img_name, $idcategories)) {
            move_uploaded_file($_FILES["image"]["tmp_name"], "images/".$img_name);
        }
        return header("location:?page=produits");
}

if (isset($_GET["iddeleting"])) {
    supprimerUnproduit($_GET["iddeleting"]);
    return header("location: ?page=produits"); 
}

$produits = recupererTousLesproduits();
$categories = recupererToutesLesCategories();




require_once("views/includes/navbar.php");

if (isset($_GET["type"])) {
    require_once("views/addproduits.php");  
}else{
    require_once("views/produits.php");
}

