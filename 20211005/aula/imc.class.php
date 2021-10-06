<?php
//arquivo: imc.class.php
//descricao: Classe para armazenar uma pessoa, seu IMC, sua classificacao e seu grau de obesidade.

class IMC{
    private $nome;
    private $altura;
    private $peso;
    private $classificacao;
    private $grau;
    private $imc;

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getClassificacao(){
        return $this->classificacao;
    }

    public function getGrau(){
        return $this->grau;
    }

    public function getIMC(){
        return $this->imc;
    }

    public function __construct(){
        $this->nome = "";
        $this->peso = 1;
        $this->altura = 1;
        $this->grau = "";
        $this->classificacao = "";
    }

    public function setIMC(){
        if($this->peso!=1&&$this->altura!=1){
            $calc = $this->calcIMC($this->altura,$this->peso);
            $this->imc = $calc["imc"];
            $this->classificacao = $calc["classificacao"];
            $this->grau = $calc["grau"];
        }
    }

    private function calcIMC($altura,$peso){
        $arr = [
            ["max"=>18.5,"min"=>0,"clas"=>"MAGREZA","obs"=>"0"],
            ["max"=>25.0,"min"=>18.5,"clas"=>"NORMAL","obs"=>"0"],
            ["max"=>30.0,"min"=>25.0,"clas"=>"SOBREPESO","obs"=>"I"],
            ["max"=>40.0,"min"=>30.0,"clas"=>"OBESIDADE","obs"=>"II"],
            ["max"=>INF,"min"=>40.0,"clas"=>"OBESIDADE GRAVE","obs"=>"III"]
        ];

        $imc = $peso/($altura*$altura);
        for($i=0;$i<sizeof($arr);$i++){
            if($imc>=$arr[$i]["min"]&&$imc<$arr[$i]["max"]){
                return array('imc' => $imc, 'classificacao' => $arr[$i]["clas"], 'grau' => $arr[$i]["obs"]);
            }
        }
    }

}

// $obj = new IMC();
// $obj->setNome("Felipe");