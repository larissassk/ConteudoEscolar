<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratique Desconto de 7%</title>
</head>
<body>
    <form method="post">
    <label for="num">Digite um número:</label>
    <input type="number" id="num" name="num" required>
    <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["numero"])) {
            $num = $_POST["numero"];
           $porcentagem = 0.27;
           $result = $num / $porcentagem;
           echo"27% do valor inserido é: ";
        }
    }
    ?>
</body>
</html>