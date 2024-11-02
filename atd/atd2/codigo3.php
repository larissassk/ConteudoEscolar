<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
</head>
<body>

    <!-- O primeiro desafio que você tem que solucionar é entender o problema que este código está apresentando: -->

    <!-- O problema é que a variável $num dentro da function teste_escopo1() estava como uma variável local, e só podem ser acessadas dentro do escopo em que foram definidas dai dava o erro.Então mudei para global pois pode ser acessada em qualquer parte do código. -->

    <?php
        $num = 5000;
        function teste_escopo1()
        {
            global $num; // Adiciona a variavel  global $num
            $num += 5;
            echo $num . "<br>";
        }
        echo teste_escopo1();// Sendo global ela funcionara na função sem precisar chamar a variável.
    ?>
</body>
</html>