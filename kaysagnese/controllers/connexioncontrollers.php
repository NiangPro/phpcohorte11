<?php 

if(isset($_POST["login"])){
    extract($_POST);

    $user = connecter($email);
    if ($user) {
        if(password_verify($mdp, $user->mdp)){
           
            $_SESSION["user"] = $user;

            if (estAdmin()) {
               return header("Location:?page=categories");
            }else{
                return header("Location:?page=home");
            }
        }else{
            setmessage("Mot de passe incorrect", "danger");
        }
    }else{
        setmessage("Email introuvable", "danger");
    }
}

require_once("views/includes/navbar.php");

require_once("views/connexion.php");