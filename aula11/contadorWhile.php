<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador com While</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="terminal">
        <div class="conteudo">
            <a href="index.php">Voltar</a>
            <br/>
            <?php
                $cont = 1;
                while($cont <= 10) {
                    echo "$cont"."<br>";
                    $cont++;
                }
            ?>
        </div>
    </div>
</body>
</html>