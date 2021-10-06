<?php

include("imc.class.php");

$obj = new IMC();
$obj->setNome("Felipe");
$obj->setPeso(85);
$obj->setAltura(1.75);
$obj->setIMC();
echo "<h1>".$obj->getNome()."</h1>";
echo "<h2>É classificado como: ".$obj->getClassificacao()."</h2>";
echo "<h2>E tem grau de obesidade: ".$obj->getGrau()."</h2>";