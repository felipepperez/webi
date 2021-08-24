<?php

function printNumber($num=5){
    for ($i=0; $i < $num; $i++) { 
        echo $i." ";
    }
    echo "<br>";
}

printNumber();
printNumber(10);
printNumber();