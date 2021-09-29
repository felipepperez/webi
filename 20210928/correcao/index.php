<?php
    $arr = [
        ["max"=>18.5,"min"=>0,"clas"=>"MAGREZA","obs"=>"0"],
        ["max"=>25.0,"min"=>18.5,"clas"=>"NORMAL","obs"=>"0"],
        ["max"=>30.0,"min"=>25.0,"clas"=>"SOBREPESO","obs"=>"I"],
        ["max"=>40.0,"min"=>30.0,"clas"=>"OBESIDADE","obs"=>"II"],
        ["max"=>INF,"min"=>40.0,"clas"=>"OBESIDADE GRAVE","obs"=>"III"]
    ];
    if($_SERVER["REQUEST_METHOD"]==="GET"){
        if(isset($_GET["nome"])&&isset($_GET["altura"])&&isset($_GET["peso"])&&is_numeric($_GET["altura"])&&is_numeric($_GET["peso"])){
            $nome = filter_input(INPUT_GET,"nome",FILTER_SANITIZE_SPECIAL_CHARS);
            $altura = filter_input(INPUT_GET,"altura",FILTER_SANITIZE_SPECIAL_CHARS);
            $peso = filter_input(INPUT_GET,"peso",FILTER_SANITIZE_SPECIAL_CHARS);

            $imc = $peso/($altura*$altura);
            for($i=0;$i<sizeof($arr);$i++){
                if($imc>=$arr[$i]["min"]&&$imc<$arr[$i]["max"]){
                    echo "<h1>".$nome." - ".$peso."kg e ".$altura." mts</h1>";
                    echo "<h2>".$arr[$i]["clas"]." - Obesidade grau ".$arr[$i]["obs"]."</h2>";
                    break;
                }
            }

        }else{
            echo "<h1>Parâmetros enviados incorretamente.</h1>";
        }
    }