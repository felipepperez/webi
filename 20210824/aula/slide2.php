<?php

function printNumber($qtd,$num,$string){
    for ($i=1; $i <= $qtd; $i++) { 
        echo str_pad($i,$num,$string,STR_PAD_LEFT)." ";
    }
    echo "<br>";
}

printNumber(rand(0,20),3,"0");
printNumber(rand(0,20),3,"0");
printNumber(rand(0,20),3,"0");