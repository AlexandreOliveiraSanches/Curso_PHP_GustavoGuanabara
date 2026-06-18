<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz Quadrada</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="terminal">
        <div class="conteudo">
            <?php
                $nome = $_GET["nome"];
                $anoNasc = $_GET["anoNasc"];
                $idade = date("Y") - $anoNasc;
                $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Não selecionado]";
                echo "Seu nome é $nome, você nasceu em $anoNasc, sexo informado: $sexo.";
                echo "</br>E atualmente tem $idade anos.";
            ?>
            </br>
            <a href="index.html">Voltar</a>
        </div>
    </div>
</body>
</html>