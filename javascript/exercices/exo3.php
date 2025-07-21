<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let choix = prompt(`
                MENU PRINcIPAL
                1- Sports
                2- couleur
                3- Musique
                Faites votre choix
        `);

        switch (choix) {
            case "1":
                choix = prompt(`
                        MENU SPORTS
                        a- FOOTBALL
                        b- BASKETBALL
                        Faites votre choix
                `);

                switch (choix) {
                    case "a":
                        choix = prompt(`
                                MENU SPORTS - FOOTBALL
                                1- Homme
                                2- Femme
                                Faites votre choix
                        `);
                        switch (choix) {
                            case "1":
                                alert("Vous avez choisi football (homme)");
                                break;
                            case "2": 
                                alert("Vous avez choisi football (femme)");
                                break;
                            default: 
                                alert("choix indisponible");
                                break;
                        }
                        break;
                    case "b": 
                        alert("Vous avez choisi basketball");
                        break;
                    default: 
                        alert("choix indisponible");
                        break;
                }
                
                break;
        
            default: 
                alert("choix indisponible");
                break;
        }
    </script>
</body>
</html>