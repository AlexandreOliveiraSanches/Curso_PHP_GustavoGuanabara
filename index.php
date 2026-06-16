<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendizado PHP</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="terminal">
        <div class="conteudo">
            <h1>Aprendizado PHP</h1>

            <ul>

                <?php

                    $arquivos = scandir('.');

                    foreach ($arquivos as $arquivo){

                        if (
                            $arquivo != '.' &&
                            $arquivo != '..' &&
                            $arquivo != '.git' &&
                            $arquivo != 'style' &&
                            $arquivo != 'index.php'
                        ){

                            echo "<li><a href='$arquivo'>$arquivo</a></li>";
                        }
                    }

                ?>

            </ul>
        </div>
    </div>
</body>
</html>