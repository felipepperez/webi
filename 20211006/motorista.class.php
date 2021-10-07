<?php

class Motorista
{

    private $nome;

    private $cnh;

    public function getNome()

    {

        return $this->nome;
    }

    public function setNome($nome)

    {

        $this->nome = $nome;
    }

    public function getCnh()

    {

        return $this->cnh;
    }

    public function setCnh($cnh)

    {

        $this->cnh = $cnh;
    }
}
