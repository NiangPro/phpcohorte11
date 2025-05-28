<?php 

echo "<pre>";
// print_r($_POST);

if (isset($_POST["register"])) {
    extract($_POST);

    echo "Prenom: ".$prenom."<br>";
    echo "Nom: ".$nom."<br>";
    echo "Email: ".$_POST["email"]."<br>";
}
// else{
//     echo "<h1>Veuillez d'abord renseigner le formulaire</h1>";
// }


if(isset($_POST["login"])){
    extract($_POST);
    if ($email == "admin@gmail.com" && $mdp == "admin") {
        header("Location: connexion.php");
    }else{
        header("Location: connexion.php?erreur");
    }
}


echo "</pre>";
