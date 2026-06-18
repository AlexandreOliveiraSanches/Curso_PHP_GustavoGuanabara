<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade automática</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="terminal">
        <div class="conteudo">
        <a href="index.html">Voltar</a>
        <?php
            $ano = $_GET["anoNas"];
            $nome = $_GET["nome"];
            $idade = date("Y") - $ano;
            echo "{$nome} tem {$idade} anos.";
        ?>
        </br>
        </div>
    </div>
</body>
</html>