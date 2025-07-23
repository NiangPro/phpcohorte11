<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<script>
    let chaine = " Ma chaine de caracteres ";
    let nom = "ba";
    chaine = chaine.trim();
    document.write(`La taille est de ${chaine.length} <br>`)
    document.write(`Le premier caractere "${chaine.charAt(0)}" <br>`)
    document.write(`Le dernier caractere "${chaine[chaine.length - 1]}" <br>`)
    document.write(`${chaine.toLowerCase()}<br>`);
    document.write(`${chaine.substr(3, 6)} <br>`)
    document.write(`${chaine.replaceAll("a", "o")} <br>`)
    document.write(`${nom.padEnd(5, "*")}`)

</script>
</body>
</html>