<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade automática</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="terminal">
        <div class="conteudo">
            <form method="get" action="php">
                Ano de Nascimento:<input type="number" name="idade"/>
                <input type="submit" value="Enviar"/>
            </form>
            <?php
                $ano = $_GET["idade"];
                $idade = date('Y') - $ano;
                $nome = "Alexandre";
                echo "{$nome} tem {$idade} anos.";
            ?>
        </div>
    </div>
</body>
</html>