<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<script>
    function direBonjour(){
        document.write("Bonjour tout le monde")
    }

    let direBonjourA = function (prenom){
        document.write(`<br>Bonjour ${prenom}<br>`)
    }

    let detailsPerso = (prenom,age)=>{
        document.write(`Bonjour ${prenom}, tu as ${age} ans <br>`);
    }

    direBonjour();
    direBonjourA("Moussa")
    detailsPerso("Maimouna", 23)
    direBonjourA("Bintou")
    direBonjour()
</script>
</body>
</html>