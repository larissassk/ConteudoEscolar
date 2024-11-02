<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo Hora</title>
</head>
<body>
    <!-- entender o código-->
    <!-- esse codigo adiciona o fuso horario e com as condiçoes de if e else nos mostra uma mensagem-->

    <?php
     date_default_timezone_set('America/Sao_Paulo'); //adicionar o fuso horario atraves da timezone
    $t = date("H");
    if ($t < "20"){
        echo $t;
        echo "</br> Tenha um ótimo dia!";

    if ($t > "20"){
        echo $t;
        echo "</br> Tenha uma ótima noite";
    }    
    }
    ?>
</body>
</html>