<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto para Preço</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="terminal">
        <div class="conteudo">
            <?php
                $preço = 1500;
                echo "O valor do produto é: R$" .number_format($preço,2,",",".");
                $preço -= (($preço*10)/100);
                echo "</br>Com desconto, ele passa a ser: R$" .number_format($preço,2,",",".");
            ?>
        </div>
    </div>
</body>
</html>