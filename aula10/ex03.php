<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados brasileiros</title>
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
            <a href="ex03.html">Voltar</a><br/>
            <?php
                $est = isset($_GET["estados"])?$_GET["estados"]:25;

                switch($est){
                    case 1:
                    case 3:
                    case 4:
                    case 14:
                    case 22:
                    case 23:
                    case 27:
                        echo "Pertence à região <span class='cor'>Norte</span>.";
                    break;
                    case 2:
                    case 5:
                    case 6:
                    case 10:
                    case 15:
                    case 17:
                    case 18:
                    case 20:
                    case 26:
                        echo "Pertence à região <span class='cor'>Nordeste</span>.";
                    break;
                    case 7:
                    case 9:
                    case 11:
                    case 12:
                        echo "Pertence à região <span class='cor'>Centro-Oeste</span>.";
                    break;
                    case 8:
                    case 13:
                    case 19:
                    case 25:
                        echo "Pertence à região <span class='cor'>Sudeste</span>.";
                    break;
                    case 16:
                    case 21:
                    case 24:
                        echo "Pertence à região <span class='cor'>Sul</span>.";
                }
            ?>
        </div>
    </div>
</body>
</html>