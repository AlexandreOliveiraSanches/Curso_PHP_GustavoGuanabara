<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="terminal">
        <div class="conteudo">
            <?php
                $n1 = 3;
                $n2 = 2;
                echo "Números utilizados: $n1 e $n2<br/>";
                echo "<br/>A soma vale: ". ($n1 + $n2);
                echo "<br/>A subtração vale: ". ($n1 - $n2);
                echo "<br/>A multiplicação vale: ". ($n1 * $n2);
                echo "<br/>A divisão vale: ". ($n1 / $n2);
                echo "<br/>O módulo vale: ". ($n1 % $n2);
                echo "<br/>A média vale: ". (($n1 + $n2)/2);
                echo "<br/><br/>Funções Matemáticas:
                <br/>abs()Valor absoluto
                <br/>pow()Potenciação
                <br/>sqrt()Raiz Quadrada
                <br/>round()Arredondamento
                <br/>intval()Valor Inteiro da Variável
                <br/>number_format()Formatação";
            ?>
        </div>
    </div>
</body>
</html>