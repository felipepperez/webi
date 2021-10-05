<?php
$arrNome = array("Felipe", "Matheus", "Luciano");
$arrRGM = array("802.123", "802.203", "802.222");

for ($i = 0; $i < sizeof($arrNome); $i++) {
    echo $arrRGM[$i] . " - " . $arrNome[$i] . "<br>";
}
