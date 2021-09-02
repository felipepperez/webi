<?php

#Atividade 1
#Escreva uma função que receba dois números inteiros retorne o menor número.
function menor($num1, $num2)
{
    return ($num1 > $num2) ? $num2 : $num1;
}
#menor(2,1);

#Atividade 2
#Escreva uma função que calcule e retorne a distância entre dois pontos (x1,y1) e (x2,y2).
function distancia($x1, $y1, $x2, $y2)
{
    return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
}
#distancia(2,3,4,5)

#Atividade 6
#Escreva uma função que receba 3 notas de um aluno e uma letra. Se a letra for A a função retorna a média aritmética das notas do aluno, se for P, a sua média ponderada (pesos: 5, 3 e 2) e se for H, a sua média	 harmônica.

function media($n, $tipo = "A", $p = [])
{
    if (!is_array($n))
        return false;
    switch ($tipo) {
        case 'a':
        case 'A':
        default:
            return array_sum($n) / sizeof($n);
            break;
        case 'p':
        case 'P':
            if ($p == [] || sizeof($p) != sizeof($n))
                return media($n);
            $sum = 0;
            for ($i = 0; $i < sizeof($n); $i++)
                $sum += $n[$i] * $p[$i];
            return $sum / array_sum($p);
            break;
        case 'h':
        case 'H':
            $sum = 0;
            for ($i = 0; $i < sizeof($n); $i++)
                $sum += 1 / $n[$i];
            return sizeof($n) / $sum;
            break;
    }
}

#media([10,9,8])

#Atividade 3
#Escreva uma função potencia(base, expoente) que, quando chamada, retorna baseexpoente. Por exemplo, potencia(3,4) deve retornar 81.

function potencia($base, $expoente = 2)
{
    $sum = 1;
    for ($i = 0; $i < $expoente; $i++)
        $sum *= $base;
    return $sum;
}

#potencia(3,4)

#Atividade 4
#Escreva uma função que receba um array e retorne o array ordenado. Não utilize funções prontas de ordenação.

function ordena($arr, $t = "a")
{
    if (!is_array($arr))
        return false;
    switch ($t) {
        case 'a':
        case 'A':
        default:
            for($i=0;$i<sizeof($arr);$i++){
                $troca = false;
                for($x=0;$x<sizeof($arr)-1-$i;$x++){
                    if($arr[$x]>$arr[$x+1]){
                        $aux = $arr[$x];
                        $arr[$x] = $arr[$x+1];
                        $arr[$x+1] = $aux;
                        $troca = true;
                    }
                }
                if(!$troca)
                    break;
            }
            break;
        case 'd':
        case 'D':
            for($i=0;$i<sizeof($arr);$i++){
                $troca = false;
                for($x=0;$x<sizeof($arr)-1-$i;$x++){
                    if($arr[$x]<$arr[$x+1]){
                        $aux = $arr[$x];
                        $arr[$x] = $arr[$x+1];
                        $arr[$x+1] = $aux;
                        $troca = true;
                    }
                }
                if(!$troca)
                    break;
            }
            break;
    }
    return $arr;
}
#ordena($arr,"d")

#Atividade 5
#Escreva uma função que receba um número inteiro retorne um array contendo todos seus divisores (exceto ele mesmo).
function divisores($num){
    $arr = Array();
    for ($i=1; $i < $num; $i++) { 
        if($num%$i==0)
            array_push($arr,$i);
    }
    return $arr;
}
#divisores(6)

#Atividade 7
#Faça uma função que recebe um valor inteiro e verifica se o valor é par. A função deve retornar 1 se o número for par e 0 se for ímpar.
function par($num){
    return ($num%2==0)?"par":"impar";
}
#par(2)