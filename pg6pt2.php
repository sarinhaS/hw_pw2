<?php 
    $valor1 = $_POST['um'];
    $valor2 = $_POST['dois'];
    $somar = $_POST['somar'];
    $subtrair = $_POST['subtrair'];
    $multiplicar = $_POST['multiplicar'];
    $dividir = $_POST['dividir'];

    if($somar === true){
        soma($valor1, $valor2);
    }else if($subtrair === true){
        
        subtracao($valor1, $valor2);
    }else if($multiplicar === true){
        multiplicacao($valor1, $valor2);

    }else if($dividir === true){
        divisao($valor1, $valor2);
    }


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

?>