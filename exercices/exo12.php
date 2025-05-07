<?php 

$n = 20;


for ($i=1; $i <= $n; $i++) { 
    if ($i % 2 == 0) {
        echo "$i - ";
    }
}

echo "<br>";
for ($i=2; $i <= $n ; $i=$i+2) { 
    echo "$i - ";
}