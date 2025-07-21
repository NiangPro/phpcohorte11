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
            *********** MENU DU JOUR ************
            a- Mafee
            b- Yassa
            c- Thiebou Djeun
            Faites votre choix
        `);

        switch(choix){
            case "a": 
                alert("VOus avez choisi Mafee");
                break;
            default: 
                alert("choix indisponible");
                break;
        }
    </script>
</body>
</html>