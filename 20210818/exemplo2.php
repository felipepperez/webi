<?php

$myfile = fopen("webdictionary.txt","r");

$read = fread($myfile,filesize("webdictionary.txt"));

echo $read;

fclose($myfile);

$myfile = fopen("webdictionary.txt","r");

$read = array();
$i=0;
while(!feof($myfile)){
    $read[$i++] = fgets($myfile);
}
var_dump($read);

fclose($myfile);

$myfile = fopen("textos.txt","w+");
fwrite($myfile,"Professor = Felipe Perez\n");
$s = "Aluno = Giovane";
fwrite($myfile,$s);

fclose($myfile);