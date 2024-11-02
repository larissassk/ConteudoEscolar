<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // declarando a função

    function soma_valores($valor1, $valor2, $valor3){
        $soma = $valor1 + $valor2 + $valor3;
        echo "A soma dos valores $valor1, $valor2 e $valor3 é: ";
        echo $soma;
    }

    // variaveis que carregam valores para a aplicação

    $n1 = 10;
    $n2 = 22;
    $n3 = 35;


//execcução da função
soma_valores($n1, $n2, $n3);

    ?>
</body>
</html>