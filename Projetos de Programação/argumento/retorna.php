<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>retorna</title>
</head>
<body>
    <?php
    // bloco de função
    function triplo($numero){
        $x = $numero * 3;
        return $x;
    }

    // chamada de função
    $valor = 5;
    echo "O triplo de $valor é " . triplo($valor);
    ?>
</body>
</html>