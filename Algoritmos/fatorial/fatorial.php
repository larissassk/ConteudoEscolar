<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de fatorial</title>
</head>
<style>
        * {
            font-family: Arial, Helvetica, sans-serif; 
        }
        body {
            background-color: #e6e6fa;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto; 
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="numero"] {
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            font-size: 16px;
            background-color: #9370DB;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #8a2be2;
        }

        p{
            font-size: 18px;
            max-width: 400px;
            margin: 20px auto; 
            
        }

</style>
<body>
    <h1>Calcula fatorial</h1>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>


    <?php
    // Função para calcular o fatorial e mostrar o passo a passo
    function fatorial($numero) {
        $resultado = 1;
        $passo_a_passo = array(); // Array para guardar os resultados
        //usando um loop for para iterar de $numero até 1. Em cada iteração, você multiplica o $resultado pelo valor de $i e armazena o resultado em $resultado. Além disso, você adiciona cada resultado parcial ao array $passo_a_passo.
        for ($i = $numero; $i >= 1; $i--) {
            $resultado *= $i;
            $passo_a_passo[] = $i; // Adiciona o fator atual ao array
        }
        return $passo_a_passo;
    }

    // Verificar se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar se o campo 'numero' foi enviado
        if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];
            // Chama a função fatorial e obtém o array de fatores
            $passo_a_passo = fatorial($numero); 
            // Mostra o resultado do fatorial
            echo '<p>' . $numero . '! = ';
            foreach ($passo_a_passo as $index => $fator) {
                echo $fator;
                if ($index < count($passo_a_passo) - 1) {
                    echo ' · ';
                }
            }
            echo ' = ' . array_product($passo_a_passo); // Exibe o resultado final
            echo '</p>';
        } else {
            echo "Por favor, digite um número.";
        }
    }
    ?>


</body>
</html>
