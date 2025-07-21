<?php 

if (isset($_POST["ajouter"])) {
    extract($_POST);

    $img = $_FILES["image"]["tmp_name"];

    $img_name = uniqid().".jpg";

    if (ajouterUneCategorie($nom, $img_name)) {
        move_uploaded_file($img, "images/".$img_name);
    }

    return header("Location:?page=categorie");
}

if (isset($_POST["modifier"])) {
    extract($_POST);
    $c = recupererUneCategorie($_GET["id"]);

    // si l'utilisateur modifie l'image de la catégorie 
    if ($_FILES["image"]["size"] > 0) {
       $img = $_FILES["image"]["tmp_name"];
       $img_name = uniqid().".jpg";

       move_uploaded_file($img, "images/".$img_name);
    }else{
        $img_name = $c->image;
    }

    if (modifierUneCategorie($_GET["id"], $nom, $img_name)) {
        return header("Location:?page=categorie");
    }
}

if (isset($_GET["iddeleting"])) {
    supprimerUneCategorie($_GET["iddeleting"]);

    return header("Location:?page=categorie");
}
$categories = recupererToutesLesCategories();

if(isset($_GET["type"])){
    if (isset($_GET["id"])) {
       $c = recupererUneCategorie($_GET["id"]);
    }
    require_once("views/addcategorie.php");
}else{

    require_once("views/categorie.php");
}