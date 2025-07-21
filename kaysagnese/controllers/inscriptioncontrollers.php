<?php 

if (isset($_POST["inscrire"])) {
    extract($_POST);

    if ($mdp == $mdp_confirm) {
        $mdp = password_hash($mdp, PASSWORD_DEFAULT, ["cost" => 12]);
        if(inscrire($prenom, $nom, $adresse, $tel, $email, $mdp, "client")){
            setmessage("Inscription avec succès");
            return header("Location:?page=connexion");
        }

    }else{
        setmessage("Les deux mots passe ne concordent pas", "danger");
    }
}


require_once("views/includes/navbar.php");

require_once("views/inscription.php");