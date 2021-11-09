<?php

    require_once "model/Cidade.php";

    class CidadeController{
        public function listar(){
            $cidade = new Cidade();
            $cidades = $cidade->read();

            $_REQUEST["cidades"]=$cidades;

            require_once "view/cidade_view.php";
        }
    }