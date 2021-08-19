<?php
$myfile = fopen("primos.txt","r");
$soma=0;
while(!feof($myfile)){
    $soma+=fgets($myfile);
}
echo $soma;