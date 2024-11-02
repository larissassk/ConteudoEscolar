<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>atividade de exemplo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    // A partir do PHP 7 Bloco exercicio 1
    define('ANIMALS', array(
        'dog',
        'cat',
        'bird'
    ));
    echo ANIMALS[1]; // imprime cat
    ?>

    <?php
    // Bloco exercicio 2
    define('CORES', array(
        'azul',
        'verde',
        'preto',
        'rosa',
        'amarelo'
    ));
    echo CORES[1]; // imprime o numero selecionado "verde".
    ?>

    <?php
    // Bloco exercicio 3
    define('OBJETOS', array(
        'caneta azul',
        'bolsa verde',
        'garrafa cinza',
        'relógio branco',
        'lápis amarelo'
    ));
    echo OBJETOS[1]; // imprime o numero selecionado "verde".
    ?>
</body>
</html>