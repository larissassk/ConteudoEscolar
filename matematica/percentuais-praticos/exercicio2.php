<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <!-- Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 27%. -->
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
            $desconto = $numero * 0.27;
            
            echo "Valor com desconto de 27%: R$ $desconto<br>";
           
        }
    }
    ?>
</body>
</html>