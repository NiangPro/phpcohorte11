<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<h1>Code Php </h1>";
    $a = 4; $b= 6;

    echo "$a + $b = ".($a+$b)."<br>";
    echo "$a - $b = ".($a-$b)."<br>";
    echo "$a x $b = ".($a*$b)."<br>";
    echo "$a / $b = ".($a/$b)."<br>";
    echo "$a div $b = ".intval($a/$b)."<br>";
    echo "$a modulo $b = ".($a%$b)."<br>";

    ?>

    <script>
        document.write("<h1> Code Javascript </h1>");
        let a = 4, b = 6;

        document.write(`${a} + ${b} = ${a+b} <br>`);
        document.write(`${a} - ${b} = ${a-b} <br>`);
        document.write(`${a} x ${b} = ${a*b} <br>`);
        document.write(`${a} / ${b} = ${a/b} <br>`);
        document.write(`${a} div ${b} = ${parseInt(a/b) } <br>`);
        document.write(`${a} modulo ${b} = ${a%b} <br>`);

    </script>
</body>
</html>