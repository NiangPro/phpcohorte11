<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let nombre = prompt("Veuillez saisir un nombre");

        if (nombre > 0) {
            alert("Positif car nombre ="+nombre);
        }else if(nombre < 0){
            alert("Negatif car nombre ="+nombre);
        }else{
            alert("Nul car nombre ="+nombre);
        }

    </script>
</body>
</html>