<?php 
session_start();
require_once("models/fonctions.php");
require_once("models/database.php");

$categories = recupererToutesLesCategories();

if (estClient()) {
    $pan = panier($_SESSION["user"]->id);
}

// routeur
if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
        case 'categories':
            require_once("controllers/categoriescontrollers.php");
            break;
        
            case 'produits':
                require_once("controllers/produitscontrollers.php");
                break;
             case 'archiveCategorie':
                require_once("controllers/archivecategoriecontrollers.php");
                break;
            case 'detailproduit':
                require_once("controllers/detailproduitcontrollers.php");
                break;
            case 'connexion':
                require_once("controllers/connexioncontrollers.php");
                break;
            case 'deconnexion':
                require_once("controllers/deconnexioncontrollers.php");
                break;
            case 'panier':
                require_once("controllers/paniercontrollers.php");
                break;
             case 'inscription':
                require_once("controllers/inscriptioncontrollers.php");
                break;
        default:
        require_once("controllers/homecontrollers.php");
            break;
    }
}else{
    require_once("controllers/homecontrollers.php");

}


require_once("views/includes/footer.php");