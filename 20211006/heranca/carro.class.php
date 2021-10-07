<?php

//carro.class.php

include_once("veiculo.class.php");

class Carro extends Veiculo
{
    protected $tipocarro;
    public function __construct()
    {

    }

    private function setTipo($tipocarro)
    {
        $this->tipocarro = $tipocarro;
    }

    private function getTipo()
    {
        return $this->tipocarro;
    }

    public function show()
    {

    }

}

