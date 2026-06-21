<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condições de múltiplos casos</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="terminal">
        <div class="conteudo">
            <a href="ex02.html">Voltar</a>
            <br/>
            <?php
                $ds = isset($_GET["ds"])?$_GET["ds"]:"[DIA NÃO INFORMADO]";

                switch($ds){
                    case "segunda":
                    case "terça":
                    case "quarta":
                    case "quinta":
                    case "sexta":
                        echo "Hoje é $ds, vai estudar!!!";
                    break;
                    case "sábado":
                    case "domingo":
                        echo "Hoje é $ds, fica na paz.";
                }
            ?>
        </div>
    </div>
</body>
</html>