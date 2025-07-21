<?php 


require_once("models/database.php");
require_once("views/includes/navbar.php");

// routeur
if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
        case 'categorie':
            require_once("controllers/categoriecontroller.php");
            break;
        case 'produit':
            require_once("controllers/produitcontroller.php");
            break;
        default:
            require_once("controllers/homecontroller.php");
            break;
    }
}else{
    require_once("controllers/homecontroller.php");
}

require_once("views/includes/footer.php");


