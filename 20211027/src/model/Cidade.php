<?php
/*
    model/Cidade
*/

namespace App\Model;

use mysqli;

class Cidade{
    private $codcid;
    private $nomecid;
    private $uf;
    private $conn;

    public function getCodCid(){
        return $this->codcid;
    }

    public function setCodCid($codcid){
        $this->codcid = $codcid;
    }

    public function getNomeCid(){
        return $this->nomecid;
    }

    public function setNomeCid($nomecid){
        $this->nomecid = $nomecid;
    }

    public function getUF(){
        return $this->uf;
    }

    public function setUF($uf){
        $this->uf = $uf;
    }

    public function __construct()
    {
        $this->codcid=0;
        $this->conectaBD();
    }

    private function conectaBD(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $mydb = "vendas";

        $this->conn = new mysqli($server,$user,$pass,$mydb);
        if($this->conn->error)
            die("Conexão Falhou: ".$this->conn->connect_error);
    }

    public function create(){
        $sql = "INSERT INTO cidade (NOMECID, UF) VALUES ('$this->nomecid','$this->uf')";
        $this->conn->query($sql);
    }

    public function update(){
        $sql = "UPDATE cidade SET NOMECID='".$this->getNomeCid()."', UF='".$this->getUF()."' WHERE CODCID='".$this->getCodCid()."'";
        echo $sql;
    }

    public function delete(){
        $sql = "DELETE FROM cidade
       WHERE CODCID=".$this->getCodCid();
        $this->conn->query($sql);
    }

    public function read(){
        $sql = "SELECT * FROM cidade";
        $returnValue = array();
        $result = $this->conn->query($sql);
        
        if ($result != null) {
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                if (!empty($row)) {
                    array_push($returnValue,$row);
                }
            }
        }
        return $returnValue;
        }
}

//$cidade = new Cidade();
//$cidade->setUF("OL");
//$cidade->setNomeCid("ola voce2");
//echo json_encode($cidade->read());