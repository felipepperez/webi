<?php

/*Crie um código em PHP que dado um array $arr contendo um número na base binária,
transformá-lo para a base decimal.
Ex: $arr = array(1,1,1,0,0,0,1); */

$arr = "101111100";

$dec = 0;
for($i=(strlen($arr)-1),$x=0;$i>=0;$i--,$x++){
    $dec += ($arr[$i]==1)?pow(2,$x):0;
}

echo $arr." -> ".$dec;