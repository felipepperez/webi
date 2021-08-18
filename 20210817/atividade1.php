<?php
    /*Crie um código em PHP que definido um array $arr de n números inteiros, determinar a
    soma dos números pares.
    Ex: $arr = array(1,2,3,4,5,6,7,8,9,10); */

    $arr = array();
    for($i=0;$i<rand(5,20);$i++){
        $arr[$i] = rand(0,100);
    }


    $count = count($arr);

    $i = 0;
    $soma = 0;

    while($i<$count){
        echo $arr[$i]." ";
        if($arr[$i]%2==0)
            $soma+=$arr[$i];
        $i++;
    }

    echo "<br>";

    echo $soma." ";

    $soma = 0;

    for($i=0;$i<$count;$i++){
        if($arr[$i]%2==0)
            $soma+=$arr[$i];
    }

    echo $soma." ";

    $soma = 0;

    foreach ($arr as $key => $value) {
        if($value%2==0)
            $soma+=$value;
    }

    echo $soma;