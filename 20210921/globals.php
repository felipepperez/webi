<?php

$num = 10;
$a = "a";
$xpto = true;

var_dump($GLOBALS);

function globalNumber(){
    $number = 10;
    echo '<br><br><br>$number no escopo global: '.$GLOBALS["number"]."<br>";
    echo '$number no escopo local: '.$number;
}

$number = 1;
globalNumber();