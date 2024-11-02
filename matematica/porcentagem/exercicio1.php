<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <!-- Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto. -->
    <form method="post">
        <label>Insira o valor do produto:</label>
        <input type="number" id="numero" name="numero">
        <button type="submit">Calcular desconto</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["numero"])) {
            $numero = $_POST["numero"];
            // faz os calculos 
            $desconto = $numero * 0.07;
            $valordodesconto = $numero - $desconto;
            
            echo "Valor original do produto: R$ $numero<br>";
            echo "Valor do desconto: R$ $desconto<br>";
            echo "Valor com desconto: R$ $valordodesconto<br>";
        }
    }
    ?>
</body>
</html>
