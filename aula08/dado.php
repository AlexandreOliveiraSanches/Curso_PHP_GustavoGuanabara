<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
         $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
         $cor = isset($_GET["cor"])?$_GET["cor"]:"#0000";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações Pessoais</title>
    <link rel="stylesheet" href="../style/style.css">
    <style>
        span.texto{
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor;?>;;
        }
    </style>
</head>
<body>
    <div class="terminal">
        <div class="conteudo">
            <a href="index.html">Voltar</a>
            <br/>
            <?php
                $nome = $_GET["nome"];
                $anoNasc = $_GET["anoNasc"];
                $idade = date("Y") - $anoNasc;
                $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Não selecionado]";
                $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
                $cor = isset($_GET["cor"])?$_GET["cor"]:"#0000";
                echo "<span class='texto'>Seu nome é $nome, você nasceu em $anoNasc, sexo informado: $sexo.
                </br>E atualmente tem $idade anos.</span>";
            ?>
            </br>
            
        </div>
    </div>
</body>
</html>