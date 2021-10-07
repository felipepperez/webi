<?php

include_once("motorista.class.php");
include_once("roda.class.php");
include_once("chassi.class.php");

class Carro

{
    private $modelo;
    private $motorista; //Associação
    private $rodas;     //Agregação
    private $chassi;    //Composição

    public function __construct()
    {
        $this->motorista = new Motorista();
        $this->roda = array();
        $this->chassi = new Chassi();
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getMotorista()
    {
        return $this->motorista;
    }

    public function setMotorista($motorista)
    {
        $this->motorista = $motorista;
    }

    public function getRodas()
    {
        return $this->rodas;
    }

    public function setRodas($rodas)
    {
        $this->rodas = $rodas;
    }

    public function getChassi()
    {
        return $this->chassi;
    }

    public function setChassi($chassi)
    {
        $this->chassi = $chassi;
    }

}