<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let a = parseInt(prompt("Entrer la premiere valeur"));
        let b = parseInt(prompt("Entrer la deuxieme valeur"));

        var som = a+b;

        document.write(`${a} + ${b} = ${a+b} <br>`);

        if (som >  0) {
            document.write(`${som} > 0`);
        }else if(som < 0){
            document.write(`${som} < 0`);
        }else{
            document.write(`${som} = 0`)
        };
    </script>
</body>
</html>