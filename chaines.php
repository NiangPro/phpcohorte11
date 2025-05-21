<?php 

 $chaine = "   ma chaine de caractères  ";
 $tel = "788888888";

 echo "La taille: ".mb_strlen($chaine)."<br>";
 $chaine = trim($chaine);
 echo "Le premier caractere: ".$chaine[0]."<br>";

 $chaine = ucfirst($chaine);
 $chaine = ucwords($chaine);
 $chaine = mb_strtoupper($chaine);
 $chaine = mb_strtolower($chaine);
 echo $chaine."<br>";
 echo substr($chaine, 0, 9)."<br>";

 //unset($tel);

 if (isset($tel)) {
    if (ctype_digit($tel)) {
        echo "oui <br>";
    }else{
        echo" NON <br>";
    }
 }else{
    echo "la variable tel n'existe pas <br>";
 }

 $nc = "la cohorte tyu dfg9";
 $prenom = "Maye";

 echo "Le nombre de mots: ".str_word_count($nc);
 echo  "<br>".str_shuffle($prenom);

 $tab = explode(" ", $nc);

 print_r($tab);

 $c = implode("-", $tab);

 echo $c;
 