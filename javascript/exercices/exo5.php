<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
       function genererTable(nombre){
        document.write(`La table de multiplication de ${nombre} est de: <br>`);

        for (let i = 1; i <= 10; i++) {
            let r = nombre * i;
            let mult = "";
            if (r % 3 == 0) {
                mult = " ---> multiple de 3";
            }
            if (r <= 40) {            
                document.write(`${nombre} x ${i} = ${r} ${mult} <br>`);          
            }
        }
       }

       genererTable(5);
       genererTable(7);
    </script>
</body>
</html>