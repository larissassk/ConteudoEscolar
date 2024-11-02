<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATD I</title>
    <style>
      body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 20px;  
            background-color: #f0eef2;
        }
        form {
            margin-bottom: 20px;
            width: 500px;
        }
        input[type="number"] {
            padding: 8px;
            width: 97%;
            border-radius: 3px;
            margin-top: 6px;
            border-radius: 10px;
        }
        input[type="submit"] {
            padding: 8px 16px;
            background-color: #b582b5;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            width: 80px;
            margin-top: 16px;
            
            
        }
        .resultado {
            padding: 10px;
            border: 1px solid #ccc;
            background: #b582b5;
            width: 480px;
            color: #fff;
            margin-left: 400px;
           
        }
        .input, .resultado {
            margin-bottom: 10px;
            border-radius: 4px;
            border-color: #b582b5 1px;
        }
    </style>
</head>
<body>
    <!-- campos para ser preenchidos com  umeros que serao verificados de acordo com o que se pede na atividade -->
    <p style="margin-left: 430px;"><strong style="color: #b582b5;">Insira números,  </strong>e veja a classificação de cada um:</p>
    
    <form style="margin-left: 400px" action="" method="post">
        <input type="number" id="num1" name="numeros[]" placeholder="Inserir numero" required><br>
        <input type="number" id="num2" name="numeros[]" placeholder="Inserir numero"  required><br>
        <input type="number" id="num3" name="numeros[]" placeholder="Inserir numero"  required><br>
        <input type="number" id="num4" name="numeros[]"  placeholder="Inserir numero"  required><br>
        <input type="number" id="num5" name="numeros[]"  placeholder="Inserir numero"  required><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
        // é par ou ímpar
        function verificarPouI($numero) {
            if ($numero == 0) {
                return "neutro";
            } elseif ($numero % 2 == 0) {
                return "par";
            } else {
                return "ímpar";
            }
        }

        // é redondo ou não
        function verificarRedondo($numero) {
            if ($numero != 0 && $numero % 10 == 0) {
                return "redondo";
            } else {
                return "não redondo";
            }
        }

        // é positivo, negativo ou zero
        function verificarPouN($numero) {
            if ($numero > 0) {
                return "positivo";
            } elseif ($numero < 0) {
                return "negativo";
            } else {
                return "neutro";
            }
        }

        // Array de exemplo
        $numerosEx = [5, 2, -4, 0, 20];

        // verifica se foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // pega os valores
            $numeros = $_POST['numeros'];

            // resultados dos números inseridos
            echo '<div class="resultado"><h3>Resultados dos Números Inseridos:</h3>';
            foreach ($numeros as $numero) {
                $parImpar = verificarPouI($numero);
                $redondo = verificarRedondo($numero);
                $positivoNegativo = verificarPouN($numero);
                echo "<p>O número $numero é $parImpar, $positivoNegativo e $redondo.</p>";
            }
            echo '</div>';
        } else {
            // resultados para números do array de exemplo quando se inicia
            echo '<div class="resultado"><h3>Classificação: </h3>';
            foreach ($numerosEx as $numero) {
                $parImpar = verificarPouI($numero);
                $redondo = verificarRedondo($numero);
                $positivoNegativo = verificarPouN($numero);
                echo "<p>O número $numero é $parImpar, $positivoNegativo e $redondo.</p>";
            }
            echo '</div>';
        }
    ?>
</body>
</html>
