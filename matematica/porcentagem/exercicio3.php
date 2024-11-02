<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <!-- Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra. -->
    <form method="post">
        <label>Insira o valor do produto:</label>
        <input type="number" id="numero" name="numero">
        <button type="submit">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["numero"])) {
            $numero = $_POST["numero"];
            // faz os calculos 
            $acrescente = $numero + 0.16;
            $divisao = $acrescente / 10;
            
            
            
            echo "Valor de cada parcela: R$ " . number_format($divisao, 2, ',', '.') . "<br>";
            echo "Valor total da compra: R$ " . number_format($acrescente, 2, ',', '.') . "<br>";
           
        }
    }
    ?>
</body>
</html>