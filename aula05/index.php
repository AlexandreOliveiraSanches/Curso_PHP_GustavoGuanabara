<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="terminal">
        <div class="conteudo">
            <form method="get" action="index.php">
                <p>
                    Informe o primeiro número<input type="number" name="n1" placeholder="Primeiro número" required>
                </p>
                <p>
                    Informe o segundo número<input type="number" name="n2" placeholder="Segundo número" required>
                </p>
                <p>
                    <input type="submit" value="Confirmar">
                </p>
            </form>
            <?php
                $n1 = $_GET["n1"];
                $n2 = $_GET["n2"];

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
             </br>
            <a href="../index.php">Voltar</a>
        </div>
    </div>
</body>
</html>