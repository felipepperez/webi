<?php

$server = "localhost";
$user = "root";
$pass = "";
$mydb = "test";

$conn = new mysqli($server,$user,$pass,$mydb);

if($conn->connect_error){
    die("Conexão Falhou: ".$conn->connect_error);
}

$sql = " INSERT INTO usuarios (nome,usuario,senha) VALUES ('Felipe','fpp','fpp')";

echo "<h2>".$sql."</h2>";
if($conn->query($sql)===TRUE){
    echo "<h3>Novo registro inserido</h3>";
}else{
    echo "Error: ".$conn->error;
}

$sql = "INSERT INTO usuarios (nome,usuario,senha) VALUES ('Oswaldo','oxz','oxz');";
$sql .= " INSERT INTO usuarios (nome,usuario,senha) VALUES ('Felipe','fpp','fpp');";

echo "<h2>".$sql."</h2>";
if($conn->multi_query($sql)===TRUE){
    echo "<h3>Novos registros inseridos</h3>";
}else{
    echo "Error: ".$conn->error;
}

$nome = $usuario = $senha = "";

$stmt = $conn->prepare("INSERT INTO usuarios (nome,usuario,senha) VALUES (?,?,?)");

$stmt->bind_param("sss",$nome,$usuario,$senha);

$nome = "Flavio";
$usuario = "fll";
$senha = "fll";

$stmt->execute();

echo "<h2>".$nome."</h2>";
if($stmt->error){
    echo "Error: ".$conn->error;
}else{
    echo "<h3>Novo registro inserido</h3>";
}

$nome = "Thiago";
$usuario = "tgq";
$senha = "tgq";

$stmt->execute();

echo "<h2>".$nome."</h2>";
if($stmt->error){
    echo "Error: ".$conn->error;
}else{
    echo "<h3>Novo registro inserido</h3>";
}


echo "<h1>Registros encontrados:</h1>"; 

$sql = "SELECT * FROM usuarios";

$result = $conn->query($sql);

if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $senha = $row["senha"];

        for($i=0;$i<strlen($senha);$i++){
            $senha[$i]="*";
        }

        echo "<h3>Nome: ".$row["nome"]." - Usuario: ".$row["usuario"]." - Senha ".$senha."</h3>";
    }
}else{
    echo "<h3>Nenhum Registro Encontrado</h3>";
}

$conn->close();