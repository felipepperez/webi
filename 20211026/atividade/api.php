<?php

include_once("bd.php");

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $tabela = filter_input(INPUT_GET, "tabela", FILTER_SANITIZE_SPECIAL_CHARS);
    $coluna = isset($_GET['coluna']) ? filter_input(INPUT_GET, "coluna", FILTER_SANITIZE_SPECIAL_CHARS) : '';
    $valor = isset($_GET['valor']) ? filter_input(INPUT_GET, "valor", FILTER_SANITIZE_SPECIAL_CHARS) : '';
    $novovalor = isset($_GET['novovalor']) ? filter_input(INPUT_GET, "novovalor", FILTER_SANITIZE_SPECIAL_CHARS) : '';
}

$sql = "UPDATE $tabela SET $coluna = '$novovalor'";
$sql .= " WHERE $coluna='$valor'";

$result = $conn->query($sql);

echo json_encode(["erro"=>$result?true:false]);