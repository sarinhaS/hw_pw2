<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pg6pt2.php" method="post">
        
        <label for="um">Valor 1: </label>
        <input type="text" name='um' id='um'><br><br>
        <label for="dois">Valor 2: </label>
        <input type="text" name='dois' id='dois'><br><br>
        
        <input type="radio" name="somar" id="somar">
        <label for="somar">Somar </label><br>
        <input type="radio" name="subtrair" id="subtrair">
        <label for="subtrair">Subtrair </label><br>
        <input type="radio" name="multiplicar" id="multiplicar">
        <label for="multiplicar">Multiplicar </label><br>
        <input type="radio" name="dividir" id="dividir">
        <label for="dividir">Dividir </label><br><br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>