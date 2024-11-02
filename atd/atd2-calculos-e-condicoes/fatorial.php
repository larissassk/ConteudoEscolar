<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de fatorial</title>
</head>
<body>
    <h1>Calcula fatorial</h1>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    function fatorial($numero) {
        $resultado = 1;
        $passo_a_passo = array();
        for ($i = $numero; $i >= 1; $i--) {
            $resultado *= $i;
            $passo_a_passo[] = $i;
        }
        return $passo_a_passo;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];
            $passo_a_passo = fatorial($numero);
            echo '<p>' . $numero . '! = ';
            foreach ($passo_a_passo as $index => $fator) {
                echo $fator;
                if ($index < count($passo_a_passo) - 1) {
                    echo ' · ';
                }
            }
            echo ' = ' . array_product($passo_a_passo);
            echo '</p>';
        } else {
            echo "Por favor, digite um número.";
        }
    }
    ?>
</body>
</html>
