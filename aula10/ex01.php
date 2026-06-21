<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional Switch</title>
    <link rel="stylesheet" href="../style/style.css">
    <style>
        span.cor{
            color: red;
        }
    </style>
</head>
<body>
    <div class="terminal">
        <div class="conteudo">
            <a href="ex01.html">Voltar</a>
            <br/>
            <?php
                $num = isset($_GET["num"])?$_GET["num"]:null;
                $op = isset($_GET["oper"])?$_GET["oper"]:1;

                switch($op){
                    case 1:
                        $r = $num * 2;
                    break;
                    case 2:
                        $r = pow($num, 3);
                        break;
                    case 3:
                        $r = sqrt($num);
                }
                echo "O resultado da operação com o número $num é <span class=cor>$r</span>.";
                
            ?>
        </div>
    </div>
</body>
</html>