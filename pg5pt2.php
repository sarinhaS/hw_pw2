<?php 

    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    if(($a+$b) >= $c && ($b+$c) >= $a && ($c+$a) >= $b ){
        echo "esse triângulo não existe";
    }else{
        if($a === $b && $b === $c && $c === $a ){
            echo "é equilatero";
        }else if($a === $b || $b === $c || $c === $a ){
            echo "é isosceles";
        }else if($a !== $b && $b !== $c && $c !== $a ){
            echo "é escaleno";
        }
    }

?>