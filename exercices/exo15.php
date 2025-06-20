<?php 

$a = 2;
$b= 4;
$c = 2;


$delta = $b*$b - (4*$a*$c);

echo "L'équation ($a)x<sup>2</sup> + ($b)x + ($c) = 0 admet comme solution: <br>";
if ($delta < 0) {
    echo "S=Ø";
}else if($delta == 0){
    $x = -$b/(2*$a);
    echo "S={ $x }";
}else{
    $x1 = (-$b - sqrt($delta))/(2*$a);
    $x2 = (-$b + sqrt($delta))/(2*$a);
    echo "S={ $x1; $x2 }";
}