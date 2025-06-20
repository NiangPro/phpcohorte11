<?php


if (isset($_GET["type"])) {
        require_once("views/addproduit.php");
}else{

    require_once("views/produit.php");
}