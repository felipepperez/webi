<?php

/*Crie um código em PHP que dado um array $arr ordenar seus elementos em ordem
decrescente.
Ex: $arr = array(35,70,1,9,6,25,12);*/

$arr = array(35,70,1,9,6,25,12);

echo "Ordenacao Crescente<br>";
for($i=0;$i<count($arr);$i++){
    $trocas = false;
    for($x=0;$x<count($arr);$x++){
        echo $arr[$x]." ";
    }
    echo "<br>";
    for($x=0;$x<count($arr)-$i-1;$x++){
        if($arr[$x]>$arr[$x+1]){
            $trocas = true;
            $a = $arr[$x];
            $arr[$x] = $arr[$x+1];
            $arr[$x+1] = $a;
        }
    }
    if(!$trocas)
        break;
}

//$arr = array(35,70,1,9,6,25,12);

echo "Ordenacao Decrescente<br>";
for($i=0;$i<count($arr);$i++){
    $trocas = false;
    for($x=0;$x<count($arr);$x++){
        echo $arr[$x]." ";
    }
    echo "<br>";
    for($x=0;$x<count($arr)-$i-1;$x++){
        if($arr[$x]<$arr[$x+1]){
            $trocas = true;
            $a = $arr[$x];
            $arr[$x] = $arr[$x+1];
            $arr[$x+1] = $a;
        }
    }
    if(!$trocas)
        break;
}