<?php
include('funcoes.php');

echo "O menor numero entre 4 e 2 é: " . menor(4, 2) . "<br>";


echo "A distancia entre (1,1) e (1,4) é de: " . distancia(1, 1, 1, 4) . "<br>";

$n = [10, 9, 8, 8, 8, 8];
echo "A média aritimética de " . sizeof($n) . " notas " . json_encode($n) . " é de: " . media($n) . "<br>";

$n = [10, 9, 8, 8, 8, 8];
$p = [1, 2, 3, 3, 2, 1];
echo "A média ponderada de notas " . json_encode($n) . " com pesos " . json_encode($p) . " é de: " . media($n, "p", $p) . "<br>";

$n = [2, 3, 5, 6, 9];
echo "A média harmônica de " . sizeof($n) . " notas " . json_encode($n) . " é de: " . media($n,'h') . "<br>";

echo "o número 3 elevado a 4 potência é: ".potencia(3,4)."<br>";

$arr=[8,7,6,5,4,3,2,1,9];
echo "O array ".json_encode($arr)." foi ordenado para: ".json_encode(ordena($arr,"d"))."<br>";

echo "Os divisores do número 256 são: ".json_encode(divisores(256))."<br>";

echo "O numero 356 é: ".par(356)." e o valor 343 é: ".par(343)."<br>";