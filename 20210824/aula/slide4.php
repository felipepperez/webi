<?php

function getPrimos($qtd = 3)
{
    $arr = array();
    for ($i = 1; sizeof($arr) < $qtd; $i++) {
        $divisores = 0;
        for ($x = 2; $x < $i; $x++) {
            if ($i % $x == 0)
                $divisores++;
        }
        if ($divisores == 0)
            array_push($arr, $i);
    }
    return $arr;
}

print_r(getPrimos());
echo "<br>";
print_r(getPrimos(20));