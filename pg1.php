<?php 

    function soma ($n1 , $n2){
        return $n1 + $n2;
    }

    function subtracao ($n1 , $n2){
        return $n1 - $n2;
    }

    function multiplicacao ($n1 , $n2){
        return $n1 * $n2;
    }

    function divisao ($n1 , $n2){
        return $n1 / $n2;
    }

    echo "A soma de 5 + 2 é: " . soma(5, 2) . "<br>";
    echo "A subtração de 10-8 é: " . subtracao(10, 8) . "<br>";
    echo "A multiplicação de 7 * 4 é: " . multiplicacao(7, 4) . "<br>";
    echo "A divisão de 6/3 é: " . divisao(6, 3) . "<br>";


?>