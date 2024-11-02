<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <span>Sistema de tabuada</span>
    <section>
        <div>
            <form action="" method="post">
                <label for="numero">Digite um número:</label>
                <input type="number" name="numero" id="numero"> <br><br>
                <input type="submit">
            </form>
        </div>
        <div class="tabuada">
            <!-- Codigo de PHP -->
            <?php
            $num = filter_input(INPUT_POST, "numero");
            if ($num) {
                for ($i = 0; $i <= 10; $i++) {
                    echo "$num x $i = " . ($num * $i) . "<br>";
                }
            } else {
                echo "<script>alert('Informe um número para a tabuada');</script>";
            }
            ?>
        </div>
    </section>
</body>
</html>
