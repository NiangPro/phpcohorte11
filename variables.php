<?php 

    echo "<h1>Les variables en php</h1>";

    $entier = 203;

    $decimal = 45.45;

    $chaine = "Ma chaine de caracteres en php ";

    // $chaine = $chaine."Nouvelle chaine";
    $chaine .= "Nouvelle chaine";
    // $chaine = "Chaine";

    $booleen = false;

    echo $chaine;

    echo '<br>Mon entier est : ' . $entier . ', mon decimal est : '.$decimal;

    // echo gettype($entier);