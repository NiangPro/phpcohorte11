<?php
$choix = 1;
echo "***** MENU PRINCIPAL **** <br>";
echo " 
        1- Sports <br>
        2- Couleur <br>
        3- Musique <br>
        Faites votre choix: $choix <br>
";


switch ($choix) {
    case 1:
        $choix = "a";
        echo "
            *** Menu Sport *** <br>
            a- Football <br>
            b- Basketball <br>
            Faites votre choix: $choix <br>
        ";
        switch ($choix) {
            case 'a':
                $choix = 2;
                echo "
                    *** Menu Football *** <br>
                    1- homme <br>
                    2- Femme <br>
                    Faites votre choix: $choix <br>
                ";
                switch ($choix) {
                    case 1:
                        echo "<pre>Vous avez choisi : Sports -> Football -> Homme</pre>";
                        break;
                    case 2:
                        echo "<pre>Vous avez choisi : Sports -> Football -> Femme</pre>";
                        break;
                    default:
                        echo "<pre>Choix indisponible </pre>";
                        break;
                }
                break;
            case 'b': 
                echo "<pre>Vous avez choisi: Sports -> Basketball </pre>";
                break;
            default:
                echo "<pre>Choix indisponible </pre>";
                break;
        }
        break;
    case 2:

        break;
    case 3: 

        break;
    default:
        echo "<pre>Choix indisponible </pre>";
        break;
}