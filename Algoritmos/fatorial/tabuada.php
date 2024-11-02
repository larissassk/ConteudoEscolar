<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<style>
    section{
            width: 80%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }

        span {
            display: block;
            text-align: center;
            
        }

        form {
            text-align: center;
        }

        label {
            display: block;
            font-size: 18px;
            margin-bottom: 10px;
        }

        input[type="number"] {
            padding: 8px;
            font-size: 16px;
            width: 100px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 8px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: blue;
        }

        .tabuada {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <section>
        <span>Sistema de tabuada</span>
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
            //cria uma variavel é pega o valor que é inserido no formulário
            $num = filter_input(INPUT_POST, "numero");
            if ($num) {
                for ($i = 0; $i <= 10; $i++) { // laço de repetição
                    echo "$num x $i = " . ($num * $i) . "<br>";
                }
            } else {
                //exibi mensagem quando nao é inserido nenhum numero
                echo "<script>alert('Informe um número para a tabuada');</script>";
            }
            ?>
        </div>
    </section>

</body>
</html>