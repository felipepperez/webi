<?php

/*Crie um código em PHP que dados dois números inteiros $x e $y positivos, retornar o
máximo divisor comum entre eles usando o algoritmo de Euclides. */

$x = rand(1,100);
$y = rand(1,100);

if($x<$y){
    $a = $x;
    $x = $y;
    $y = $a;
}

while($y != 0){
    echo $x." - ".$y." - ";
    $a = $x % $y;
    $x = $y;
    $y = $a;
    echo $a."<br>";
}

echo "MDC e: ".$x;