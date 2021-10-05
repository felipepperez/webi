<?php
$valor = 6;

function dobro()
{
    $valor = 10;
    return $valor * 2;
}

echo $valor." e ".dobro()."<br>";
echo dobro()." e ".$valor."<br>";


$valor = 6;

function dobro_2()
{
    global $valor;
    $valor = 10;
    return $valor * 2;
}

echo $valor." e ".dobro_2()." e ".$valor."<br>";