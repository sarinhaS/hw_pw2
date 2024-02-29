<?php 

    function bhaskara($a, $b, $c){
        $delta = $b**2 - (( 4 * $a) * $c);
        if($delta < 0){
            
            echo "Os valores de bháskara para a = $a, b = $b, c = $c é: " . "S = {Não existe raiz de números negativos} <br>";
        }else{
            $x1 = (-$b + sqrt($delta))/(2 * $a); 
            $x2 = (-$b - sqrt($delta))/(2 * $a);
            echo "Os valores de bháskara para a = $a, b = $b, c = $c é: " . "S = {" . $x1 . "e" . $x2 . "} <br>";
        }
    }

    bhaskara(4, 2, -6);
    bhaskara(7, 3, 4);
?>