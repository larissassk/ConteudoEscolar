<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>
<?php
//gera a sequência de Fibonacci com os primeiros n termos.
function fibonacci($n) {
    //Se $n for 0, a função retorna um array vazio, pois não há termos para gerar.
    if ($n == 0) {
        return [];
// a função retorna um array contendo apenas o número 1, pois é o primeiro termo da sequência de Fibonacci.
    } elseif ($n == 1) {
        return [1];
// Se $n for 2, a função retorna um array contendo os dois primeiros termos da sequência (1 e 1).
    } elseif ($n == 2) {
        return [1, 1];

    } else {
        $fibonacci_sequence = fibonacci($n - 1);
        $next_number = end($fibonacci_sequence) + prev($fibonacci_sequence);
        array_push($fibonacci_sequence, $next_number);
        return $fibonacci_sequence;
    }
}

    $n = readline("Digite o número de termos da sequência de Fibonacci que você deseja gerar: ");
    $fib_sequence = fibonacci($n);
    echo "Sequência de Fibonacci com $n termos: ";
    foreach ($fib_sequence as $num) {
        echo $num . " ";
}
?>
</body>
</html>