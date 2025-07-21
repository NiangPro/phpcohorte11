<?php

if(!estAdmin()){
    return header("Location:?page=home");
}

if (isset($_POST["ajouter"])) {
    extract($_POST);
    


    $img_name=uniqid().".jpg";

        if (ajouterUneCategorie($nom, $img_name)) {
            move_uploaded_file($_FILES["image"]["tmp_name"], "images/".$img_name);
        }
        return header("location:?page=categories");
}

if (isset($_POST["modifier"])) {

    extract($_POST);
    $c = recupereruneCategorie($_GET["id"]);
    if ($_FILES["image"]["size"] > 0) {
        $img = $_FILES["image"]["tmp_name"];
        $img_name = uniqid().".jpg";
        move_uploaded_file($img, "images/" .$img_name);
    }else{
        $img_name = $c ->image;
    }
    if (modifierUneCategorie($_GET["id"], $nom, $img_name)) {
        return header("Location:?page=categories");
    }
}


if (isset($_GET["iddeleting"])) {
    supprimerUneCategories($_GET["iddeleting"]);
    return header("location: ?page=categories"); 
}


$categories = recupererToutesLesCategories();

require_once("views/includes/navbar.php");

if(isset($_GET["type"])){
    if (isset($_GET['id'])) {
        $c =recupereruneCategorie($_GET['id']);
    }
    require_once("views/addcategories.php");
}else {
    require_once("views/categories.php");

}



