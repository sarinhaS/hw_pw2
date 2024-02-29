<?php

$funcionarios[0]["nome"] = "João";
$funcionarios[0]["salario"] = 2000;
$funcionarios[1]["nome"] = "Maria";
$funcionarios[1]["salario"] = 2500;
$funcionarios[2]["nome"] = "Pedro";
$funcionarios[2]["salario"] = 1800;

echo "O salário de Maria é: " . $funcionarios[1]["salario"];

echo "<br><br> <h2>Tabela de funcionários:</h2><br>";
function tabela($funcionarios){

    echo "<table> <tr> <th> Nome </th> <th> Salário </th> </th> </tr> ";
    
    foreach($funcionarios as $funcionario){

        echo "<tr>";
        echo "<td>" . $funcionario['nome'] . "</td>";
        echo "<td>" . $funcionario['salario'] . "</td>";
        echo "</tr>";
        
    }

    echo "</table>";

}

echo tabela($funcionarios);

$media = 0;

foreach($funcionarios as $funcionario){

    $media = $funcionario['salario'] + $media;
    
}

echo "<h2>Média do salário: " .  $media/3 . "</h2> ";
echo "<h2>Soma dos salários: " .  $media . "</h2> ";


echo " <h3> Funcionários com salários maior ou igual a 2.000: <br><br>";
foreach($funcionarios as $funcionario){

    if($funcionario['salario'] >= 2000){
        echo $funcionario['nome'] . "<br>";
    }
    
}
echo "</h3>";

?>