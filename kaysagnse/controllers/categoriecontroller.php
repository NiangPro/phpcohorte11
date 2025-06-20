<?php 

if(isset($_GET["type"])){
    require_once("views/addcategorie.php");
}else{

    require_once("views/categorie.php");
}