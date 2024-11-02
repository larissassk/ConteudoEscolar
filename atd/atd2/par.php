<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar</title>
</head>

<body>
    <h1>Código para verificação - Par ou Impar</h1>
    <!-- form cria um formulario que abre uma caixa com o tipo para numero e um botao para ser enviado -->
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar se o campo 'numero' foi enviado
        if (isset($_POST["numero"])) {
            $num = $_POST["numero"];
            if ($num % 2 == 0) {
                echo "<p>O número informado é PAR.</p>";
            } else {
                echo "<p>O número informado é ÍMPAR.</p>";
            }
        }
    }
    ?>
</body>

</html>