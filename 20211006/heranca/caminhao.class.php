<?php

//caminhao.class.php

include_once("veiculo.class.php");

class Caminhao extends Veiculo
{
    protected $carga;
    public function __construct()
    {

    }
    private function setCarga($carga)
    {
        $this->carga = $carga;
    }

    private function getCarga()
    {
        return $this->carga;
    }
    public function show()
    {

    }

}