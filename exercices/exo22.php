<?php
    function table($n){
        if($n > 0){
            for($i = 0; $i<=10; $i++){
                echo" <br>$n * $i =".$n*$i;
            }
        }else{
            echo "Veuillez entrer un nombre positif";
        }
        
    }
    table(5);