<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        for (let i = 1; i <= 50; i++) {
            let multiple = "";

            if (i %5 == 0) {
                multiple = " ---> MULTIPLE DE 5";
            }
            if (i % 2 == 0) {
                document.write(`Nombre pair: ${i} ${multiple} <br>`)
            }else{
                document.write(`NOmbre impair: ${i} ${multiple} <br>`)
            }
        }
    </script>
</body>
</html>