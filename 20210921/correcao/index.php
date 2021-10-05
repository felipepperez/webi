<?php
include_once("funcao.php");

for($i=0;$i<50;$i++){
    echo par($i)?"O número ".$i." é par<br>":"O número ".$i." é impar<br>";
}