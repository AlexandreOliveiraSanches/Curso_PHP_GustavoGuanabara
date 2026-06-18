<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Mundo PHP</title>
    <link rel="stylesheet" href="style/style.css">
    <style>
        h2{
            color: purple;
            text-shadow: 1px 1px 1px black;
        }
        span{
            color: #7B7FB5;
        }
    </style>
</head>
<body>
    <div class="terminal">
        <div class="conteudo">
            <h1>Testando PHP</h1>
            <?php
            echo "<h2>\"Olá, Mundo\" em <span>PHP</span></h2>";
            ?>
            </br>
            <a href="index.php">Voltar</a>
        </div>
    </div>
</body>
</html>